<?php
include_once("connection.php");
if (isset($_POST['register'])){
    if (!empty($_POST['username'])){
        if (!empty($_POST['password'])){
            if ($username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_FULL_SPECIAL_CHARS)) {
                if ($password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_FULL_SPECIAL_CHARS)) {

                    $hash_password = password_hash($password, PASSWORD_DEFAULT);

                    $stmt = mysqli_prepare($conn, "
                                        SELECT username
                                        FROM user
                                        WHERE username = ?
                                    ") or die(mysqli_error($conn));
                                    mysqli_stmt_bind_param($stmt, "s", $username);
                                    mysqli_stmt_execute($stmt) or die(mysqli_error($conn));
                                    mysqli_stmt_store_result($stmt) or die(mysqli_error($conn));
                    if (mysqli_stmt_num_rows($stmt) == 0) {
                        $stmt = mysqli_prepare($conn, "
                            INSERT
                            INTO user (
                                user_id,
                                username,
                                hash_password
                            )
                            VALUES
                            (
                                ?,
                                ?,
                                ?
                            )
                        ") or die(mysqli_error($conn));
                        mysqli_stmt_bind_param($stmt, "iss", $user_id, $username, $hash_password);
                        mysqli_stmt_execute($stmt) or die(mysqli_error($conn));
                        mysqli_stmt_store_result($stmt) or die(mysqli_error($conn));
                        mysqli_stmt_close($stmt);
                        header("Location: index.php");
                    } else {
                        echo "<div class='alert-danger bold'>This username has already been taken, please try again.</div>";
                    }
                } else {
                    echo "<div class='alert-danger bold'>Please refrain from using special characters in your password.</div>";
                }
            } else {
                echo "<div class='alert-danger bold'>Please refrain from using special characters in your username.</div>";
            }
        } else {
            echo "<div class='alert-danger bold'>Please fill in a password</div>";
        }
    } else {
        echo "<div class='alert-danger bold'>Please fill in a username</div>";
    }
}
?>
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
                <input class="nodec mb-1 mt-1 backblue noborder button pointer center white" type="submit" name="register" value="Register">
            </form>
        </div>
    </body>
</html>
