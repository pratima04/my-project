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

<!-- home section starts -->

<section class="home" id="home">

    <div class="heading">
        <h3>Shopping Cart</h3>
        <p><a href="index.html">Home</a><span> | Cart</span></p>
    </div>

</section>
<!-- home section ends -->

<!-- shopping cart section starts -->
<div class="shopping-cart">
    <h1 class="title">Your Cart</h1>

    <div class="cart-total">
        <p>cart total : <span>₹150</span></p>
        <a href="checkout.html" class="btn">Proceed to Checkout</a>
    </div>

    <div class="box-container">
        <form action="" method="post" class="box">
            <button type="submit" class="fas fa-eye" name="quick_view"></button>
            <button type="submit" class="fas fa-times" name="delete"
            onclick="return confirm('delete this item?');"></button>
            <img src="image/rice.jpg" alt="">
            <a href="#" class="cat">Rice</a>
            <div class="name"></div>
            <div class="flex">
                <div class="price"><span>₹</span></div>
                <input type="number" name="qty" class="qty" min="1" max="90" value="1" 
                onkeypress="if(this.value.length == 2) return false;">
                <button type="submit" class="fas fa-edit"></button>
            </div>
            <div class="sub-total">sub total : <sapn>₹60</sapn></div>
        </form>

        <form action="" method="post" class="box">
            <button type="submit" class="fas fa-eye" name="quick_view"></button>
            <button type="submit" class="fas fa-times" name="delete"
            onclick="return confirm('delete this item?');"></button>
            <img src="image/product-1.png" alt="">
            <a href="#" class="cat">Orange</a>
            <div class="name"></div>
            <div class="flex">
                <div class="price"><span>₹</span></div>
                <input type="number" name="qty" class="qty" min="1" max="90" value="1" 
                onkeypress="if(this.value.length == 2) return false;">
                <button type="submit" class="fas fa-edit"></button>
            </div>
            <div class="sub-total">sub total : <sapn>₹60</sapn></div>
        </form>

        <form action="" method="post" class="box">
            <button type="submit" class="fas fa-eye" name="quick_view"></button>
            <button type="submit" class="fas fa-times" name="delete"
            onclick="return confirm('delete this item?');"></button>
            <img src="image/product-5.png" alt="">
            <a href="#" class="cat">Potatoes</a>
            <div class="name"></div>
            <div class="flex">
                <div class="price"><span>₹</span></div>
                <input type="number" name="qty" class="qty" min="1" max="90" value="1" 
                onkeypress="if(this.value.length == 2) return false;">
                <button type="submit" class="fas fa-edit"></button>
            </div>
            <div class="sub-total">sub total : <sapn>₹60</sapn></div>
        </form>
     </div>

     <div class="more-btn">
        <form action="" method="post">
            <button type="submit" class="delete-btn" name="delete_all"
            onclick="return confirm('delete all from cart?');">Delete All</button>
        </form>
     </div>
</div>


<!-- shopping cart section ends -->
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