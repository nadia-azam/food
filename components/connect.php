<?php
$db_name = 'mysql:host=localhost;dbname=food_db';
$user_name = 'root';
$user_password ='';



try {
    $conn = new PDO($db_name, $user_name, $user_password);
   // echo "hello to my db";
} catch (PDOException $e) {
    // Gérer les erreurs de connexion à la base de données ici
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}


?>