<?php
//sessão
session_start();
// Conexão
include_once 'db_connect.php';

$id = mysqli_escape_string($connect, $_POST['id']);
$modelo = mysqli_escape_string($connect, $_POST['modelo']);
$marca = mysqli_escape_string($connect, $_POST['marca']);
$cor = mysqli_escape_string($connect, $_POST['cor']);
$ano = mysqli_escape_string($connect, $_POST['ano']);
$categoria = mysqli_escape_string($connect, $_POST['categoria']);
$combustivel = mysqli_escape_string($connect, $_POST['combustivel']);

$sql = "UPDATE carros SET modelo= '$modelo', marca = '$marca', cor = '$cor', 
                  ano = '$ano', combustivel = '$combustivel', categoria = '$categoria' WHERE id = '$id'";

if (mysqli_query($connect, $sql)):
    $_SESSION['mensagem'] = "Editado com Sucesso.";
    header('Location: ../index.php');
else:
    $_SESSION['mensagem'] = "Erro ao Editar.";
    header('Location: ../index.php');
endif;