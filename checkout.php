<?php
session_start();
include 'components/connection.php';

if(empty($_SESSION['cart'])){
    header("Location: cart.php");
    exit();
}

$total = 0;
?>

<!DOCTYPE html>
<html>
<head>

    <title>Checkout - Shine Up</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family:Arial, sans-serif;
            background:#f4f7fb;
        }

        .checkout-container{
            width:90%;
            max-width:1200px;
            margin:50px auto;
            display:grid;
            grid-template-columns:2fr 1fr;
            gap:30px;
        }

        /* FORM */

        .checkout-form,
        .order-summary{
            background:white;
            padding:30px;
            border-radius:20px;
            box-shadow:0 3px 15px rgba(0,0,0,0.08);
        }

        h2{
            margin-bottom:25px;
            color:#1565c0;
        }

        .input-group{
            margin-bottom:20px;
        }

        .input-group label{
            display:block;
            margin-bottom:8px;
            font-weight:bold;
        }

        .input-group input,
        .input-group textarea{
            width:100%;
            padding:14px;
            border:1px solid #ccc;
            border-radius:10px;
            font-size:16px;
            outline:none;
        }

        textarea{
            resize:none;
            height:100px;
        }

        /* ORDER ITEMS */

        .order-item{
            display:flex;
            justify-content:space-between;
            margin-bottom:15px;
            padding-bottom:10px;
            border-bottom:1px solid #eee;
        }

        .total{
            font-size:28px;
            font-weight:bold;
            color:#1565c0;
            margin-top:20px;
            text-align:center;
        }

        /* BUTTON */

        .checkout-btn{
            width:100%;
            background:#28a745;
            color:white;
            border:none;
            padding:16px;
            border-radius:12px;
            font-size:18px;
            font-weight:bold;
            cursor:pointer;
            transition:0.3s;
            margin-top:20px;
        }

        .checkout-btn:hover{
            background:#1f7a34;
        }

        /* MOBILE */

        @media(max-width:768px){

            .checkout-container{
                grid-template-columns:1fr;
            }

        }

    </style>

</head>

<body>

<div class="checkout-container">

    <!-- LEFT FORM -->

    <div class="checkout-form">

        <h2>🧾 Billing Details</h2>

        <form action="place_order.php" method="POST">

            <div class="input-group">
                <label>Full Name</label>
                <input type="text" name="name" required>
            </div>

            <div class="input-group">
                <label>Phone Number</label>
                <input type="text" name="phone" required>
            </div>

            <div class="input-group">
                <label>Email Address</label>
                <input type="email" name="email" required>
            </div>

            <div class="input-group">
                <label>City</label>
                <input type="text" name="city" required>
            </div>

            <div class="input-group">
                <label>Full Address</label>
                <textarea name="address" required></textarea>
            </div>

            <button class="checkout-btn">
                Place Order
            </button>

        </form>

    </div>

    <!-- RIGHT SUMMARY -->

    <div class="order-summary">

        <h2>🛒 Order Summary</h2>

        <?php

        foreach($_SESSION['cart'] as $id => $qty){

            $res = $conn->query("SELECT * FROM products WHERE id=$id");
            $row = $res->fetch_assoc();

            $subtotal = $row['price'] * $qty;
            $total += $subtotal;
        ?>

        <div class="order-item">

            <div>
                <?php echo $row['name']; ?>
                × <?php echo $qty; ?>
            </div>

            <div>
                Rs <?php echo $subtotal; ?>
            </div>

        </div>

        <?php } ?>

        <div class="total">
            Total: Rs <?php echo $total; ?>
        </div>

    </div>

</div>

</body>
</html>