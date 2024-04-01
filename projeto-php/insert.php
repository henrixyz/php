<?php
$nome = $_POST['nome'];
$email = $_POST['e-mail'];
$idade = $_POST['idade'];

// echo $nome, " - ", $email, " - ", $idade;
include_once("conect.php");
include_once("Crud.php");

$obj = new Crud($conect);

$obj->setDados($nome,$email,$idade);

$obj->insertDados();