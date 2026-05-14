<?php
include 'components/connection.php';
include 'components/header.php';

// GET PRODUCTS
$result = $conn->query("SELECT * FROM products");

if(!$result){
    die("Query Error: " . $conn->error);
}
?>

<!DOCTYPE html>
<html>

<head>

    <title>Shine Up Products</title>

    <!-- CSS LINK -->
    <link rel="stylesheet" href="style.css">

</head>

<body>

<h1 class="title">🔥 Shine Up Products</h1>

<div class="products-wrapper">

    <!-- SIDEBAR -->
    <div class="sidebar">

        <h2>Filter</h2>

        <button>Dish Washers</button>
        <button>Hand Wash</button>
        <button>Phenyl</button>
        <button>Glass Cleaner</button>

    </div>

    <!-- PRODUCTS -->
    <div class="products-section">

        <div class="top-bar">

            <h3>Our Premium Products</h3>

            <select>
                <option>Sort By</option>
                <option>Low Price</option>
                <option>High Price</option>
            </select>

        </div>

        <div class="product-grid">

        <?php while($row = $result->fetch_assoc()) { ?>

            <div class="card">

                <!-- HEART -->
                <div class="wishlist">♡</div>

                <!-- IMAGE -->
                <img src="img/<?php echo $row['image']; ?>">

                <div class="card-body">

                    <h3><?php echo $row['name']; ?></h3>

                    <p class="tagline">
                        <?php echo $row['description']; ?>
                    </p>

                    <div class="price">
                        Rs <?php echo $row['price']; ?>
                    </div>

                    <div class="buttons">

                        <!-- <a class="view-btn"
                           href="view_product.php?id=<?php echo $row['id']; ?>">
                           View
                        </a> -->

                        <a class="cart-btn"
                           href="cart.php?action=add&id=<?php echo $row['id']; ?>">
                           🛒 Add
                        </a>

                    </div>

                </div>

            </div>

        <?php } ?>

        </div>

    </div>

</div>

<!-- FOOTER CSS -->
<style>

.footer{
    background:#111;
    color:#ddd;
    padding:50px 30px 20px;
    margin-top:50px;
}

.footer-container{
    display:grid;
    grid-template-columns:repeat(auto-fit, minmax(220px,1fr));
    gap:30px;
}

.footer-box h3{
    color:white;
    margin-bottom:15px;
    font-size:22px;
}

.footer-box p{
    line-height:1.8;
    color:#bbb;
    font-size:15px;
}

.footer-box a{
    display:block;
    color:#bbb;
    text-decoration:none;
    margin-bottom:10px;
    transition:0.3s;
}

.footer-box a:hover{
    color:#fff;
    padding-left:5px;
}

.bottom{
    text-align:center;
    border-top:1px solid #333;
    margin-top:30px;
    padding-top:20px;
    color:#999;
    font-size:14px;
}

</style>

<!-- FOOTER -->
<div class="footer">

    <div class="footer-container">

        <!-- ABOUT -->
        <div class="footer-box">

            <h3>Shine Up</h3>

            <p>
                Premium cleaning products designed for hygiene,
                freshness and sparkling results in every home.
            </p>

        </div>

        <!-- LINKS -->
        <div class="footer-box">

            <h3>Quick Links</h3>

            <a href="index.php">Home</a>

            <a href="products.php">Products</a>

            <a href="cart.php">Cart</a>

            <a href="contact.php">Contact Us</a>

        </div>

        <!-- CONTACT -->
        <div class="footer-box">

            <h3>Contact</h3>

            <p>📍 Karachi, Pakistan</p>

            <p>📞 +92 300 1234567</p>

            <p>✉ info@shineup.com</p>

        </div>

        <!-- SOCIAL -->
        <div class="footer-box">

            <h3>Follow Us</h3>

            <a href="#">Facebook</a>

            <a href="#">Instagram</a>

            <a href="#">YouTube</a>

            <a href="#">TikTok</a>

        </div>

    </div>

    <!-- COPYRIGHT -->
    <div class="bottom">
        © 2026 Shine Up — All Rights Reserved.
    </div>

</div>

<?php include 'components/footer.php'; ?>

</body>
</html>