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

<section class="home" id="home">

    <div class="heading">
        <h3>Contact Us</h3>
        <p><a href="index.html">Home</a><span> | Contact </span></p>
    </div>
</section>

<!-- contact section starts -->
<section class="contact">
    <div class="row">
        <div class="image">
            <img src="image/contact.jpg" alt="">
        </div>
        <form action="" method="post">
        <h3>Tell us something</h3>
            <input type="text" name="name" maxlength="50" class="box"
             placeholder="Enter your name" required>
            <input type="text" name="number" min="0" max="999999999999"
            class="box" placeholder="Enter your number" required onkeypress="if(this.value.length == 10)
            return false;">
            <input type="email" name="email" maxlength="50" class="box" 
            placeholder="Enter your email" required>
            <textarea name="msg" class="box" required placeholder="Enter your message"
            maxlength="500" cols="30" rows="10"></textarea>
            <input type="submit" value="Send Message" name="send" class="btn">
            
        </form>
    </div>
</section>
<!-- contact section ends -->
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

    <div class="credit"> Created by <span> </span> | all rights reserved </div>

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