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
// var_dump($dado);

// foreach($dado as $info){
//     echo $info['id']." - ".$info['nome']." - ".
//     $info['idade']." - ".$info['email']." - ".
//     $info['data_now']." - "."<br>";
// }

echo "<table border='1'>";
echo "<tr><th>id</th>
      <th>usuarios</th>
      <th>senha</th></tr>";

foreach($dado as $info){
    echo "<tr>";
        "<td>{$info['id']}</td>";
        "<td>{$r_users->usuarios}</td>";
        "<td>{$r_users->senha}</td>";
        "</tr>";
}
echo "</table>";
?>