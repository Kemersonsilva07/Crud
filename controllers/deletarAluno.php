<?php
include("../models/conexao.php");

mysqli_query($conexao,"DELETE FROM alunos WHERE codigo = ".$_GET["ida"]);

header("location:../");
?>