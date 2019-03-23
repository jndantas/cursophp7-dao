<?php

require_once("config.php");

//$jogos = new Usuario();
//$jogos->loadById(3);
//echo $jogos;

//$lista = Usuario::getList();
//echo json_encode($lista);

//$search = Usuario::search("jo");

//echo json_encode($search);

$usuario = new Usuario();
$usuario->login("root","askljd");

echo $usuario;
?>