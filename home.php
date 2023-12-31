<?php
include 'components/connect.php';
session_start();

if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'] ;
}else{
    $user_id='';
}





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <!-- swiper-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

    <!-- font awesopme cdn links-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

    <!-- headersection starts -->

    <header class="header">

        <section class="flex">

            <a href="home.html" class="logo">yum-yum 😋</a>
            <nav class="navbar">
                <a href="home.html">home</a>
                <a href="about.html">about</a>
                <a href="menu.html">menu</a>
                <a href="orders.html">orders</a>
                <a href="contact.html">contact</a>
            </nav>

            <div class="icons">
                <a href="search.html"><i class="fas fa-search"></i></a>
                <a href="cart.html"><i class="fas fa-shopping-cart"></i><span>(3)</span></a>
                <div id="user-btn" class="fas fa-user"></div>
                <div id="menu-btn" class="fas fa-bars"></div>
            </div>


            <div class="profile">
                <p class="name">nadia azam</p>
                <div class="flex">
                    <a href="profile.html" class="btn">profile</a>
                    <a href="#" class="delete-btn">logout</a>
                </div>
                <p class="account"><a href="login.html">login</a> or <a href="register.html">register</a></p>
            </div>


        </section>


    </header>

    <!-- header section ends -->

    <!-- hero section starts -->
    <section class="hero">
        <div class="swiper hero-slider">
            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>order online</span>
                        <h3>delecious pizza</h3>
                        <a href="menu.html" class="btn">see menus</a>
                    </div>
                    <div class="image">
                        <img src="images/home-img-1.png" alt="">
                    </div>
                </div>


                <div class="swiper-slide slide">
                    <div class="content">
                        <span>order online</span>
                        <h3>chezzy hamburger</h3>
                        <a href="menu.html" class="btn">see menus</a>
                    </div>
                    <div class="image">
                        <img src="images/home-img-2.png" alt="">
                    </div>
                </div>


                <div class="swiper-slide slide">
                    <div class="content">
                        <span>order online</span>
                        <h3>rosted chicken</h3>
                        <a href="menu.html" class="btn">see menus</a>
                    </div>
                    <div class="image">
                        <img src="images/home-img-3.png" alt="">
                    </div>
                </div>


                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- hero section ends -->

    <!-- category section starts-->
    <section class="category">

        <h1 class="title">food category</h1>

        <div class="box-container">

            <a href="#" class="box">
                <img src="images/cat-1.png" alt="">
                <h3>fast food</h3>
            </a>

            <a href="#" class="box">
                <img src="images/cat-.png" alt="">
                <h3>main dishes</h3>
            </a>

            <a href="#" class="box">
                <img src="images/cat-3.png" alt="">
                <h3>drinks</h3>
            </a>

            <a href="#" class="box">
                <img src="images/cat-4.png" alt="">
                <h3>dessert</h3>
            </a>
        </div>

    </section>


    <!-- category section ends-->



    <!-- home product section starts -->
    <section class="products">

        <h1 class="title">latest dishes</h1>

        <div class="box-container">

            <form action="" method="post" class="box">
                
                <button type="submit" class="fas fa-eye" name="quick_view"></button>
                <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
                <img src="uploaded_img/burger-1.png" alt="">
                <a href="#" class="cat">fast food</a>
                <div class="name">chezzy burger 01</div>
                <div class="flex">
                    <div class="price"><span>$</span>3</div>
                    <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
                </div>
                
            </form>

            <form action="" method="post" class="box">
                
                <button type="submit" class="fas fa-eye" name="quick_view"></button>
                <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
                <img src="uploaded_img/dish-1.png" alt="">
                <a href="#" class="cat">dishes</a>
                <div class="name">main dish 01</div>
                <div class="flex">
                    <div class="price"><span>$</span>3</div>
                    <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
                </div>
                
            </form>

            <form action="" method="post" class="box">
                
                <button type="submit" class="fas fa-eye" name="quick_view"></button>
                <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
                <img src="uploaded_img/dessert-1.png" alt="">
                <a href="#" class="cat">desserts</a>
                <div class="name">delicious dessert 01</div>
                <div class="flex">
                    <div class="price"><span>$</span>3</div>
                    <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
                </div>
                
            </form>

            <form action="" method="post" class="box">
                
                <button type="submit" class="fas fa-eye" name="quick_view"></button>
                <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
                <img src="uploaded_img/drink-1.png" alt="">
                <a href="#" class="cat">drinks</a>
                <div class="name">cold drink 01</div>
                <div class="flex">
                    <div class="price"><span>$</span>3</div>
                    <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
                </div>
                
            </form>

            <form action="" method="post" class="box">
                
                <button type="submit" class="fas fa-eye" name="quick_view"></button>
                <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
                <img src="uploaded_img/pizza-1.png" alt="">
                <a href="#" class="cat">fast food</a>
                <div class="name">delicious pizza 01</div>
                <div class="flex">
                    <div class="price"><span>$</span>3</div>
                    <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
                </div>
                
            </form>

            <form action="" method="post" class="box">
                
                <button type="submit" class="fas fa-eye" name="quick_view"></button>
                <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
                <img src="uploaded_img/dish-2.png" alt="">
                <a href="#" class="cat">dishes</a>
                <div class="name">main dish 02</div>
                <div class="flex">
                    <div class="price"><span>$</span>3</div>
                    <input type="number" name="qty" class="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
                </div>
                
            </form>
        
        </div>
        <div class="more-btn">
            <a href="menu.html" class="btn">view all</a>
        </div>



    </section>



    <!-- home product section ends -->



    <!-- footer section starts -->
    <footer class="footer">
    <section class="grid">

        <div class="box">
            <img src="images/email-icon.png" alt="">
            <h3>our email</h3>
            <a href="mailto:azam.nadia.2002@gmail.com">nadia@gmail.com</a>
            <a href="mailto:azam.nadia.2002@gmail.com">azam.nadia.2002@gmail.com</a>
        </div>

        <div class="box">
            <img src="images/clock-icon.png" alt="">
            <h3>opening hours</h3>
            <p>00:07am to 00:10pm</p>
        </div>

        <div class="box">
            <img src="images/map-icon.png" alt="">
            <h3>our address</h3>
            <a href="#">Morroco , oujda , lotissement ir ali route taza n 45</a>
        </div>

        <div class="box">
            <img src="images/phone-icon.png" alt="">
            <h3>contact us</h3>
            <a href="tel:+2126080251522">+212 6 08 25 15 22</a>
            <a href="tel:+2126080251522">+212 6 08 25 15 22</a>
        </div>
    </section>

    <div class="credit">created by <span>mr. nadia azam</span> | all rights deserved§</div>

    </footer>
    <!-- footer section ends -->


    <div class="loader">
        <img src="images/loader.gif" alt="">
    </div>


<!-- swpier-->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script>
    var swiper = new Swiper(".hero-slider",{
        loop:true,
        grabCursor: true, 
        effect: "flip",
        pagination: {
            el: ".swiper-pagination",
            clickable:true,
        },
    });
</script>

<!-- custom js file links -->
<script src="js/script.js"></script>
    
</body>
</html>