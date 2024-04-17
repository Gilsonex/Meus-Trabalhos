<?php
require_once("conexao/database.php");
$mysqli = $conexao;

$idusuario = $_GET['id'];

$sql = "SELECT * FROM usuario WHERE idusuario = {$idusuario}";
$result = $mysqli->query($sql);
