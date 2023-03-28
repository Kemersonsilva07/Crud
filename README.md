
# Crud
Aprenda os passo a passo para criar o seu primeiro banco Crud:

 Olá, hoje vou mostrar para vcs como criar o seu primeiro Banco Crud no visual code
     Entretanto vou explicar a você o que é Crud:

 Primeiramente, CRUD é o acrônimo para Create (criar), Read (ler), Update (atualizar) e Delete (apagar). Com essa explicação, já dá para intuir que o CRUD é uma sequência de funções de um sistema que trabalha com banco de dados, seja ele na sua máquina ou na nuvem.
   
   Agora q você já tem uma ideia do q seja o crud,vamos mostrar como seria os passo a passo da criação do seu primeiro crud
   
   Antes de começar faça as seguintes instalações:
  
  1.Passo_Primeiro instale o aplicativo workbench(ele é onde vc pode insirir seus dados no banco)ele estara no link a seguir:
     < https://www.mysql.com/products/workbench/>  
      
   ![work](https://user-images.githubusercontent.com/128431256/228089834-47849141-6f5c-4a9a-a337-790a592980a4.png)
 
 
   2.Passo_instale o aplicativo xampp:
  <https://www.apachefriends.org/pt_br/download.html>

![Captura de tela 2023-03-27 203437](https://user-images.githubusercontent.com/128431256/228090208-646ab456-2128-4162-8ecd-f14829c6bfcf.png)

 3.Passo_instale o aplicativo Visual Code(Ele é usado para a criação do codigo):
      https://code.visualstudio.com/
    
   ![Visual](https://user-images.githubusercontent.com/128431256/228089947-1202e57c-87a4-4500-8f21-0a9e8350e883.png)

   4.Passo_instale o bootstrap(fornece estruturas de CSS para a criação de sites e aplicações responsivas de forma rápida e simples)
     <https://getbootstrap.com/>
     
   ![boot](https://user-images.githubusercontent.com/128431256/228089994-654df66a-beb0-4bde-9413-01f7527edbb1.png);
	
Após a instalação dos aplicativos necessarios para a criação do seu projeto,vou explicar os passos e as codificações necessarias para a criação do bancoCrud

   5.Passo_ligar o xampp(Mysqli,apache)

   6.Passo_criar no workbench um banco com as seguintes informações 

   CREATE DATABASE  escola;
    use escola
 CREATE TABLE  alunos(
   codigo int(11) NOT NULL AUTO_INCREMENT,
   nome varchar(250) DEFAULT NULL,
   cidade varchar(250) DEFAULT NULL,
   sexo varchar(1) DEFAULT NULL,
   PRIMARY KEY (`codigo`)
  )  ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

7.Passo_Criar uma pasta com o nome BancoCrud

8.Passo_Entrar no Visual Code e usar a pasta BancoCrud
   
   Agora para a criacão das pasta aperte em new folder e para a criação dos arquivos New File
    
   Após ter feito os passos necessarios para chegar até aqui,você terá que fazer os seguintes passos:
 
 9.Passo_Crie as pastas com os seguintes nomes:
 
   
 .Controller
   
 .Models
   
 .Views
   
 .Index.php
   
   Dentro da Pasta views tera os seguintes arquivos 
   
   .atualizarAluno.php
   
   .cadastrarAluno.php
   
   .deletarAluno.php
   
   .funcoes.php
 
 Dentro da pasta model ficará as Conexão do banco
 
  .Conexao.php
  
  Agora dentro da Views criar uma pasta blades e criar um arquivo com os nomes
  
  .cadastro.php
 
  .cadastroAtualiza.php
   
   agora dentro da pasta blades
   
   .footer.php
   
   .header.php

  A pasta index.php ficara fora de todos as pastas 

   10.Passo_Agora vamos fazer as codificações para o nosso Projeto
 
 Controller:
 
 atualizarAluno.php

O arquivo atualizarAluno serve para o usuario Atualizar o seu cadastro no banco de dados assim podendo fazer um novo cadastro
   CODIGO:
  <?php
    include("../models/conexao.php");
  mysqli_query($conexao, "UPDATE alunos SET nome='".$_POST["alunoNome"]."', cidade='".$_POST["alunoCidade"]."', sexo='".$_POST["alunoSexo"]."' WHERE codigo = ".$_POST["alunoCodigo"]);
   header("location:../"); 
  ?>
  
  cadastroAtualoza.php :  
  
  Ele cadastra o usuario dentro do banco de dados 
    CODIGO:
<?php
  include("../models/conexao.php"); mysqli_query($conexao, "INSERT INTO alunos (nome, cidade, sexo) VALUES ('".$_POST["alunoNome"]."', '".$_POST["alunoCidade"]."', '".$_POST["alunoSexo"]."')");
header("location:../");
?>
 
 deletarAluno.php:
 
 Ele deleta a seu cadastro dentro do banco
CODIGO:
   <?php
   include("../models/conexao.php");
   mysqli_query($conexao,"DELETE FROM alunos WHERE codigo = ".$_GET["ida"]);
   header("location:../");
  ?>

funcoes.php:
    A função serve para fazer as buscas entre as pastas 
 
 CODIGO:
 <?php
function mostrarDados()
{
  include("models/conexao.php");
    if (empty($_POST["buscar"])) {
	echo "Nenhum resultado";
    
} else {

	$varBusca = $_POST["buscar"];
        
echo "<table class='table table-bordered table-striped table-hover' border='1' width='450'><tr><td>Frase</td><td>Editar</td><td>Excluir</td></tr>";

	$query = mysqli_query($conexao, "SELECT * FROM alunos WHERE nome LIKE '%$varBusca%'");
        
while ($exibe = mysqli_fetch_array($query)) {

	    $varSexo = ($exibe[3] == "m") ? "o" : "a";
            
echo "<tr>" .

		"<td>" . strtoupper($varSexo) . " alun$varSexo <b>" . $exibe[1] . "</b> mora na cidade de " . $exibe[2] . ".</td>" .
                
"<td><a href='views/cadastroAtualiza.php?ida=" . $exibe[0] . "'><buttom type='button' class='btn btn-secondary'>Editar</button></a></td>" .

		"<td><a href='controllers/deletarAluno.php?ida=" . $exibe[0] . "'><button type='button' class='btn btn-danger'>Excluir</button></a></td>" .
                
"</tr>";
        }

        echo "</table>";
    }
}
?>
  
  Models:
  
  conexao.php
   Como o nome já diz, ela é a conexão entre o banco de dados e o seu projeto;
   O codigo connect é o numero do seu Xampp
    
   CODIGO:
     <?php
$conexao = mysqli_connect("127.0.0.1","root","");
           mysqli_select_db($conexao,"escola");
           mysqli_set_charset($conexao,"UTF8");
 ?>
  
  Views:
  
   Blades
  
  footer.php
     Ele é onde fecha o seu codigo
 
 CODIGO:
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
  header.php

header é onde fica o seu cabeçalho

CODIGO:
  <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Revisão</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body class="bg-secondary">
    
Fora do blades 
    
cadastro.php	

Ela contem bootstrap e onde aparce o seu design do cadastro
   
CODIGO:
  <?php include("blades/header.php") ?>

<div class="container border rounded mt-5 bg-white shadow">
    <form action="../controllers/cadastrarAluno.php" method="post">
        <div class="row">
            <div class="col">
        <label class="form-label">Nome</label>
		    
        <input class="form-control" type="text" name="alunoNome"><br>
</diV>
        <div class="col">
        <label class="form-label">Cidade</label>
		
        <input class="form-control" type="text" name="alunoCidade"><br>
</div>
</div>
       <input class="form-check-input"type="radio" value="m" name="alunoSexo">
	    
        <label class="radio-inline"> Masculino </label><br>
        
	 <input class="form-check-input" type="radio" value="f" name="alunoSexo">
        
	    <label class="radio-inline"> Feminino </label><br>
        
	    <input class="mt-2 mb-3 btn btn-success" type="submit" value="Cadastrar">
  </form>
</div>

<?php include("blades/footer.php") ?>

cadastroAtualiza.php

Ela aparece contendo os design do seu AtulaizarAluno

codigo:
<?php include("../models/conexao.php") ?>
<?php include("blades/header.php") ?>

    <?php
    $varIda = $_GET["ida"];
    $query = mysqli_query($conexao,"SELECT * FROM alunos WHERE codigo = $varIda");
    while($exibe = mysqli_fetch_array($query)){
    ?>
    <div class="container border rounded mt-5 bg-white shadow">
    <form action="../controllers/atualizarAluno.php" method="post">
        <input type="hidden" name="alunoCodigo" value="<?php echo $exibe[0] ?>">
        
        <div class="row my-3">
            <div class="col">
        <label class="form-label">Nome</label>
        <input class="form-control" type="text" name="alunoNome" value="<?php echo $exibe[1] ?>"><br>
        </div>
        <div class="col">
        <label class="form-label">Cidade</label>
        <input class="form-control" type="text" name="alunoCidade" value="<?php echo $exibe[2] ?>"><br>
    </div>
    </div>
 
        Masculino <input type="radio" value="m" name="alunoSexo" <?php echo ($exibe[3]=="m")?"checked":""?>><br>
        Feminino  <input type="radio" value="f" name="alunoSexo" <?php echo ($exibe[3]=="f")?"checked":""?>><br>
        
        <input class="mt-2 mb-3 btn btn-success" type="submit" value="Atualizar">
    </form>
    </div>
    <?php } ?>

<?php include("blades/footer.php") ?>
 
    Agora fora das pasta fica o arquivo Index.php é a estrura do nosso projeto
 
    index.php

    CODIGO:

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
	
	
	Agora q seu projeto esta pronto vamos testar.Para isso você ira na sua plataforma de pesquisar e ira digitar localhost
