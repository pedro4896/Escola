<?php
   /*verificacao de login*/ 
   include('verifica_login.php');
   /*conexao do banco de dados*/
   include('conexaoBd.php');
   /*importa as variaveis via POST*/
   $cpf = $_POST["cpf"];
   $senha = $_POST["senha"];
   $nome = $_POST["nome"];
   $sexo = $_POST["sexo"];
   $data = $_POST["data"];
   $naturalidade = $_POST["naturalidade"];
   $pais = $_POST["pais"];
   $estado = $_POST["estado"];
   $cidade = $_POST["cidade"];
   $bairro = $_POST["bairro"];
   $rua = $_POST["rua"];
   $numero = $_POST["numero"];
   $disciplina = $_POST["disciplina"];
   $serie = $_POST["serie"];
   /*parte da string que forma o sql*/
   $prefixo = "UPDATE `usuario` INNER JOIN `docente` ON usuario.cpf = docente.cpf_usuario INNER JOIN leciona ON usuario.cpf = leciona.cpf_usuario 
   INNER JOIN ensina ON usuario.cpf = ensina.cpf_usuario SET ";
   $meio = null;
   /*condicional da string sql*/
   $sufixo = " WHERE `cpf` = '$cpf';";

   /*Sera feita uma verificao de variavel para saber se veio um novo dado ao não, se sim é concatenado a 
   variavel '$meio', se não o dado fica inalterado.*/
   if($senha != null){
      $meio = "`senha` = '$senha', ";
   } 

   if($nome != null){
      $meio .= "`nome` = '$nome', ";
   }

   if($sexo != null){
      $meio .= "`sexo` = '$sexo', ";
   }

   if($data != null){
      $meio .= "`data_nascimento` = '$data', ";
   }

   if($naturalidade != null){
      $meio .= "`naturalidade`= '$naturalidade', ";
   }

   if($pais != null){
      $meio .= "`pais` = '$pais', ";
   }

   if($estado != null){
      $meio .= "`estado` = '$estado', ";
   }

   if($cidade != null){
      $meio .= "`cidade` = '$cidade', ";
   }

   if($bairro != null){
      $meio .= "`bairro` = '$bairro', ";
   }

   if($rua != null){
      $meio .= "`rua` = '$rua', ";
   }

   if($numero != null){
      $meio .= "`numero` = '$numero', ";
   }

   if($serie != null){
      $meio .= "`turma_serie` = '$serie', ";
   }

   if($disciplina != null){
      if($disciplina == 'Gestao'){
         $meio .= "`formacao` = '$disciplina', `codigo_disciplinas` = 'GEST', ";
      }
      else if($disciplina == 'Portugues'){
         $indice = explode(" ",$serie);  
         $cod = $indice[0].'_PORT';
         $meio .= "`formacao` = '$disciplina', `codigo_disciplinas` = '$cod', ";
      }
      else if($disciplina == 'Matematica'){
         $indice = explode(" ",$serie);  
         $cod = $indice[0].'_MAT';
         $meio .= "`formacao` = '$disciplina', `codigo_disciplinas` = '$cod', ";
      }
      else if($disciplina == 'Historia'){
         $indice = explode(" ",$serie);  
         $cod = $indice[0].'_HIST';
         $meio .= "`formacao` = '$disciplina', `codigo_disciplinas` = '$cod', ";
      }
      else if($disciplina == 'Geografia'){
         $indice = explode(" ",$serie);  
         $cod = $indice[0].'_GEO';
         $meio .= "`formacao` = '$disciplina', `codigo_disciplinas` = '$cod', ";
      }
      else if($disciplina == 'Artes'){
         $indice = explode(" ",$serie);  
         $cod = $indice[0].'_ART';
         $meio .= "`formacao` = '$disciplina', `codigo_disciplinas` = '$cod', ";
      }
      else if($disciplina == 'Educacao Fisica'){
         $indice = explode(" ",$serie);  
         $cod = $indice[0].'_ED_FISI';
         $meio .= "`formacao` = '$disciplina', `codigo_disciplinas` = '$cod', ";
      }
      else if($disciplina == 'Ciencias'){
         $indice = explode(" ",$serie);  
         $cod = $indice[0].'_CIEN';
         $meio .= "`formacao` = '$disciplina', `codigo_disciplinas` = '$cod', ";
      }
      else if($disciplina == "Ingles"){
         $indice = explode(" ",$serie);  
         $cod = $indice[0].'_ING';
         $meio .= "`formacao` = '$disciplina', `codigo_disciplinas` = '$cod', ";
      }
      else if($disciplina == 'Ensino Religioso'){
         $indice = explode(" ",$serie);  
         $cod = $indice[0].'_ENSI_RELI';
         $meio .= "`formacao` = '$disciplina', `codigo_disciplinas` = '$cod', ";
      }
      else{
         if($disciplina == 'Portugues2'){
            $indice = explode(" ",$serie);  
            $cod = 'J'.$indice[1].'_PORT';
            $meio .= "`formacao` = '$disciplina', `codigo_disciplinas` = '$cod', ";
         }else if($disciplina == 'Matematica2'){
            $indice = explode(" ",$serie);  
            $cod = 'J'.$indice[1].'_MAT';
            $meio .= "`formacao` = '$disciplina', `codigo_disciplinas` = '$cod', ";
         }
         else{
            $indice = explode(" ",$serie);  
            $cod = 'J'.$indice[1].'_NAT_SOC';
            $meio .= "`formacao` = '$disciplina', `codigo_disciplinas` = '$cod', ";
         }   
      }     
   }

   $meio .= "$sufixo";
   $troca = explode(",  WHERE",$meio);

   /*é feita a concatenacao das strings sql para forma o sql por completo*/
   $sql .= "$prefixo";
   $sql .= "$troca[0]";
   $sql .= "$sufixo";

   /*O sql é exacutado e os dados sao atualizados*/
   $result = $banco->query("$sql");
   if($result){
      echo("<script>alert('Dados Atualizados!');</script>");
      echo ("<script>window.location.href='lista_usuario.php';</script>");
   }
   else{
      print_r($banco->errorInfo());
   }
?>