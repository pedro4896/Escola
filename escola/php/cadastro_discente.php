<?php
    /*verificacao de login*/
   include('verifica_login.php');
   include('verifica_adm.php');
   /*conexao ao banco de dados*/
   include('conexaoBd.php');

   /*importacao dos dados do formulario*/
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
   $situacao = 'Deferido';

   /*sql que retorna a quantidade de discentes cadastrados*/
   $identificador = "SELECT MAX(matricula) AS maior_matricula FROM discentes";
   /*sql para inserir os dados dos discentes*/
   $discente = "INSERT INTO `discentes` (`nome`, `sexo`, `data_nascimento`, `situacao`, `naturalidade`, `pais`, `estado`, `cidade`, `bairro`, `rua`, `numero`, `turma_serie`)
                VALUES('$nome','$sexo','$data','$situacao','$naturalidade','$pais','$estado','$cidade','$bairro','$rua','$numero','$serie')";
   

   $executa = $banco->query("$discente");
   $executa1 = $banco->query("$identificador");
   if($executa){
        if($executa1){
            foreach($executa1 as $linha){
                $identificador = $linha['maior_matricula'];  
                $nomePais = "INSERT INTO `nome_dos_pais`(`nome_pai`, `nome_mae`, `matricula_discente`)
                             VALUES('$nomePai', '$nomeMae', '$identificador')";
   
                $telefonePais = "INSERT INTO `telefones`(`telefonePai`, `telefoneMae`, `matricula_discente`)
                        VALUES('$telefonePai', '$telefoneMae', '$identificador')";
                $executa2 = $banco->query("$nomePais");
                $executa3 = $banco->query("$telefonePais");          
            }
            if($executa2 and $executa3){
                echo("<script>alert('Dados inseridos com sucesso!');</script>");
                echo("<script>window.location.href='lista_discentes.php';</script>");
            }
        }
    }  
   else{
      print_r($banco->errorInfo());
   }
?>
    