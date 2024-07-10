<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Insta Burger</title>
</head>
<body>
    <h3>Welcome <?php echo $_SESSION['username'];?> to Insta Burger</h3>
    <form action="" method="POST">
        <p>Do you want to order?</p>
        <input type="submit" name="yes" value="Yes">
        <input type="submit" name="no" value="No">
    </form>
</body>
</html>

<?php
        if(isset($_POST['yes'])== "Yes"){
            header('Location: order.php');
            exit ();
        }
        elseif(isset($_POST['no']) == "No"){
            header('Location: login.php');
            exit ();
        }
        else{
            echo "";
        }
?>