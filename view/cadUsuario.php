<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Usuário</title>
</head>
<body>
<form action="" method="post">
 
<label for="login">Login:</label>
 
<input type="text" name="login" id="login"><br/>
 
<label for="senha1">Senha: </label>
 
<input type="password" name="senha1" id="senha1"><br/>
 
<label>Confirmação de Senha</label>
 
<input type="password" name="senha2" id="senha2"><br/>
 
<label>Tipo de Permissão:</label>
 
<select name="permissao" id="permissao">
 
<option value="0">**SELECIONE**</option>
 
<option value="A">Administrador</option>
 
<option value="C">Comum</option>
 
</select>
 
<br/>
 
<input type="submit" value="Salvar" name="btnSalvar" id="btnSalva">
 
</form>
<?php
if(isset($_POST['btnSalvar'])){
    require_once '../controller/UsuarioController.php';
    call_user_func(array('UsuarioController','salvar'));
}
?>

</body>
</html>

