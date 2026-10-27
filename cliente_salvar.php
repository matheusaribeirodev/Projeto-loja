<?php
include 'conexao.php';
 
 
$nome     = $_POST['nome'];
$email    = $_POST['email'];
$telefone = $_POST['telefone'];
$cidade   = $_POST['cidade'];
 
 
$sql = $pdo->prepare('INSERT INTO cliente (nome, email, telefone, cidade) VALUES (?, ?, ?, ?)');
$sql->execute([$nome, $email, $telefone, $cidade]);
 
 
header('Location: clientes.php?msg=salvo');
exit;