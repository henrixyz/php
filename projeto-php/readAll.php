<?php
include_once("conect.php");
include_once("Crud.php");

$obj = new Crud($conect);

$obj->readInfo();
$dados = $obj->getAll();
// var_dump($dados) //ve se ta funcionando

echo "<link rel='stylesheet' href='css/style.css'>";
echo "<main>";
echo "<header>selecione um registro para deletar</header>";

echo "<table border='1'>";
echo "<th>nome</th>
    <th>idade</th>
    <th>e-mail</th>
    <th>data</th>
    <th>editar</th></tr>";

foreach($dados as $info){
    echo "<tr>
            <td>".$info['nome']."</td>
            <td>".$info['idade']."</td>
            <td>".$info['email']."</td>
            <td>".$info['data_now']."</td>
            <td><a href=formEdit.php?id=".$info['id'].">editar</a></td>
          </tr>";
}    
echo "</table>";
echo "</main>";
?>