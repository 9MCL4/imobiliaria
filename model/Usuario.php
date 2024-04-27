<?php


require_once 'Banco.php';
require_once '../Conexao.php';

class Usuario extends Banco{
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
$query = "insert into usuario (id, login, senha, permissao) values (null, :login,:senha,:permissao)";
if ($conn = $conexao->getConection()){
    $stmt = $conn->prepare($query);
    
    if ($stmt->execute(array(':login' => $this->login, ':senha'=> $this->senha, ':permissao'=> $this->permissao))){
        $result = $stmt->rowCount();
    }
}
return $result;

}


public function remove($id){
    
}

public function find($id){
    
}

public function count(){
    
}

public function listAll(){
    
}

}

?>
