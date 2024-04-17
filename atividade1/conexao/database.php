<?php
define("HOSTNAME","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE","senai");

$conexao = new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE);

//var_dump($conexao);