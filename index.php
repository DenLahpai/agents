<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
       <?php
       $headTitle = "Login";
       include "includes/head.html";
       ?>
    </head>
    <body>
        <div class="content"><!-- content -->
            <?php
            $pageTitle = "Welcome";
            include "includes/header.html";
            ?>
            <main>
                <form action="login.php" method="post">
                    <ul>
                        <?php
                        if ($_SESSION['msg_error'] != NULL) {
                            echo "<li class=\"error\">".$_SESSION['msg_error']."</li>";
                        }
                        ?>
                        <li>
                            <input type="text" name="username" id="username" placeholder="Your Email">
                        </li>
                        <li>
                            <input type="password" name="password" id="password" placeholder="Your Password">
                        </li>
                        <li>
                            <button type="submit" name="button_submit" class="button_submit" id="button_submit">Login</button>
                        </li>
                        <li>
                            <a href="forgot_password.php">Forgot your Password?</a>
                        </li>
                    </ul>
                </form>
            </main>
            <?php include "footer.html"; ?>
        </div><!-- end of content -->
    </body>
</html>
