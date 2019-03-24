<?php

require_once("config.php");

//$jogos = new Usuario();
//$jogos->loadById(3);
//echo $jogos;

//$lista = Usuario::getList();
//echo json_encode($lista);

//$search = Usuario::search("jo");

//echo json_encode($search);

//$usuario = new Usuario();
//$usuario->login("root","askljd");

//$aluno = new Usuario("aluno", "@lun0");

//$aluno->insert();

//echo $aluno;

$usuario = new Usuario();

$usuario->loadById(3);

$usuario->update("professor", "!@#$%¨%$#");

echo $usuario;


?>