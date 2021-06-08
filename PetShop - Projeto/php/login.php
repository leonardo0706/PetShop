<?php
include('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])){
    header('location: login.html');
    exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "SELECT * FROM `login` WHERE user = 'leonardo' and password = md5('leonardo13')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

?>