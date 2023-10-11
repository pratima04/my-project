<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Grocery Website Design Tutorial</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

    <!-- header section starts  -->

<header class="header">

    <section class="flex">

    <a href="index.html" class="logo"> <i class="fas fa-shopping-basket"></i> Kurseong Grocery </a>

    <nav class="navbar">
        <a href="index.html">Home</a>
        <a href="feature.html">Features</a>
        <a href="product.html">Products</a>
        <a href="orders.html">Orders</a>
        <a href="contact.html">Contact</a>
    </nav>

    <div class="icons">
        <a href="search.html"><i class="fas fa-search"></i></a>
        <a href="cart.html"><i class="fas fa-shopping-cart"></i><span>(3)</span> </a>
        <div class="fas fa-user" id="user-btn"></div>
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>

   <div class="profile">
    <p class="name">Pratima Rai</p>
    <div class="flex">
        <a href="profile.html" class="btn">Profile</a>
        <a href="#" class="btn">Logout</a>
    </div>
    <p class="account"><a href="login.html">Login</a> or <a href="register.html">Register</a></p>
   </div>
</section>

</header>
<!-- header section ends -->
<section class="form-container">
    <form action="" method="post">
        <h3>Update Profile</h3>
        <input type="text" name="name" required placeholder="enter your name"
         class="box" maxlength="20" value="Pratima Rai">
        <input type="email" name="email" required placeholder="enter your email"
         class="box" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')" 
         value="07patilalrai@gmail.com">
         <input type="password" name="pass" placeholder="enter your old password"
         class="box" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
         <input type="password" name="pass" placeholder="enter your new password"
         class="box" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
         <input type="password" name="cpass" placeholder="confirm your password"
         class="box" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
         <input type="submit" value="Update Now" class="btn">

    </form>
</section>
<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3> Kurseong Grocery <i class="fas fa-shopping-basket"></i> </h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam, saepe.</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <h3>Contact Info</h3>
            <a href="#" class="links"> <i class="fas fa-clock"></i>7am to 9pm</a>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +919800089307 </a>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +918918722232 </a>
            <a href="#" class="links"> <i class="fas fa-envelope"></i> 07patilalrai@gmail.com </a>
            <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> kurseong, india - 734203</a>

        </div>

        <div class="box">
            <h3>Quick Links</h3>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Home </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Features </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Products </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Orders </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Contact </a>
        </div>

        <div class="box">
            <h3>Newsletter</h3>
            <p>Subscribe for latest updates</p>
            <input type="email" placeholder="your email" class="email">
            <input type="submit" value="subscribe" class="btn">
            <img src="image/payment.png" class="payment-img" alt="">
        </div>

    </div>

    <div class="credit"> created by <span> </span> | all rights reserved </div>

</section>

<!-- footer section ends -->

<div class="loader">
    <img src="image/comp_2.gif" alt="">
</div>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>