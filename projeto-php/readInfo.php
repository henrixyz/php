<?php

include_once("conect.php");
include_once("Crud.php");

$obj = new Crud($conect);

// $dado = $obj->readInfo(6) //valor do parametro
// // var_dumb($dado)

// echo $dado->id."-".
//      $dado->nome."-".
//      $dado->idade."-".
//      $dado->email."-".
//      $dado->data_now."-".;

$obj->readInfo();

$dado = $obj->getAll();
var_dump($dado);

?>