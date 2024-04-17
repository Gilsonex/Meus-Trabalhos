<?php
require_once("../conexao/database.php");
$mysqli = $conexao;

$id         = $_POST['idusuario'];
$nome       = $_POST['nome'];
$email      = $_POST['email'];
$telefone   = $_POST['telefone'];
$senha      = $_POST['senha'];

$sql = "UPDATE usuario SET nome = ?, email = ?, telefone=?, senha=? WHERE idusuario = ?";

$comando = $mysqli->prepare($sql);
$comando->bind_param("ssssi", $nome, $email, $telefone, $senha, $id);
$comando->execute();
$comando->close();
$mysqli->close();
header("location: ../index.php");