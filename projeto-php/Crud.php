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
        
        if ($sql->execute()){
            echo "dados inseridos com sucesso!";
        }else{
            echo "erro";
        }
    }
    
    public function readInfo($id = null){
        if(isset($id)){
            
            $sql = $this->connect->prepare("SELECT * FROM clientes WHERE id=?");
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
    }
    
    public function readInfoAll($nome = null){
        if(isset($nome)){
            
            $sql = $this->connect->prepare("SELECT * FROM clientes WHERE nome LIKE ?");

            $sql -> bindValue(1,"%$nome%"); //bindParam()
            $sql -> execute();
            
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $result;
            
        } else {
            $this->getAll();
        }
    }
    
    public function update($id, $nome, $idade, $email){
        $sql = $this->connect->prepare("UPDATE clientes SET nome=?, idade=?, email=? WHERE id=?");
        
        $sql->bindValue(1,$nome,PDO::PARAM_STR);
        $sql->bindValue(2,$idade,PDO::PARAM_STR);
        $sql->bindValue(3,$email,PDO::PARAM_STR);
        $sql->bindValue(4,$id,PDO::PARAM_STR);
        
        if ($sql->execute()){
            echo "registro atualizado";
        }else{
            echo "erro! volte mais tarde e tente novamente";
        }
        
    }
    
    public function delete($id){
        $sql = $this->connect->prepare("DELETE FROM clientes WHERE id=?");
        
        $sql->bindValue(1,$id,PDO::PARAM_STR);
        
        if ($sql->execute()){
            echo "registro excluído! <br> <a href='readAllDelete.php'> voltar </a>";
        }else{
            echo "problemas ao tentar excluir! <br> <a href='readAllDelete.php'> voltar </a>";
        }
        

    }

} 
