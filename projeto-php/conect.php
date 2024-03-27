
<?php

$host = 'localhost';
$dbname = 'aula_php';
$user = 'root';
$password = 'mysql2024';

$conect = new PDO("mysql:host=$host;dbname=$dbname",$user,$password); //pega informacoes do bd



// $host = 'localhost';
// $dbname = 'aula_php';
// $user = 'root';
// $password = 'mysql2024';

// try {
//     $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password); //pega informacoes do bd
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //testa erro
//     $conect = $pdo; // cuidado nesse aqui viu
    
// } catch (PDOException $e) {
//     die("Connection failed: " . $e->getMessage());
// }