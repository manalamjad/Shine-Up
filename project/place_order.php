<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
include 'components/connection.php';

/* CHECK CART */

if(empty($_SESSION['cart'])){
    header("Location: cart.php");
    exit();
}

/* CHECK POST */

if($_SERVER['REQUEST_METHOD'] != "POST"){
    die("Invalid Request");
}

/* GET FORM DATA */

$name    = mysqli_real_escape_string($conn, $_POST['name']);
$phone   = mysqli_real_escape_string($conn, $_POST['phone']);
$email   = mysqli_real_escape_string($conn, $_POST['email']);
$city    = mysqli_real_escape_string($conn, $_POST['city']);
$address = mysqli_real_escape_string($conn, $_POST['address']);

$total = 0;

/* CALCULATE TOTAL */

foreach($_SESSION['cart'] as $id => $qty){

    $id = (int)$id;

    $res = $conn->query("SELECT * FROM products WHERE id=$id");

    if(!$res){
        die("Product Query Failed");
    }

    $row = $res->fetch_assoc();

    if(!$row){
        continue;
    }

    $subtotal = $row['price'] * $qty;
    $total += $subtotal;
}

/* INSERT ORDER */

$orderQuery = "
INSERT INTO orders
(name, phone, email, city, address, total_amount)

VALUES(
'$name',
'$phone',
'$email',
'$city',
'$address',
'$total'
)
";

if(!$conn->query($orderQuery)){
    die("Order Insert Error: " . $conn->error);
}

/* GET ORDER ID */

$order_id = $conn->insert_id;

/* INSERT ORDER ITEMS */

foreach($_SESSION['cart'] as $id => $qty){

    $id = (int)$id;

    $res = $conn->query("SELECT * FROM products WHERE id=$id");
    $row = $res->fetch_assoc();

    if(!$row){
        continue;
    }

    $price = $row['price'];

    $itemQuery = "
    INSERT INTO order_items
    (order_id, product_id, quantity, price)

    VALUES(
    '$order_id',
    '$id',
    '$qty',
    '$price'
    )
    ";

    if(!$conn->query($itemQuery)){
        die("Order Item Error: " . $conn->error);
    }
}

/* CLEAR CART */

unset($_SESSION['cart']);

?>

<!DOCTYPE html>
<html>
<head>

    <title>Order Success</title>

   <style>

    body{
        margin:0;
        font-family:Arial;
        background:#f4f7fb;
        display:flex;
        justify-content:center;
        align-items:center;
        height:100vh;
    }

    .success-box{
        width:500px;
        background:white;
        padding:50px;
        border-radius:20px;
        text-align:center;
        box-shadow:0 5px 20px rgba(0,0,0,0.1);
    }

    .success-box h1{
        color:#28a745;
        font-size:42px;
        margin-bottom:20px;
    }

    .success-box p{
        font-size:20px;
        color:#555;
        margin-bottom:30px;
        line-height:1.6;
    }

    /* NEW MODERN BUTTON */

    .continue-btn{
        display:inline-block;
        background:linear-gradient(135deg,#1565c0,#42a5f5);
        color:white;
        padding:16px 40px;
        text-decoration:none;
        border-radius:14px;
        font-weight:bold;
        font-size:18px;
        transition:0.3s;
        box-shadow:0 4px 15px rgba(21,101,192,0.3);
    }

    .continue-btn:hover{
        transform:translateY(-3px);
        box-shadow:0 8px 20px rgba(21,101,192,0.4);
    }

</style>
</head>

<body>

<div class="success-box">

    <h1>✅ Order Placed</h1>

    <p>
        Thank you for shopping with Shine Up.
        Your order has been placed successfully.
    </p>

  <a href="home.php" class="continue-btn">
    🛍️ Continue Shopping
</a>

</div>

</body>
</html>