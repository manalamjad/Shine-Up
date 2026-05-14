<!DOCTYPE html>
<html>
<head>

<style>

body{
    margin:0;
    font-family:Arial;
    background:#f5f5f5;
}

/* TOP BAR */
.topbar{
    background:#b56cff;
    color:white;
    text-align:center;
    padding:10px;
    font-size:15px;
    font-weight:bold;
}

/* MAIN NAVBAR */
.navbar{
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:18px 40px;
    background:#dfe8a6;
    border-bottom-left-radius:40px;
    border-bottom-right-radius:40px;
    position:relative;
    box-shadow:0 4px 10px rgba(0,0,0,0.08);
}

/* LOGO */
.logo{
    display:flex;
    align-items:center;
}

.logo img{
    width:90px;
    height:90px;
    object-fit:contain;
    border-radius:50%;
    background:white;
    padding:10px;
}

/* MENU */
.menu{
    display:flex;
    gap:35px;
    align-items:center;
}

.menu a{
    text-decoration:none;
    color:#555;
    font-size:18px;
    font-weight:500;
    transition:0.3s;
}

.menu a:hover{
    color:#ff4fc3;
}

/* BUTTON */
.call-btn{
    background:#ff7ad9;
    color:white;
    padding:14px 28px;
    border-radius:8px;
    text-decoration:none;
    font-weight:bold;
    transition:0.3s;
}
.navbar{
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:10px 20px;
    background:#dfe8a6;
    border-bottom-left-radius:40px;
    border-bottom-right-radius:40px;
    position:sticky;
    top:0;
    z-index:999;
    box-shadow:0 4px 10px rgba(0,0,0,0.08);
}
.call-btn:hover{
    background:#ff4fc3;
}

/* MOBILE */
@media(max-width:900px){

    .navbar{
        flex-direction:column;
        gap:20px;
        text-align:center;
    }

    .menu{
        flex-wrap:wrap;
        justify-content:center;
    }
}

</style>

</head>

<body>

<!-- TOP BAR -->
<div class="topbar">
    ✨ Premium Cleaning Products For Every Home ✨
</div>

<!-- NAVBAR -->
<div class="navbar">

    <!-- LOGO -->
    <div class="logo">
        <img src="img/logo.png"
     alt="Logo"
     style="width:90px; height:90px; object-fit:contain;">
    </div>

    <!-- MENU -->
    <div class="menu">

        <a href="home.php">Home</a>

        <a href="product.php">Products</a>

        <a href="about.php">About us</a>

        <!-- <a href="#">Cleaning Tips</a> -->

        <a href="contact.php">Contact Us</a>

    </div>

    <!-- BUTTON -->
    <a href="cart.php" class="call-btn">
        🛒 Cart
    </a>

</div>

</body>
</html>