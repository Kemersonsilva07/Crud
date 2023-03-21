<?php
include("../models/conexao.php");

mysqli_query($conexao, "INSERT INTO alunos (nome, cidade, sexo) VALUES ('".$_POST["alunoNome"]."', '".$_POST["alunoCidade"]."', '".$_POST["alunoSexo"]."')");

header("location:../");
?>