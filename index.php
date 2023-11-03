<?php 

require_once("config.php");

$root = new Usuario();

$root -> loadByid(6);

var_dump ($root);

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/
?>