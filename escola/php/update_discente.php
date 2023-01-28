<?php
   include('verifica_login.php');
   include('conexaoBd.php');
   $matricula = $_POST['matricula'];
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
   $telefonePai = $_POST["telefonePai"];
   $telefoneMae = $_POST["telefoneMae"];
   $nomePai = $_POST["nomePai"];
   $nomeMae = $_POST["nomeMae"];
   $serie = $_POST['serie'];
   $situacao = $_POST['situacao'];
   $prefixo = "UPDATE discentes INNER JOIN nome_dos_pais ON discentes.matricula = nome_dos_pais.matricula_discente
   INNER JOIN telefones ON discentes.matricula = telefones.matricula_discente SET ";
   $meio = null;
   $sufixo = " WHERE `matricula` = '$matricula';";

   if($situacao != null){
      $meio .= "`situacao` = '$situacao', ";
   }

   if($nomePai != null){
      $meio .= "`nome_pai` = '$nomePai', ";
   }

   if($nomeMae != null){
      $meio .= "`nome_mae` = '$nomeMae', ";
   }

   if($telefonePai != null){
      $meio .= "`telefonePai` = '$telefonePai', ";
   }

   if($telefoneMae != null){
      $meio .= "`telefoneMae` = '$telefoneMae', ";
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


   $meio .= "$sufixo";
   $troca = explode(",  WHERE",$meio);

   $sql .= "$prefixo";
   $sql .= "$troca[0]";
   $sql .= "$sufixo";

   $result = $banco->query("$sql");
   if($result){
      echo("<script>alert('Dados Atualizados!');</script>");
      echo ("<script>window.location.href='lista_discentes.php';</script>");
   }
   else{
      print_r($banco->errorInfo());
   }
?>