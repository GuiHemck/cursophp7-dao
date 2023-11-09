<?php 

require_once("config.php");

//carrega 1 usuario

/*$root = new Usuario();

$root -> loadByid(6);

var_dump ($root);*/

//carrega umma lista de usuarios

/*$lista = Usuario::getList();

echo json_encode($lista)*/

//carrega uma lista de usuarios buscando pelo login

/*$busca = Usuario::search("gu");

echo json_encode($busca);*/

//carrega um usuario usando o login e a senha

$usuario =new Usuario();

$usuario->login("guilherme","123456");

print_r($usuario);






/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/
?>