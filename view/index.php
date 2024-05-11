<?php
require_once 'controller/UsuarioController.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta nome = "viewport" content = "width=device-width, initial-scale=1">
        <title>Bootstrap</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpP">
</head>
<body>
    <?php
    if (isset($_GET['action'])){
        if($_GET['action'] == 'editor'){
         $usuario = call_user_func(array('UsuarioController','editar'),$_GET['id']);   
        }
        if ($_GET['action'] == 'listar'){
            require_once 'view/listUsuario.php';
        }
        if (isset($_GET['action'])){
            if($_GET['action'] == 'excluir'){
             $usuario = call_user_func(array('UsuarioController','excluir'),$_GET['id']);   
            require_once 'view/listUsuario.php';
            }
        }
    }else{
        require_once 'view/cadUsuario.php';
    }
    ?>
    <script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.double.min.js" rel = "stylesheet" integrity="sha384-QWTK">
        </body>
        </html>