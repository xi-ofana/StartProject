<?php
    require_once "conexao.php";
    $nomeproj=$_POST["nomeproj"];
    $descproj=$_POST["descproj"];
    $autor=$_POST["autor"];
    $telefonep=$_POST["telefonep"];
    $emailp=$_POST["emailp"]

    $query = "INSERT INTO projetos (nomeproj, descproj, autor, telefonep, emailp) VALUES ('$nomeproj','$descproj', '$autor', '$emailp', '$telefonep')";
    $inserir = mysqli_query($conexao,$query);
?>