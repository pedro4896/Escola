<?php
   include('verifica_login.php');
   include('conexaoBd.php');
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
   $disciplina = $_POST['disciplina'];
   $serie = $_POST['serie'];
   $usuario  = "INSERT INTO `usuario`(`cpf`, `senha`, `nome`, `sexo`, `data_nascimento`, `naturalidade`, `pais`, `estado`, `cidade`, `bairro`, `rua`, `numero`) 
    VALUES ('$cpf','$senha','$nome','$sexo','$data','$naturalidade','$pais','$estado','$cidade','$bairro','$rua','$numero')";
  
   $docente = "INSERT INTO `docente`(`cpf_usuario`, `formacao`)
               VALUES('$cpf', '$disciplina')";

   $cod = null;
   
   $executa = $banco->query("$usuario");
   $executa1 = $banco->query("$docente");
   if($executa && $executa1){
         if($disciplina == 'Gestao'){
            $leciona = "INSERT INTO `leciona`(`cpf_usuario`, `turma_serie`)
                  VALUES('$cpf', '$serie')";
            
            $ensina = "INSERT INTO `ensina`(`cpf_usuario`, `codigo_disciplinas`)
                 VALUES('$cpf', 'GEST')";
         }
         else if($disciplina == 'Portugues'){
            
            $leciona = "INSERT INTO `leciona`(`cpf_usuario`, `turma_serie`)
                  VALUES('$cpf', '$serie')";
            
            $indice = explode(" ",$serie);  
            $cod = $indice[0].'_PORT';
            $ensina = "INSERT INTO `ensina`(`cpf_usuario`, `codigo_disciplinas`)
                 VALUES('$cpf', '$cod')";
         }
         else if($disciplina == 'Matematica'){
            $leciona = "INSERT INTO `leciona`(`cpf_usuario`, `turma_serie`)
                  VALUES('$cpf', '$serie')";

            $indice = explode(" ",$serie);  
            $cod = $indice[0].'_MAT';
            $ensina = "INSERT INTO `ensina`(`cpf_usuario`, `codigo_disciplinas`)
                 VALUES('$cpf', '$cod')";
         }
         else if($disciplina == 'Historia'){
            $leciona = "INSERT INTO `leciona`(`cpf_usuario`, `turma_serie`)
                  VALUES('$cpf', '$serie')";
            
            $indice = explode(" ",$serie);  
            $cod = $indice[0].'_HIST';
            $ensina = "INSERT INTO `ensina`(`cpf_usuario`, `codigo_disciplinas`)
                 VALUES('$cpf', '$cod')";
         }
         else if($disciplina == 'Geografia'){
            $leciona = "INSERT INTO `leciona`(`cpf_usuario`, `turma_serie`)
                  VALUES('$cpf', '$serie')";

            $indice = explode(" ",$serie);  
            $cod = $indice[0].'_GEO';
            $ensina = "INSERT INTO `ensina`(`cpf_usuario`, `codigo_disciplinas`)
                 VALUES('$cpf', '$cod')";
         }
         else if($disciplina == 'Artes'){
            $leciona = "INSERT INTO `leciona`(`cpf_usuario`, `turma_serie`)
                  VALUES('$cpf', '$serie')";
            
            $indice = explode(" ",$serie);  
            $cod = $indice[0].'_ART';
            $ensina = "INSERT INTO `ensina`(`cpf_usuario`, `codigo_disciplinas`)
                 VALUES('$cpf', '$cod')";
         }
         else if($disciplina == 'Educacao Fisica'){
            $leciona = "INSERT INTO `leciona`(`cpf_usuario`, `turma_serie`)
                  VALUES('$cpf', '$serie')";
            
            $indice = explode(" ",$serie);  
            $cod = $indice[0].'_ED_FISI';
            $ensina = "INSERT INTO `ensina`(`cpf_usuario`, `codigo_disciplinas`)
                 VALUES('$cpf', '$cod')";
         }
         else if($disciplina == 'Ciencias'){
            $leciona = "INSERT INTO `leciona`(`cpf_usuario`, `turma_serie`)
                  VALUES('$cpf', '$serie')";
            
            $indice = explode(" ",$serie);  
            $cod = $indice[0].'_CIEN';
            $ensina = "INSERT INTO `ensina`(`cpf_usuario`, `codigo_disciplinas`)
                 VALUES('$cpf', '$cod')";
         }
         else if($disciplina == "Ingles"){
            $leciona = "INSERT INTO `leciona`(`cpf_usuario`, `turma_serie`)
                  VALUES('$cpf', '$serie')";
            
            $indice = explode(" ",$serie);  
            $cod = $indice[0].'_ING';
            $ensina = "INSERT INTO `ensina`(`cpf_usuario`, `codigo_disciplinas`)
                 VALUES('$cpf', '$cod')";
         }
         else if($disciplina == 'Ensino Religioso'){
            $leciona = "INSERT INTO `leciona`(`cpf_usuario`, `turma_serie`)
                  VALUES('$cpf', '$serie')";
            
            $indice = explode(" ",$serie);  
            $cod = $indice[0].'_ENSI_RELI';
            $ensina = "INSERT INTO `ensina`(`cpf_usuario`, `codigo_disciplinas`)
                 VALUES('$cpf', '$cod')";
         }
         else{
            if($disciplina == 'Portugues2'){
                  $leciona = "INSERT INTO `leciona`(`cpf_usuario`, `turma_serie`)
                              VALUES('$cpf', '$serie')";
                    
                  $indice = explode(" ",$serie);  
                  $cod = 'J'.$indice[1].'_PORT';
                  $ensina = "INSERT INTO `ensina`(`cpf_usuario`, `codigo_disciplinas`)
                                   VALUES('$cpf', '$cod')";
            }else if($disciplina == 'Matematica2'){
                  $leciona = "INSERT INTO `leciona`(`cpf_usuario`, `turma_serie`)
                              VALUES('$cpf', '$serie')";
        
                  $indice = explode(" ",$serie);  
                  $cod = 'J'.$indice[1].'_MAT';
                  $ensina = "INSERT INTO `ensina`(`cpf_usuario`, `codigo_disciplinas`)
                              VALUES('$cpf', '$cod')";
            }
            else{
                  $leciona = "INSERT INTO `leciona`(`cpf_usuario`, `turma_serie`)
                              VALUES('$cpf', '$serie')";
                  $indice = explode(" ",$serie);  
                  $cod = 'J'.$indice[1].'_NAT_SOC';
                  $ensina = "INSERT INTO `ensina`(`cpf_usuario`, `codigo_disciplinas`)
                                   VALUES('$cpf', '$cod')";
            }
         }   
      }
      $executa2 = $banco->query("$leciona");
      $executa3 = $banco->query("$ensina");
      if($executa2 and $executa3){
        echo("<script>alert('Dados inseridos com sucesso!');</script>");
        echo("<script>window.location.href='lista_usuario.php';</script>");
      }
   else{
      print_r($banco->errorInfo());
   }
?>
    