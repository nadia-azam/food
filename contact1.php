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
    <title>contact</title>

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
    
    <!-- footer section starts -->
    <?php
    include 'components/footer.php';
    ?>
    <!-- footer section ends -->

   <script src="js/script.js"></script>
    
</body>




</html>