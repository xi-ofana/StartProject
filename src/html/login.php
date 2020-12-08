<?php
session_start();
require_once "conexao.php";

if(empty($_POST['emaill']) || empty($_POST['senhal'])){
    header('Location: index.html');
}

$emaill = mysqli_real_escape_string($conexao, $_POST['emaill']);
$senhal = mysqli_real_escape_string($conexao, $_POST['senhal']);

$query = "select id_startup from startup where email='{$emaill}' and senha = sha1('{$senhal}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);


if($row == 1){
    $login = mysqli_fetch_array($result);
    $_SESSION['login'] = $login['id_startup'];
    header('Location: perfil.php');
    exit();
}else{
    echo "<script>
    alert('Email e senha não coincidem ou são inválidos');
    location.href='index.html';
             </script>";
          
             
}

?>