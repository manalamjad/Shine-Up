<?php 
include 'components/connection.php';
include 'components/header.php';
?>

<div class="container">

    <h2 class="title">Our Products</h2>

    <div class="product-grid">

        <?php
        $query = "SELECT * FROM products";
        $result = mysqli_query($conn, $query);

        while($row = mysqli_fetch_assoc($result)) {
        ?>

        <div class="product-card">

            <img src="<?php echo $row['image']; ?>" alt="">

            <h3><?php echo $row['name']; ?></h3>

            <p><?php echo $row['description']; ?></p>

            <h4>Rs <?php echo $row['price']; ?></h4>

            <a href="view_product.php?id=//" class="btn">
                View Product
            </a>

        </div>

        <?php } ?>

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