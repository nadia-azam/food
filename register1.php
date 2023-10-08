<?php
include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'] ;
}else{
    $user_id='';
}

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);
    $number = $_POST['number'];
    $number = filter_var($number, FILTER_SANITIZE_STRING);
    $pass = $_POST['pass'];
    $pass = filter_var($pass, FILTER_SANITIZE_STRING);
    $cpass = $_POST['cpass'];
    $cpass = filter_var($cpass, FILTER_SANITIZE_STRING);

    $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ? OR number = ?");
    $select_user->execute([$email,$number]);



    if($select_user->rowCount() > 0){
        $message[] = 'email or number is already taken !';
    }else{
        if($pass != $cpass){
            $message[] = 'confirm password not matched !';
        }else{
        $insert_user = $conn->prepare("INSERT INTO `users` (name,email,number,password) VALUES (?,?,?,?)");
        
        $insert_user->execute([$name,$email,$number,$cpass]);
        $confirm_user = $conn->prepare("SELECT * FROM `users` WHERE email = ? AND password = ?");
        $confirm_user->execute([$email,$pass]);

        if($confirm_user->rowCount()>0){
            $row = $confirm_user->fetch(PDO::FETCH_ASSOC);
            $_SESSION['user_id'] = $row['id'];
            //header('locaton:home1.php');
            $message[] = 'regisred successfuly !';

        }
        }
        
    }

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

    <!-- register section starts -->
    <section class="form-container">
        <form action="" method="POST">
            <h3>login now</h3>
            <input type="text" name="name" required placeholder="enter your name" class="box" maxlength="50">
            <input type="email" name="email" required placeholder="enter your email" class="box" maxlength="50" oninput="this.value=this.value.replace(/\s/g,'')">
            <input type="number" name="number" required placeholder="enter your number" class="box" min="0" max="9999999999" >
            <input type="password" name="pass" required placeholder="enter your password" class="box" maxlength="50" oninput="this.value=this.value.replace(/\s/g,'')">
            <input type="password" name="cpass" required placeholder="confirm your password" class="box" maxlength="50" oninput="this.value=this.value.replace(/\s/g,'')">
            <input type="submit" value="register now" name="submit" class="btn">
            <p>already have an account? <a href="login.html">login now</a></p>
        </form>
    </section>





    <!-- register section ends -->




    
    <!-- footer section starts -->
    <?php
    include 'components/footer.php';
    ?>
    <!-- footer section ends -->

   <script src="js/script.js"></script>
   <script>
    document.querySelectorAll('input[type="number"]').forEach(input =>{
        input.oninput = () =>{
            if(input.value.length >input.maxLength) input.value = input.value.slice(0,input.maxLength);
        }
    })
   </script>
    
</body>




</html>