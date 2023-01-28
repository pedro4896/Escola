<?php
    include('../../verifica_login.php');
    include('../../conexaoBd.php');

    $data = $_POST['data'];
    $pauta = $_POST['pauta'];

    $docente = $banco->query("SELECT * FROM usuario 
    INNER JOIN docente ON usuario.cpf = docente.cpf_usuario 
    INNER JOIN leciona ON usuario.cpf = leciona.cpf_usuario 
    INNER JOIN ensina ON usuario.cpf = ensina.cpf_usuario
    WHERE ensina.codigo_disciplinas = '5_GEO' AND leciona.turma_serie = '5 Ano'");
    $cont = $banco->query("SELECT COUNT(matricula) AS quantidade FROM discentes WHERE turma_serie = '5 Ano';");
    $discente = $banco->query("SELECT * FROM discentes WHERE turma_serie = '5 Ano' AND situacao = 'Deferido' ORDER BY nome ASC;");
    $falta = array();
    $presenca = array();
    $justificativa = array();
    if($cont){
        foreach($cont as $linha){
            $indice = $linha['quantidade'];
        }
    }

    for($i = 1; $i<($indice + 1);$i++){
        $post_falta="falta_$i";
        $post_falta = $_POST[$post_falta];
        if($post_falta == null){
            $falta[$i] = 0;
        }else{
            $falta[$i] = $post_falta;
        }
    
        $post_presenca="presenca_$i";
        $post_presenca = $_POST[$post_presenca];
        if($post_presenca == null){
            $presenca[$i] = 0;
        }else{
            $presenca[$i] = $post_presenca;
        }
     
        $post_justificativa ="justificativa_$i";
        $post_justificativa = $_POST[$post_justificativa];
        if($post_justificativa == null){
            $justificativa[$i] = "-";
        }else{
            $justificativa[$i] = $post_justificativa;
        }       
    }

    if($docente){
        foreach($docente as $linha){
            $cpf = $linha['cpf'];
        }
    }

    $i = 1;
    $matricula = array();
    if($discente){
        foreach($discente as $linha){
           $matricula[$i] = $linha['matricula'];
           $i++;
        }
    }

    for($x = 1; $x<($indice + 1);$x++){
        $frequencia = $banco->query("INSERT INTO `frequencia` (`data_frequencia`, `faltas`, `presenca`, `justificativa`, `codigo_disciplinas`, `matricula_discente`, `cpf_usuario`, `turma_serie`)
                                     VALUES ('$data', $falta[$x], $presenca[$x], '$justificativa[$x]', '5_GEO', '$matricula[$x]', '$cpf', '5 Ano');");
        if($frequencia){}
    }   
    
    $aula = $banco->query("INSERT INTO `aula` (`data_aula`, `pauta`, `codigo_disciplinas`, `cpf_usuario`, `turma_serie`)
                           VALUES ('$data', '$pauta', '5_GEO', '$cpf', '5 Ano')");
    
    if($aula){
        echo("<script>window.location.href='geografia.php';</script>");
    }else{
        print_r($banco->errorInfo());
    }
    
?>