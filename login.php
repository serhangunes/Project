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
                <input class="buttonsmall pointer white noborder backblue mb-1 mt-1" type="submit" name="login" value="Login">
                <input class="buttonsmall pointer white noborder nobackground black" type="submit" name="register" value="Register">
            </form>
        </div>
    </body>
</html>
