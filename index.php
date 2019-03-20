<?php

require_once("config.php");

$jogos = new Usuario();

$jogos->loadById(3);

echo $jogos;

?>