<?php
include 'components/connection.php';
include 'components/header.php';

// GET PRODUCTS
$result = $conn->query("SELECT * FROM products LIMIT 8");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Shine Up</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family:Arial, sans-serif;
            background:#f5f7fb;
        }

        /* HERO SLIDER */

        .slider{
            width:100%;
            height:500px;
            overflow:hidden;
        }

        .slides{
            display:flex;
            width:300%;
            animation:slide 12s infinite;
        }

        .slides img{
            /* margin-top: 8px; */
            width:100%;
            height:10%;
            object-fit:cover;
        }

        @keyframes slide{
            0%{margin-left:0;}
            33%{margin-left:-100%;}
            66%{margin-left:-200%;}
            100%{margin-left:0;}
        }

        /* SECTION TITLE */

        .section-title{
            text-align:center;
            font-size:35px;
            margin:40px 0 20px;
            color:#1565c0;
        }

        /* PRODUCT GRID */

        .product-grid{
            width:90%;
            margin:auto;
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
            gap:25px;
            margin-bottom:50px;
        }

        /* CARD */

        .card{
            background:white;
            border-radius:15px;
            overflow:hidden;
            box-shadow:0 3px 15px rgba(0,0,0,0.1);
            transition:0.3s;
        }

        .card:hover{
            transform:translateY(-5px);
        }

        /* IMAGE */

        .card img{
            width:100%;
            height:250px;
            object-fit:contain;
            background:white;
            padding:15px;
        }

        /* BODY */

        .card-body{
            padding:20px;
            text-align:center;
        }

        .card-body h3{
            font-size:24px;
            margin-bottom:10px;
        }

        .price{
            color:#1565c0;
            font-size:24px;
            font-weight:bold;
            margin-bottom:20px;
        }

        /* BUTTONS */

        .btn{
            display:block;
            width:100%;
            padding:12px;
            border-radius:10px;
            text-decoration:none;
            color:white;
            font-weight:bold;
            margin-top:10px;
            transition:0.3s;
        }

        .view{
            background:#1e88e5;
        }

        .view:hover{
            background:#1565c0;
        }

        .cart{
            background:#28a745;
        }

        .cart:hover{
            background:#1f7a34;
        }

        /* FOOTER */

        .footer{
            background:#111;
            color:#ddd;
            padding:40px 20px;
        }

        .footer-container{
            width:90%;
            margin:auto;
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(200px,1fr));
            gap:30px;
        }

        .footer h3{
            color:white;
            margin-bottom:15px;
        }

        .footer p{
            margin:8px 0;
            line-height:1.6;
        }

        .footer a{
            color:#bbb;
            text-decoration:none;
            display:block;
            margin:8px 0;
            transition:0.3s;
        }

        .footer a:hover{
            color:white;
        }

        .bottom{
            text-align:center;
            border-top:1px solid #333;
            margin-top:30px;
            padding-top:15px;
            font-size:14px;
        }

        /* MOBILE */

        @media(max-width:768px){

            .slider{
                height:250px;
            }

            .slides img{
                height:250px;
            }

            .section-title{
                font-size:28px;
            }

        }

    </style>

</head>

<body>

<!-- HERO SLIDER -->

<div class="slider">

    <div class="slides">

        <img src="img/dishwasher.jpg" alt="Dish Washer">
        <img src="img/handwash.jpg" alt="Hand Wash">
        <img src="img/glasscleaner.jpg" alt="Glass Cleaner">
        <img src="img/dishwasher1.jpg" alt="Glass Cleaner">

    </div>

</div>

<!-- PRODUCTS -->

<h2 class="section-title">🔥 Our Products</h2>

<div class="product-grid">

<?php while($row = $result->fetch_assoc()) { ?>

    <div class="card">

        <img src="img/<?php echo $row['image']; ?>" alt="Product Image">

        <div class="card-body">

            <h3><?php echo $row['name']; ?></h3>

            <div class="price">
                Rs <?php echo $row['price']; ?>
            </div>

            <a class="btn view" href="product.php?id=<?php echo $row['id']; ?>">
                View Product
            </a>

            <a class="btn cart" href="cart.php?action=add&id=<?php echo $row['id']; ?>">
                Add to Cart
            </a>

        </div>

    </div>

<?php } ?>

</div>

<!-- FOOTER -->

<div class="footer">

    <div class="footer-container">

        <div>
            <h3>Shine Up</h3>

            <p>
                Premium cleaning products for your home.
                Safe, fresh and reliable.
            </p>
        </div>

        <div>
            <h3>Quick Links</h3>

            <a href="index.php">Home</a>
            <a href="products.php">Products</a>
            <a href="cart.php">Cart</a>
        </div>

        <div>
            <h3>Contact</h3>

            <p>Karachi, Pakistan</p>
            <p>+92 300 1234567</p>
            <p>info@shineup.com</p>
        </div>

        <div>
            <h3>Follow Us</h3>

            <a href="https://facebook.com">Facebook</a>
            <a href="https://instagram.com">Instagram</a>
            <a href="https://youtube.com">YouTube</a>
        </div>

    </div>

    <div class="bottom">
        © 2026 Shine Up. All Rights Reserved.
    </div>

</div>

<?php include 'components/footer.php'; ?>

</body>
</html>