<?php
require_once("../conexao/database.php");
$mysqli = $conexao;

$idusuario = $_GET['id'];

$sql = "DELETE FROM usuario WHERE idusuario = ?";
$comando = $mysqli->prepare($sql);
$comando->bind_param("i", $idusuario);
$comando->execute();
$comando->close();
$mysqli->close();
header("location: ../index.php");