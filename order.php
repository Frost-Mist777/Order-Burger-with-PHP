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
    <h3>Select your order/s:</h3>
    <form action="order.php" method="POST">
        <input type="checkbox" name="orders[]" value="Ham and Cheese">
        Ham and Cheese Burger (PHP25)<br>
        <input type="checkbox" name="orders[]" value="Chicken">
        Chicken Burger        (PHP30)<br>
        <input type="checkbox" name="orders[]" value="Turkey">
        Turkey Burger         (PHP50)<br>
        <input type="checkbox" name="orders[]" value="Specialty Burger">
        Specialty Burger      (PHP80)<br>
        <input type="checkbox" name="orders[]" value="Bacon Burger">
        Bacon Burger          (PHP40)<br>
        <input type="submit" name="done" value="Done"><br><br>
    </form>
</body>
</html>

<?php
    if(isset($_POST['done'])){
        if(isset($_POST['orders'])){
        $orders = $_POST['orders'];
        $total = 0;

        echo "<b>You ordered: </b><br>"; 
        // Get the list and total of ordered burgers
            foreach($orders as $order){
                switch ($order){
                    case "Ham and Cheese":
                        echo "Ham and Cheese Burger (PHP25.00) <br>";
                        $total = $total + 25;
                        break;
                    case "Chicken":
                        echo "Chicken Burger (PHP30.00) <br>";
                        $total = $total + 30;
                        break;
                    case "Turkey":
                        echo "Turkey Burger (PH50.00) <br>";
                        $total = $total + 50;
                        break;
                    case "Ham and Cheese":
                        echo "Ham and Cheese Burger (PHP25.00) <br>";
                        $total = $total + 25;
                        break;
                    case "Specialty":
                        echo "Specialty Burger (PHP80.00) <br>";
                        $total = $total + 80;
                        break;
                    case "Bacon":
                        echo "Bacon Burger (PHP40.00) <br>";
                        $total = $total + 25;
                        break;
                    default:
                        echo "Please Select Your Order";
                        break;
                }
            }
            echo "<br><b>Your total is PHP{$total}.00</b>";
        }
        else{
            echo "";
        }
    }
?>

