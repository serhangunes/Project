<!DOCTYPE html>
<html>
    <head>
        <title>
            NHL Webshop
        </title>
        <link rel="stylesheet" href="style.css">
        <?php include_once("components/header.html"); ?>
    </head>
    <body>
        <div class="loginbox mt-10">
            <h2>Login</h2>
            <form method="post">
                <p>Username<br></p>
                <input class="login" type="text" name="username">
                <p>Password<br></p>
                <input class="login" type="password" name="username">
                <a href="homepage.php"><input class="buttonsmall noborder backblue white mb-1 mt-1 center pointer" value="Login"></a>
                <a class="black nodec font-1" href="register.php">Register</a>
            </form>
        </div>
    </body>
</html>
