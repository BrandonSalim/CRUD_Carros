<?php
//sessão
session_start();
// Conexão
include_once 'db_connect.php';

$id = mysqli_escape_string($connect, $_POST['id']);

$sql = "DELETE FROM carros WHERE id = '$id'";

if (mysqli_query($connect, $sql)):
    $_SESSION['mensagem'] = "Deletado com Sucesso.";
    header('Location: ../index.php');
else:
    $_SESSION['mensagem'] = "Erro ao Deletar.";
    header('Location: ../index.php');
endif;