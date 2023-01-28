<?php
    include('conexaoBd.php');
    $cpf = $_POST["cpf"];
    $delete = "DELETE FROM `usuario` WHERE `usuario`.`cpf` = $cpf ";
    $delete1 = "DELETE FROM `docente` WHERE `docente`.`cpf_usuario` = $cpf ";

    $executa = $banco->query("$delete");
    $executa1 = $banco->query("$delete1");
    if($executa and $executa1){
        echo("<script>alert('Usuario Excluido');</script>");
        echo ("<script>window.location.href=' lista_usuario.php';</script>");
    }
    else{
      print_r($banco->errorInfo());
    }
?>