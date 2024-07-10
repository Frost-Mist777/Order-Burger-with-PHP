<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In Page</title>
</head>
    <body>
        <form action="login.php" method="post">
            <label>Username:</label>
            <input type="text" name="username"> <br><br>

            <label>Password:</label>
            <input type="password" name="password"> <br><br>

            <input type="submit" name="login" value="Log In"> <br><br>
        </form>
    </body>
</html>

<?php
    if(isset($_POST['login'])){
        if(empty($_POST['username'])){
            echo "Username is missing";
        }
        elseif(empty($_POST['password'])){
            echo "Password is missing";
        }
        else{
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['password'] = $_POST['password'];
            header('Location: page.php');
        }
    }
?>