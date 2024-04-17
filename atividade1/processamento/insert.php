<?php
require_once("../conexao/database.php");
$mysqli = $conexao;
//var_dump($_POST);
$nome       = $_POST['nome'];
$email      = $_POST['email'];
$telefone   = $_POST['telefone'];
$senha      = $_POST['senha'];

$sql = "INSERT INTO usuario (nome, email, telefone, senha) VALUES (?,?,?,?)";

$comando = $mysqli->prepare($sql);
$comando->bind_param("ssss", $nome, $email, $telefone, $senha);
$comando->execute();
$comando->close();
$mysqli->close();
header("location: ../index.php");