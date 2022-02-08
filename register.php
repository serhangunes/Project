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
            <h2>Register</h2>
            <form method="post" action="register.php">
                <p>Username<br></p>
                <input class="login" type="text" name="username">
                <p>Password<br></p>
                <input class="login" type="password" name="password">
                <a href="index.php"><input class="nodec mb-1 mt-1 backblue noborder button pointer center white" value="Register"></a>
            </form>
        </div>
    </body>
</html>
