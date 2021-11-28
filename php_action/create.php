<?php
//sessão
session_start();
// Conexão
include_once 'db_connect.php';

$modelo = mysqli_escape_string($connect, $_POST['modelo']);
$marca = mysqli_escape_string($connect, $_POST['marca']);
$cor = mysqli_escape_string($connect, $_POST['cor']);
$ano = mysqli_escape_string($connect, $_POST['ano']);
$categoria = mysqli_escape_string($connect, $_POST['categoria']);
$combustivel = mysqli_escape_string($connect, $_POST['combustivel']);

$sql = "INSERT INTO carros (modelo, marca, cor, ano,combustivel, categoria) VALUES ('$modelo', '$marca', '$cor', '$ano', '$combustivel', '$categoria')";

if (mysqli_query($connect, $sql)):
    $_SESSION['mensagem'] = "Cadastrado com Sucesso.";
    header('Location: ../index.php');
else:
    $_SESSION['mensagem'] = "Erro ao Cadastrar.";
    header('Location: ../index.php');
endif;

