<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta lang="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans|Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/signup.css">

    <script src="textFix.js"></script>
</head>
<?php
    include_once 'header.php';
 ?>
<section class="main-container">
    <div class="main-wrapper">
        <h2>Sign up</h2>
        <p class="subtitle">And share <b><i>your</i></b> Post IT's!
        <form class="signup-form" action="includes/signup.inc.php" method="POST">
            <div class="inputContainer">
                <input class="inputField" type="text" name="first">
                <div><i class="material-icons md-18">face</i>Firstname</div>
            </div>
            <div class="inputContainer">
                <input class="inputField" type="text" name="last">
                <div><i class="material-icons md-18">face</i>Lastname</div>
            </div>
            <div class="inputContainer">
                <input class="inputField" type="text" name="email">
                <div><i class="material-icons md-18">email</i>E-mail</div>
            </div>
            <div class="inputContainer">
                <input class="inputField" type="text" name="uid">
                <div><i class="material-icons md-18">person</i>Username</div>
            </div>
            <div class="inputContainer">
                <input class="inputField" type="password" name="pwd" autocomplete="new-password">
                <div><i class="material-icons md-18">lock</i>Password</div>
            </div>
            <button type="submit" name="submit">Sign up</button>
        </form>
    </div>
</section>
<?php
    include_once 'footer.php';
 ?>
