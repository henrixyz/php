<!--  -->

<?php
$id = $_GET['id'];//obtem sla

$host = 'localhost';
$dbname = 'aula_php';
$user = 'root';
$password = 'mysql2024';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password); //pega informacoes do bd
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //testa erro
    
    // $query = $pdo->prepare("DELETE FROM table_users WHERE id=$id");
    // $query->execute();
    
    // echo "cadastro deletado ccom sucesso!";

    // echo "<br><a href='readUser.php'>
    // <button type='button'>voltar</button>
    // </a>";
    
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}