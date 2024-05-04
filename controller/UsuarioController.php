<?php
require_once '../model/Usuario.php';

class UsuarioController{
    
    public static function salvar(){
        $usuario = new Usuario();

        $usuario->setlogin($_POST['login']);
        $usuario->setsenha($_POST['senha2']);
        $usuario->setpermissao($_POST['permissao']);
    
        $usuario->save();
    }
public static function listar (){
    $usuarios = new Usuario();
    return $usuarios->listAll();
}
}
?>