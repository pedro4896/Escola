<?php
    include('verifica_login.php');
    include('verifica_adm.php');
    include('conexaoBd.php');
    $result = $banco->query("SELECT * FROM usuario INNER JOIN docente ON usuario.cpf = docente.cpf_usuario INNER JOIN leciona ON usuario.cpf = leciona.cpf_usuario ORDER BY usuario.nome ASC;");
?>
        <!DOCTYPE html>
            <html>
                <head>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width", initial-scale="1">
                    <title>Lista de Usu&aacute;rios</title>
                    <link rel="stylesheet" type="text/css" href="../css/lista_usuario.css">
                </head>
                <body>
 
                    <a href= "logout.php" id="encerrar"><img src="../imagens/encerrar.png" alt= "Encerrar Sessão"/><br>Encerrar<br>Sess&atilde;o</a>
                    <div id="divBusca">
                        <img src="../imagens/lupa1.png" alt= "Pesquisar"/>
                        <input id="txtBusca" class="searchbar" type=text placeholder="Pesquisar...">
                    </div>

                    <div id="title">
                        <button onclick=cadastro()><img src=../imagens/positivo-green.png class= rotacao alt= Adicionar Usuario/> <span>Novo Usu&aacute;rio</span></button>
                        <button onclick=atualizar()><img src=../imagens/lapis-yellow.png class= terremoto alt= Editar Usuario/> <span>Editar Usu&aacute;rio</span></button>
                        <button onclick=openModal('dv-modal')><img src=../imagens/lixeira3-red.gif alt= Excluir Usuario/> <span>Excluir Usu&aacute;rio</span></button>
                    </div>

                    <div><thead><table>
                        <th colspan=14>Lista de usu&aacute;rios cadastrados</th>
                        <tr id=titulo><td>Nome</td><td>Data de Nascimento</td><td>Sexo</td>
                              <td>Naturalidade</td><td>Pa&iacute;s</td><td>Estado</td><td>Cidade</td><td>Bairro
                              </td><td>Rua</td><td>N&uacute;mero</td><td>Disciplina</td><td>S&eacute;rie</td><td>CPF</td><td>Senha</td></tr></thead>
                        ;
                    <tbody id=tbody>
                    <?php    
                        if($result){
                            //percorre os resultados via o laço foreach
                            foreach($result as $linha){
                                $data = $linha['data_nascimento'];
                                $data_formatada = implode('/', array_reverse(explode('-', $data)));
                                echo ("<tr class=pesquisa><td>".$linha['nome']."</td><td>"."$data_formatada"."</td><td>".$linha['sexo']."</td><td>".$linha['naturalidade']."</td><td>".$linha['pais'].
                                     "</td><td>".$linha['estado']."</td><td>".$linha['cidade']."</td><td>".$linha['bairro']."</td><td>".$linha['rua']."</td><td>".$linha['numero']."</td>");
                                if($linha['formacao'] == 'Portugues'){
                                    echo("<td>Portugu&ecirc;s</td>");
                                }
                                else if($linha['formacao'] == 'Matematica'){
                                    echo("<td>Matemática</td>");
                                }
                                else if($linha['formacao'] == 'Historia'){
                                    echo("<td>História</td>");
                                }
                                else if($linha['formacao'] == 'Geografia'){
                                    echo("<td>Geografia</td>");
                                }
                                else if($linha['formacao'] == 'Artes'){
                                    echo("<td>Artes</td>");
                                } 
                                else if($linha['formacao'] == 'Educacao Fisica'){
                                    echo("<td>Educa&ccedil;&atilde;o Fis&iacute;ca</td>");
                                }
                                else if($linha['formacao'] == 'Ciencias'){
                                    echo("<td>Ci&ecirc;ncias</td>");
                                }
                                else if($linha['formacao'] == 'Ingles'){
                                    echo("<td>Ingl&ecirc;s</td>");
                                }
                                else if($linha['formacao'] == 'Ensino Religioso'){
                                    echo("<td>Ensino Religioso</td>");
                                }
                                else if($linha['formacao'] == 'Portugues2'){
                                    echo("<td>Portugu&ecirc;s - Infantil</td>");
                                }
                                else if($linha['formacao'] == 'Matematica2'){
                                    echo("<td>Matem&aacute;tica - Infantil</td>");
                                }
                                else if($linha['formacao'] == 'Nat_Soci'){
                                    echo("<td>Natureza e Sociedade - Infantil</td>");
                                }
                                else{
                                    echo("<td>Gest&atilde;o</td>");
                                }                                                                          
                                echo("<td>".$linha['turma_serie']."</td>");  
                                echo"<td>".$linha['cpf']."</td><td>".$linha['senha']."</td></tr>";    
                            }
                        }
                    ?>    
                    </table></tbody></div>

                    <div id=dv-modal class=modal>
                        <div class=modal-content>
                            <div class=modal-header>
                                <h1>Informe o CPF do usu&aacute;rio que deseja excluir</h1>
                            </div>

                            <div class=modal-body>
                                <form class= cadastro-form action= excluir_usuario.php method= POST>
                                    <input type=text name=cpf placeholder= CPF autofocus>
                            </div>

                            <div class=modal-footer>
                                <button id=right type=submit class=right>Excluir</button>
                                </form>
                                <button id=left onclick=closeModal('dv-modal')>Fechar</button>
                                <div id=clear></div>
                            </div>
                        </div>
                    </div>
                    <script src=../js/funcionalidades.js></script>
    </body></html>              