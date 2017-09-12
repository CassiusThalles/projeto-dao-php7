<?php

require_once("config.php");

// Carrega um usuário
//$root = new Usuario();
//$root->loadById(3);
//echo $root;

// Carrega uma lista de usuários

/* $lista = Usuario::getList();

echo json_encode($lista); */

// Carrega uma lista de usuários buscando pelo login
/* $search = Usuario::search("jo");

echo json_encode($search); */

// Carrega um usuário usando o login e a senha
/* $usuario = new Usuario();
$usuario->login("root", "!@#$");

echo $usuario; */

// Criando um novo usuario
/* $aluno = new Usuario("aluno", "@alun0");

$aluno->insert();

echo $aluno;
*/

// Alterar um usario
/* $usuario = new Usuario();
$usuario->loadById(8);
$usuario->update("professor", "!@#$%¨&*");
echo $usuario; */

$usuario = new Usuario();
$usuario->loadById(7);
$usuario->delete();
echo $usuario;
?>