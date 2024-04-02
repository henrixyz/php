
<?php

$host = 'localhost';
$dbname = 'aula_php';
$user = 'root';
$password = 'mysql2024';

// $conect = new PDO("mysql:host=$host;dbname=$dbname",$user,$password); 


try {
    $conect = new PDO("mysql:dbname=$dbname;host=$host;charset=utf8",$user,$password); //se der errado volta aqui
    $conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //testa erro
    // $conect = $pdo; // cuidado nesse aqui viu
    // echo 'deu certo';
    
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// $host = 'localhost';
// $dbname = 'aula_php'; 
// $user = 'root';
// $password = 'mysql2024';


// }