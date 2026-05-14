<?php
session_start();
include 'components/connection.php';

if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = [];
}

/* ADD TO CART */

if(isset($_GET['action']) && $_GET['action'] == "add"){

    $id = (int)$_GET['id'];

    if(isset($_SESSION['cart'][$id])){
        $_SESSION['cart'][$id]++;
    }else{
        $_SESSION['cart'][$id] = 1;
    }

    header("Location: cart.php");
    exit();
}

/* REMOVE ITEM */

if(isset($_GET['remove'])){

    $id = (int)$_GET['remove'];

    unset($_SESSION['cart'][$id]);

    header("Location: cart.php");
    exit();
}

/* DECREASE QTY */

if(isset($_GET['dec'])){

    $id = (int)$_GET['dec'];

    if(isset($_SESSION['cart'][$id])){

        $_SESSION['cart'][$id]--;

        if($_SESSION['cart'][$id] <= 0){
            unset($_SESSION['cart'][$id]);
        }
    }

    header("Location: cart.php");
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>

    <title>Shine Up Cart</title>

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

        /* PAGE TITLE */

        .page-title{
            text-align:center;
            padding:30px 0;
            font-size:40px;
            color:#1565c0;
            font-weight:bold;
        }

        /* CONTAINER */

        .cart-container{
            width:90%;
            margin:auto;
            margin-bottom:50px;
        }

        /* EMPTY CART */

        .empty-cart{
            background:white;
            padding:40px;
            text-align:center;
            border-radius:15px;
            box-shadow:0 3px 12px rgba(0,0,0,0.08);
            font-size:22px;
            color:#666;
        }

        /* CART CARD */

        .cart-card{
            background:white;
            border-radius:18px;
            padding:20px;
            margin-bottom:20px;
            display:flex;
            align-items:center;
            justify-content:space-between;
            gap:20px;
            box-shadow:0 3px 15px rgba(0,0,0,0.08);
            transition:0.3s;
        }

        .cart-card:hover{
            transform:translateY(-3px);
        }

        /* LEFT */

        .cart-left{
            display:flex;
            align-items:center;
            gap:20px;
        }

        .cart-left img{
            width:140px;
            height:140px;
            object-fit:contain;
            background:#fff;
            border-radius:15px;
            padding:10px;
            border:1px solid #eee;
        }

        /* DETAILS */

        .cart-details h3{
            font-size:28px;
            margin-bottom:10px;
            color:#222;
        }

        .price{
            color:#1565c0;
            font-size:22px;
            font-weight:bold;
            margin-bottom:15px;
        }

        /* QUANTITY */

        .qty-box{
            display:flex;
            align-items:center;
            gap:15px;
            margin-bottom:15px;
        }

        .qty-btn{
            width:38px;
            height:38px;
            border:none;
            border-radius:50%;
            background:#1565c0;
            color:white;
            font-size:20px;
            cursor:pointer;
            text-decoration:none;
            display:flex;
            align-items:center;
            justify-content:center;
            transition:0.3s;
        }

        .qty-btn:hover{
            background:#0d47a1;
        }

        .qty-number{
            font-size:22px;
            font-weight:bold;
        }

        /* SUBTOTAL */

        .subtotal{
            font-size:22px;
            font-weight:bold;
            color:#111;
        }

        /* REMOVE BUTTON */

        .remove-btn{
            background:#ffebee;
            color:#d32f2f;
            padding:12px 18px;
            border-radius:10px;
            text-decoration:none;
            font-weight:bold;
            transition:0.3s;
        }

        .remove-btn:hover{
            background:#d32f2f;
            color:white;
        }

        /* TOTAL BOX */

        .total-box{
            background:white;
            padding:25px;
            border-radius:18px;
            text-align:center;
            box-shadow:0 3px 15px rgba(0,0,0,0.08);
            margin-top:30px;
        }

        .total-box h2{
            font-size:36px;
            color:#1565c0;
            margin-bottom:20px;
        }

        /* CHECKOUT BUTTON */

        .checkout-btn{
            display:inline-block;
            background:#28a745;
            color:white;
            text-decoration:none;
            padding:15px 35px;
            border-radius:12px;
            font-size:20px;
            font-weight:bold;
            transition:0.3s;
        }

        .checkout-btn:hover{
            background:#1f7a34;
        }

        /* MOBILE */

        @media(max-width:768px){

            .cart-card{
                flex-direction:column;
                align-items:flex-start;
            }

            .cart-left{
                flex-direction:column;
                align-items:flex-start;
            }

            .cart-left img{
                width:100%;
                height:220px;
            }

            .page-title{
                font-size:30px;
            }

            .cart-details h3{
                font-size:24px;
            }

        }

    </style>

</head>

<body>

<h1 class="page-title">🛒 Shine Up Cart</h1>

<div class="cart-container">

<?php

$total = 0;

if(empty($_SESSION['cart'])){

    echo "<div class='empty-cart'>🛍️ Your cart is empty</div>";

}else{

    foreach($_SESSION['cart'] as $id => $qty){

        $res = $conn->query("SELECT * FROM products WHERE id=$id");
        $row = $res->fetch_assoc();

        $subtotal = $row['price'] * $qty;
        $total += $subtotal;

?>

<div class="cart-card">

    <div class="cart-left">

        <img src="img/<?php echo $row['image']; ?>">

        <div class="cart-details">

            <h3><?php echo $row['name']; ?></h3>

            <div class="price">
                Rs <?php echo $row['price']; ?>
            </div>

            <div class="qty-box">

                <a class="qty-btn"
                   href="cart.php?dec=<?php echo $id; ?>">
                    -
                </a>

                <div class="qty-number">
                    <?php echo $qty; ?>
                </div>

                <a class="qty-btn"
                   href="cart.php?action=add&id=<?php echo $id; ?>">
                    +
                </a>

            </div>

            <div class="subtotal">
                Subtotal: Rs <?php echo $subtotal; ?>
            </div>

        </div>

    </div>

    <a class="remove-btn"
       href="cart.php?remove=<?php echo $id; ?>">
        Remove
    </a>

</div>

<?php } } ?>

<?php if(!empty($_SESSION['cart'])){ ?>

<div class="total-box">

    <h2>💰 Total: Rs <?php echo $total; ?></h2>

    <a href="checkout.php" class="checkout-btn">
        Proceed To Checkout
    </a>

</div>

<?php } ?>

</div>

</body>
</html>