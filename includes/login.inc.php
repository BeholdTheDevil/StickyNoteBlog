<?php

if(isset($_POST['submit'])) {
    session_start();
    include_once 'dbh.inc.php';

    if(isset($conn)) {
        $uid = filter_input(INPUT_POST, "uid", FILTER_SANITIZE_SPECIAL_CHARS);
        $pwd = $_POST['pwd'];

        if(empty($uid) || empty($pwd)) {
            header("Location: ../?login=empty");
            exit();
        } else {
            $stmt = $conn->prepare('SELECT * FROM users WHERE user_uid=? OR user_email=?');
            $stmt->execute([$uid, $uid]);
            $result = $stmt->fetch(PDO::FETCH_OBJ);

            if($stmt->rowCount() > 0) {
                if(password_verify($pwd, $result->user_pwd)) {
                    $_SESSION['user'] = $uid;
                    header("Location: /");
                    exit();
                } else {
                    header("Location: ../?login=invalidpwd");
                    exit();
                }
            } else {
                header("Location: ../?login=usernotfound");
                exit();
            }
        }
    }
}

 ?>
