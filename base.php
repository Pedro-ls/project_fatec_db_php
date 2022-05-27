<?php

$cod = $_POST["cod"];
$nome = $_POST["nome"];
$endereco = $_POST["endereco"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$telefone = $_POST["telefone"];
$porc_comissao = $_POST["porc_comissao"];

$codigo = $_POST["codigo"];
$nome = $_POST["nome"];
$endereco = $_POST["endereco"];
$telefone = $_POST["telefone"];
$limite_cred = $_POST["limite_cred"];
$email = $_POST["email"];
$CPF = $_POST["CPF"];
$estado = $_POST["estado"];

$sql = "INSERT INTO cliente (nome, endereco, telefone, limite_cred, email, CPF, estado) VALUES ('$nome', '$endereco', '$telefone', $limite_cred, $email, $CPF, $estado);";
$sql2 = "SELECT * FROM cliente;";
$sql3 = "SELECT * FROM cliente WHERE cod = $codigo;";

$id = $_POST["id"];
$descricao = $_POST["descricao"];

$cod  = $_POST["cod"];
$nome  = $_POST["nome"];
$preco  = $_POST["preco"];
$qtd_estoque  = $_POST["qtd_estoque"];
$unidade_medida  = $_POST["unidade"];
