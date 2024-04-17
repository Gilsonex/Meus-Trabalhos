<?php
require_once("conexao/database.php");
//A variavel $conexao vem de database.php
$mysqli = $conexao;

$sql = "SELECT * FROM usuario";
$result = $mysqli->query($sql);
//var_dump($result);