<?php

require_once("config.php");

/*
$sql = new Sql();
$usuario = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuario);*/


/* um usuario só pelo id
$root = new usuario();
$root->loadbyId(3);
echo $root;
*/

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//carrega um usuario usando login e senha
$usuario = new Usuario();
$usuario->login("root","@#$@#$@%%#$%");
echo $usuario;


?>