<?php

require_once("config.php");


//Carrega um usuario
//$root = new Usuario();
//$root->loadById(1);
//echo $root;

//Carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//Carrega um usuario usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("root","#@E#");
//echo $usuario;


//Criando um novo usuario
//$aluno = new Usuario("aluno", "@alun0");
//$aluno->insert();
//echo $aluno;


//Alterar um usuario
//$usuario = new Usuario();
//$usuario->loadById(11);
//$usuario->update("Professor", "!@#$%¨*&");
//echo $usuario;

$usuario = new Usuario();

$usuario->loadById(10);

$usuario->delete();

echo $usuario;



?>