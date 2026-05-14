<?php
include 'components/header.php';
?>

<!DOCTYPE html>
<html>
<head>

    <title>Contact Us - Shine Up</title>

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

        /* CONTACT SECTION */

        .contact-section{
            width:100%;
            padding:80px 20px;
        }

        .contact-container{
            width:90%;
            max-width:1200px;
            margin:auto;
            display:grid;
            grid-template-columns:1fr 1fr;
            gap:40px;
        }

        /* LEFT SIDE */

        .contact-info{
            background:white;
            padding:40px;
            border-radius:20px;
            box-shadow:0 5px 20px rgba(0,0,0,0.08);
        }

        .contact-info h1{
            color:#1565c0;
            font-size:45px;
            margin-bottom:20px;
        }

        .contact-info p{
            color:#555;
            line-height:1.8;
            margin-bottom:20px;
            font-size:17px;
        }

        .info-box{
            margin-top:25px;
        }

        .info-box h3{
            color:#111;
            margin-bottom:8px;
        }

        /* FORM */

        .contact-form{
            background:white;
            padding:40px;
            border-radius:20px;
            box-shadow:0 5px 20px rgba(0,0,0,0.08);
        }

        .contact-form h2{
            color:#1565c0;
            margin-bottom:25px;
            font-size:35px;
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
            height:130px;
        }

        /* BUTTON */

        .contact-btn{
            width:100%;
            background:linear-gradient(135deg,#1565c0,#42a5f5);
            color:white;
            border:none;
            padding:16px;
            border-radius:12px;
            font-size:18px;
            font-weight:bold;
            cursor:pointer;
            transition:0.3s;
        }

        .contact-btn:hover{
            transform:translateY(-3px);
        }

        /* MOBILE */

        @media(max-width:768px){

            .contact-container{
                grid-template-columns:1fr;
            }

            .contact-info h1{
                font-size:35px;
            }

        }

    </style>

</head>

<body>

<section class="contact-section">

    <div class="contact-container">

        <!-- LEFT -->

        <div class="contact-info">

            <h1>Contact Us</h1>

            <p>
                Have questions about Shine Up products?
                Feel free to contact us anytime.
                Our support team is always ready to help you.
            </p>

            <div class="info-box">
                <h3>📍 Address</h3>
                <p>Karachi, Pakistan</p>
            </div>

            <div class="info-box">
                <h3>📞 Phone</h3>
                <p>+92 300 1234567</p>
            </div>

            <div class="info-box">
                <h3>📧 Email</h3>
                <p>info@shineup.com</p>
            </div>

        </div>

        <!-- RIGHT -->

        <div class="contact-form">

            <h2>Send Message</h2>

            <form action="" method="POST">

                <div class="input-group">
                    <label>Full Name</label>
                    <input type="text" name="name" required>
                </div>

                <div class="input-group">
                    <label>Email Address</label>
                    <input type="email" name="email" required>
                </div>

                <div class="input-group">
                    <label>Subject</label>
                    <input type="text" name="subject" required>
                </div>

                <div class="input-group">
                    <label>Message</label>
                    <textarea name="message" required></textarea>
                </div>

                <button type="submit" class="contact-btn">
                    Send Message
                </button>

            </form>

        </div>

    </div>

</section>

<?php
include 'components/footer.php';
?>

</body>
</html>