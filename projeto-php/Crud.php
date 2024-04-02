<?php

class Crud{
    private $connect;

    // private $id;
    private $nome;
    private $email;
    private $idade;
    
    function __construct($conect){
        $this->connect = $conect;
    }

    public function setDados ($nome,$email,$idade){
        $this->nome = $nome;
        $this->email = $email;
        $this->idade = $idade;
    }

    public function insertDados(){
        $sql = $this->connect->prepare("INSERT INTO clientes(nome,idade,email,data_now)VALUES(?,?,?,now())");
        
        // //para precaucao de ataque hacker. bindparam substitui as interrogacoes do "VALUES"
        $sql->bindParam(1,$this->nome);
        $sql->bindParam(2,$this->idade);
        $sql->bindParam(3,$this->email);

        // $sql->execute();
        // echo "ok";
        
        if ($sql->execute()){
            echo "ok";
        }else{
            echo "erro";
        }
    }

    public function readInfo($id = null){
        if(isset($id)){
        $sql = $this->connect->prepare("SELECT *FROM clientes WHERE id=?");

        $sql -> bindValue(1,$id); //bindParam()

        $sql -> execute();

        $result = $sql->fetch(PDO::FETCH_OBJ);
        return $result;

        } else {
            $this->getAll();
        }
    }

    public function getAll(){
        $sql = $this->connect->query("SELECT * FROM clientes");
        
        $r= $sql->fetchAll();//fecthAll()pega todas as formacões consultadas --- tranforma dados em matriz**
        return $r;
        echo 'sla varias'; 
    }

} //end classCrud
