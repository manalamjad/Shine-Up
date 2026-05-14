<?php
include 'components/header.php';
?>

<!DOCTYPE html>
<html>
<head>

    <title>About Us - Shine Up</title>

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

        /* ABOUT SECTION */

        .about-section{
            width:100%;
            padding:80px 20px;
        }

        .about-container{
            width:90%;
            margin:auto;
            display:flex;
            align-items:center;
            justify-content:space-between;
            gap:50px;
            flex-wrap:wrap;
        }

        /* IMAGE */

        .about-image{
            flex:1;
        }

        .about-image img{
            width:100%;
            border-radius:20px;
            box-shadow:0 5px 20px rgba(0,0,0,0.1);
        }

        /* CONTENT */

        .about-content{
            flex:1;
        }

        .about-content h1{
            font-size:50px;
            color:#1565c0;
            margin-bottom:20px;
        }

        .about-content p{
            font-size:18px;
            line-height:1.8;
            color:#555;
            margin-bottom:20px;
        }

        /* FEATURES */

        .features{
            display:grid;
            grid-template-columns:repeat(2,1fr);
            gap:15px;
            margin-top:30px;
        }

        .feature-box{
            background:white;
            padding:18px;
            border-radius:12px;
            font-weight:bold;
            box-shadow:0 3px 12px rgba(0,0,0,0.08);
            transition:0.3s;
        }

        .feature-box:hover{
            transform:translateY(-5px);
        }

        /* FOOTER */

        .footer{
            background:#111;
            color:#ddd;
            padding:40px 20px;
            margin-top:50px;
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

            .about-container{
                flex-direction:column;
            }

            .about-content h1{
                font-size:36px;
            }

            .features{
                grid-template-columns:1fr;
            }

        }

    </style>

</head>

<body>

<!-- ABOUT -->

<section class="about-section">

    <div class="about-container">

        <div class="about-image">

            <img src="img/glasscleaner.jpg" alt="Shine Up">

        </div>

        <div class="about-content">

            <h1>About Shine Up</h1>

            <p>
               ✨ Welcome to Shine Up! ✨
Step into the world of sparkling clean living where freshness, shine, and care come together! 🌿✨
At Shine Up, we believe every home deserves to glow with cleanliness and confidence. From tough stains to everyday mess, our powerful cleaning detergents are designed to make your life easier and your spaces brighter. 🧼
Whether it’s your kitchen, clothes, or home surfaces — Shine Up brings you that fresh, long-lasting shine you can trust. 🏠✨
Join us for cleaning tips, product magic, and the journey to a fresher, cleaner lifestyle — because when everything shines, life feels better! 💛🌸
            </p>

            <div class="features">

                <div class="feature-box">
                    ✅ Premium Quality
                </div>

                <div class="feature-box">
                    🌿 Safe Ingredients
                </div>

                <div class="feature-box">
                    🚚 Fast Delivery
                </div>

                <div class="feature-box">
                    💯 Customer Satisfaction
                </div>

            </div>

        </div>

    </div>

</section>

<!-- FOOTER -->

<div class="footer">

    <div class="footer-container">

        <div>

            <h3>Shine Up</h3>

            <p>
                Premium cleaning products
                for your home.
            </p>

        </div>

        <div>

            <h3>Quick Links</h3>

            <a href="index.php">Home</a>
            <a href="products.php">Products</a>
            <a href="about.php">About</a>
            <a href="cart.php">Cart</a>

        </div>

        <div>

            <h3>Contact</h3>

            <p>Karachi, Pakistan</p>
            <p>+92 300 1234567</p>
            <p>info@shineup.com</p>

        </div>

    </div>

    <div class="bottom">
        © 2026 Shine Up. All Rights Reserved.
    </div>

</div>

<?php
include 'components/footer.php';
?>

</body>
</html>