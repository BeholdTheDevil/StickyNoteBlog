<?php

if(isset($_POST['submit'])) {
    session_start();
    include_once 'dbh.inc.php';

    $first = filter_input(INPUT_POST, "first", FILTER_SANITIZE_SPECIAL_CHARS);
    $last = filter_input(INPUT_POST, "last", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_var(filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL), FILTER_VALIDATE_EMAIL);
    $uid = filter_input(INPUT_POST, "uid", FILTER_SANITIZE_SPECIAL_CHARS);
    $pwd = $_POST['pwd'];

    //Error handlers
    if(empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) {
        header("Location: ../signup.php?signup=empty");
        exit();
    } else {
        $stmt = $conn->prepare('SELECT * FROM users WHERE user_uid=? OR user_email=?');
        $stmt->execute([$uid, $email]);
        $count = $stmt->rowCount();

        if($count > 0) {
            header("Location: ../signup.php?signup=usertaken");
            exit();
        } else {
            //HASHING
            $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

            //Inserting new user
            $insert = $conn->prepare('INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES (?, ?, ?, ?, ?)');
            $insert->execute([$first, $last, $email, $uid, $hashedPwd]);
            header("Location: ../signup.php?signup=success");
            exit();
        }
    }

} else {
    header("Location: ../signup.php");
    exit();
}

?>
