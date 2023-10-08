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
    <!--header section starts -->
    <?php 
        include './components/user_header.php';
    ?>
    <!--header section ends -->

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

            <a href="category1.php?category=fast food" class="box">
                <img src="images/cat-1.png" alt="">
                <h3>fast food</h3>
            </a>

            <a href="category1.php?category=main dishes" class="box">
                <img src="images/cat-.png" alt="">
                <h3>main dishes</h3>
            </a>

            <a href="category1.php?category=drinks" class="box">
                <img src="images/cat-3.png" alt="">
                <h3>drinks</h3>
            </a>

            <a href="category1.php?category=desserts" class="box">
                <img src="images/cat-4.png" alt="">
                <h3>dessert</h3>
            </a>
        </div>

    </section>


    <!-- category section ends-->



    <!-- home product section starts -->
    <section class="products">

        <h1 class="title">latest food</h1>

        <div class="box-container">
            <?php
            $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6");
            $select_products->execute();
            if($select_products->rowCount() == 0){
                while($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC))
                {
            ?>
            <form action="" method="POST" class="box">
                <input type="hidden" name="pid" value="<?= $fetch_products['id'];?>">
                <input type="hidden" name="name" value="<?= $fetch_products['name'];?>">
                <input type="hidden" name="price" value="<?= $fetch_products['price'];?>">
                <input type="hidden" name="image" value="<?= $fetch_products['image'];?>">

                <a href="quick_view.php?pid=<?= $fetch_products['id'];?>" class="fas fa-eye"></a>
                <button type="submit" name="add_to_cart" class="fas fa-shopping-cart"></button>
                <img src="uploaded_img/<?= $fetch_products['image'];?>" alt="">
            </form>
            
            <?php
                }
            }else{

            }
            ?>



            <!--<form action="" method="post" class="box">
                
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
        </div>-->



    </section>



    <!-- home product section ends -->







    <!-- footer section starts -->
    <?php
    include 'components/footer.php';
    ?>
    <!-- footer section ends -->

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



   <script src="js/script.js"></script>
   
    
</body>




</html>