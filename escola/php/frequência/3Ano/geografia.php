<?php
    include('../../verifica_login.php');
    include('../../conexaoBd.php');
?>
<!DOCTYPE html>
            <html>
                <head>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width", initial-scale="1">
                    <title>Frequ&ecirc;ncia 3Ano - Geografia</title>
                    <link rel="stylesheet" type="text/css" href="../frequencia_disciplinas.css">
                </head>
                <body> 
                    <div id="sair">
                        <a href= "../../logout.php" id="encerrar"><img src="../../../imagens/encerrar.png" alt= "Encerrar Sessão"/><br>Encerrar<br>Sess&atilde;o</a>
                    </div>
                    
                    <div><table>
                        <form action="frequencia_geografia.php" method="POST" onsubmit=" return validarTudo()">
                            <tr><th colspan=5>Frequ&ecirc;ncia 3 Ano - Geografia</th></tr>
                            <tr id=titulo>
                                <?php
                                    $result = $banco->query("SELECT * FROM usuario 
                                    INNER JOIN docente ON usuario.cpf = docente.cpf_usuario 
                                    INNER JOIN leciona ON usuario.cpf = leciona.cpf_usuario 
                                    INNER JOIN ensina ON usuario.cpf = ensina.cpf_usuario
                                    WHERE ensina.codigo_disciplinas = '3_GEO' AND leciona.turma_serie = '3 Ano'");
                                    if($result){
                                        foreach($result as $linha){
                                            $nome = $linha['nome'];
                                            $serie = $linha['turma_serie'];
                                        }
                                    }
                                    echo("<td>Docente:".@$nome."</td><td>Disciplina: Geografia</td><td>S&eacute;rie: ".@$serie."</td><td colspan=2>Data: <input type=date name=data  id=data required></td>");
                                ?>
                            </tr>
                            <tr><td>Matr&iacute;cula</td><td>Nome</td><td>Presen&ccedil;a</td><td>Faltas</td><td>Justificativa</td><tr>
                            <tbody id=tbody>
                                <?php
                                    $result = $banco->query("SELECT * FROM discentes WHERE turma_serie = '3 Ano' AND situacao = 'Deferido' ORDER BY nome ASC;");
                                    if($result){
                                        $cont = 1;
                                        foreach($result as $linha){
                                            echo("<tr>");
                                                echo("<td>".$linha['matricula']."</td>"."<td>".$linha['nome']."</td>
                                                      <td><input type=text name=presenca_$cont  id=presenca></td><td><input type=text name=falta_$cont  id=falta>
                                                      </td><td><textarea name=justificativa_$cont  id=justificativa rows=3 cols=25></textarea></td>
                                                ");
                                            echo("</tr>");
                                         $cont++;   
                                        }
                                    } 
                                ?>
                                <tr>
                                    <td colspan=5>  
                                        <div><span>Observa&ccedil;&otilde;es sobre a aula<span></div>
                                        <textarea name="pauta" rows="20" cols="50" required></textarea>
                                    </td>    
                                </tr>
                                <tr>
                                    <td colspan=5>

                                        <button type="submit">Enviar</button>
                                    </td>
                                </tr>      
                            </tbody>    
                        </form>
                    </div>    
                </body>        
            </html>                

                            