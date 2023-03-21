<?php
include("../models/conexao.php");

mysqli_query($conexao, "UPDATE alunos SET nome='".$_POST["alunoNome"]."', cidade='".$_POST["alunoCidade"]."', sexo='".$_POST["alunoSexo"]."' WHERE codigo = ".$_POST["alunoCodigo"]);

header("location:../");
?>