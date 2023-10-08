<?php
if(isset($message)){
    foreach($message as $message){
        echo '
        <div class="message">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
        </div>
        ';

    }
}


?>
<header class="header">
    <section class="flex">
        <a href="home.php" class="logo">yum-yum 😋</a>
        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="menu.php">menu</a>
            <a href="orders.php">orders</a>
            <a href="contact.php">contact</a>
        </nav>
        <div class="icons">

            <?php
            $count_user_cart_items = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
            $count_user_cart_items->execute([$user_id]);
            $total_user_cart_items = $count_user_cart_items->rowCount();
            ?>

            <a href="search.php"><i class="fas fa-search"></i></a>
            <a href="cart.php"><i class="fas fa-shopping-cart"></i><span>(<?= $total_user_cart_items;?>)</span></a>
            <div id="user-btn" class="fas fa-user"></div>
            <div id="menu-btn" class="fas fa-bars"></div>
        </div>


        <div class="profile">

            <?php
                $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
                $select_profile->execute ([$user_id]);
                if($select_profile->rowCount() > 0){
                    $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
                
            ?>
            <p class="name"><?= $fetch_profile['name'];?></p>
            <div class="flex">
                    <a href="profile.html" class="btn">profile</a>
                    <a href="components/user_logout.php" onclick="return confirm('logout from this website?');" class="delete-btn">logout</a>
                </div>
            <?php
            }else{
            ?>
            <p class="name">please login first</p>
            <a class="btn" href="login.html">login</a>
            <?php
                
            }
            ?>




                
                
                
            </div>

</section>

<script>
    navbar = document.querySelector('.header .flex .navbar');

    document.querySelector('#menu-btn').onclick = () => {
    navbar.classList.toggle('active');
    profile.classList.remove('active');
    
    }

    profile = document.querySelector('.header .flex .profile');

    document.querySelector('#user-btn').onclick = () => {
    navbar.classList.remove('active');
    profile.classList.toggle('active');
    }

    window.onscroll = () => {
        profile.classList.remove('active');
        navbar.classList.remove('active');
    }

</script>


</header>