<?php
    session_start();
?>
<body>
<header>
    <nav>
        <div class="nav-wrapper">
            <a class="homeLink" href="index.php"><i class="material-icons homeIcon">home</i></a>
            <div class="nav-login">
                <?php
                    if(isset($_SESSION["user"])) {
                        ?>
                        <div class="currentUser">
                            <i class="material-icons accountCircle">account_circle</i>
                            <div><?php echo $_SESSION["user"] ?></div>
                        </div>
                        <?php if($_SERVER['REQUEST_URI'] == "/createPost.php") { ?>
                            <a class="createButton" href="savePost.php">Post it</a>
                        <?php
                        } else { ?>
                            <a class="createButton" href="createPost.php">Create post</a>
                        <?php
                        } ?>
                        <a class="logoutButton" href="includes/logout.inc.php">Sign out</a>
                        <?php
                    } else {
                        ?>
                        <form action="includes/login.inc.php" method="POST">
                            <input class="inputUsername" type="text" name="uid" placeholder="Username/e-mail" value="">
                            <input class="inputPassword" type="password" name="pwd" placeholder="Password" autocomplete="new-password">
                            <button class="loginButton" type="submit" name="submit">Login</button>
                            <a class="signupButton" href="signup.php">Sign up</a>
                        </form>
                        <?php
                    }
                 ?>

            </div>
        </div>
    </nav>
</header>
