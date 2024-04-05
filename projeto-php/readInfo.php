<?php

include_once("conect.php");
include_once("Crud.php");


// // $dado = $obj->readInfo(6) //valor do parametro
// // // var_dumb($dado)

// // echo $dado->id."-".
// //      $dado->nome."-".
// //      $dado->idade."-".
// //      $dado->email."-".
// //      $dado->data_now."-".;

// $obj->readInfo();

// $dado = $obj->getAll();
// // var_dump($dado);

// // foreach($dado as $info){
    // //     echo $info['id']." - ".$info['nome']." - ".
    // //     $info['idade']." - ".$info['email']." - ".
    // //     $info['data_now']." - "."<br>";
    // // }
    
    
    
    // echo "<table border='1'>";
    // echo "<th>nome</th>
    //       <th>idade</th>
    //       <th>e-mail</th>
    //       <th>data</th></tr>";
    
    
    // foreach($dado as $info){
        //     echo "<tr>
        //         <td>".$info['nome']."</td>
        //         <td>".$info['idade']."</td>
        //         <td>".$info['email']."</td>
        //         <td>".$info['data_now']."</td>
        //         </tr>";
        // }
        
        // echo "</table>";
        

        
$nome = $_POST['nome'];

$obj = new Crud($conect);

$dado = $obj->readInfo($nome);
// var_dump($dado);

echo "<table border='1'>";
echo "<th>nome</th>
    <th>idade</th>
    <th>e-mail</th>
    <th>data</th></tr>";

echo "<tr>
        <td>".$dado['nome']."</td>
        <td>".$dado['idade']."</td>
        <td>".$dado['email']."</td>
        <td>".$dado['data_now']."</td>
        </tr>";     
echo "</table>";
        
?>