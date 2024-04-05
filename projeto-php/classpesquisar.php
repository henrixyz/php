    public function readInfo($nome){
        $sql = $this->connect->prepare("SELECT *FROM clientes WHERE nome LIKE ? ");

        $sql -> bindValue(1,"%$nome%"); //bindParam()

        $sql -> execute();

        $result = $sql->fetch(PDO::FETCH_ASSOC);
        return $result;