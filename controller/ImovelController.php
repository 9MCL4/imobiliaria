<?php
require_once 'model/imovel.php';

class ImovelController{
    
    public static function salvar(){
        $imovel = new Imovel();

        $imovel->setlogin($_POST['login']);
        $imovel->setsenha($_POST['senha2']);
        $imovel->setpermissao($_POST['permissao']);
    
        $imovel->save();
    }
public static function listar (){
    $imovel = new Imovel();
    return $imovel->listAll();
}
}
?>