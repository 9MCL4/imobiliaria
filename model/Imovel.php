<?php


require_once 'Banco.php';
require_once 'Conexao.php';

class Imovel extends Banco{
    private $id;
    private $login;
    private $senha;
    private $permissao;

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        return $this->id = $id;
    }

    public function getlogin(){
        return $this->login;
    }
    public function setlogin($login){
        return $this->login = $login;
    }

    public function getsenha(){
        return $this->senha;
    }
    public function setsenha($senha){
        return $this->senha = $senha;
    }
    public function getpermissao(){
        return $this->permissao;
    }
    public function setpermissao($permissao){
        return $this->permissao = $permissao;
    }


public function save(){
$result = false;
$conexao = new Conexao();
if ($conn = $conexao->getConection()){
    if ($this->id > 0){
        $query = "UPDATE imovel set login = :login, senha = :senha, permissao = permissao where id = :id";
        $stmt = $conn->prepare($query);
        if ($stmt->execute(array(':login' => $this->login, ':senha'=> $this->senha, ':permissao'=> $this->permissao, ':id' => $this-> id))){
            $result = $stmt->rowCount();
        }
    }else{$query = "INSERT into imovel (id, login, senha, permissao) values (null, :login,:senha,:permissao)";
        $stmt = $conn->prepare($query);
        if ($stmt->execute(array(':login' => $this->login, ':senha'=> $this->senha, ':permissao'=> $this->permissao))){
            $result = $stmt->rowCount();
        }
    } 
    
   
}
return $result;

}


public function remove($id){
    
}

public function find($id){
    $conexao = new Conexao();
$conn = $conexao->getConection();
$query = "SELECT * from imovel where id = :id";
$stmt = $conn->prepare($query);
if ($stmt->execute(array(':id' => $id))){
    if ($stmt->rowCount() > 0){
}else{
    $result = false;
}
}
return $result;
}

public function count(){
    
}

public function listAll(){
    $conexao = new Conexao();
    $conn = $conexao->getConection();
    $query = "SELECT * FROM imovel";
    $stmt = $conn->prepare($query);
    $result = array();
    if($stmt->execute()){
        while($rs = $stmt->fetchObject(Imovel::class)){
            $result[] = $rs;
        }
    } else{
        $result = false;
    }
    return $result;
}

}

?>
