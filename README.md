
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

![image](https://user-images.githubusercontent.com/128431256/228099127-14a5a06e-dfc0-4574-936f-908c25863deb.png)
  
  cadastroAtualoza.php :  
  
  Ele cadastra o usuario dentro do banco de dados 
  
  CODIGO:

![image](https://user-images.githubusercontent.com/128431256/228099485-cb54965a-812c-435b-8fa7-108272623082.png)

deletarAluno.php: 

Ele deleta a seu cadastro dentro do banco

CODIGO:
 
 ![Delet](https://user-images.githubusercontent.com/128431256/228099578-26dc5c39-11ee-49fd-ad81-00bc3737c0f9.png)


funcoes.php:

A função serve para fazer as buscas entre as pastas 

CODIGO:

![func](https://user-images.githubusercontent.com/128431256/228099682-ffcb735f-7a14-4da4-9c6c-05344becec93.png)

  
  Models:
  
  conexao.php
   Como o nome já diz, ela é a conexão entre o banco de dados e o seu projeto;
   O codigo connect é o numero do seu Xampp
    
   CODIGO:

![model](https://user-images.githubusercontent.com/128431256/228099816-aa4f185b-2016-48c6-88bf-3d58f5b18c55.png)


  Views:
  
   Blades
  
  footer.php
     Ele é onde fecha o seu codigo
 CODIGO:

![foot](https://user-images.githubusercontent.com/128431256/228100090-866f8c70-4ec1-45be-86c5-cdccef1edb43.png)


header é onde fica o seu cabeçalho

![heaa](https://user-images.githubusercontent.com/128431256/228100290-b0ed8cd3-9c69-46e2-be4f-f210b8979b67.png)


Fora do blades 
    
cadastro.php	
Ela contem bootstrap e onde aparce o seu design do cadastro 

CODIGO:

![cadas](https://user-images.githubusercontent.com/128431256/228100390-92952390-28f2-46d7-907b-28f45846a95d.png)


cadastroAtualiza.php

Ela aparece contendo os design do seu AtulaizarAluno

codigo:

![tuas](https://user-images.githubusercontent.com/128431256/228100482-beb39a0f-2247-40e3-8696-2fb4f4a41f32.png)


   Agora fora das pasta fica o arquivo Index.php é a estrura do nosso projeto
 
   index.php

   CODIGO:

![ind](https://user-images.githubusercontent.com/128431256/228100545-10d6c4d2-0478-42a7-9a55-9d6cd00a47a8.png)

	
	
Agora q seu projeto esta pronto vamos testar.Para isso você ira na sua plataforma de pesquisar e ira digitar localhost
