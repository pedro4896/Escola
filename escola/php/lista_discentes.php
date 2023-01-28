<?php
    include('verifica_login.php');
    include('verifica_adm.php');
    include('conexaoBd.php');
    $result = $banco->query("SELECT * FROM discentes INNER JOIN nome_dos_pais ON discentes.matricula = nome_dos_pais.matricula_discente
                             INNER JOIN telefones ON discentes.matricula = telefones.matricula_discente ORDER BY discentes.matricula ASC;");
?>
        <!DOCTYPE html>
            <html>
                <head>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width", initial-scale="1">
                    <title>Lista de Discentes</title>
                    <link rel="stylesheet" type="text/css" href="../css/lista_usuario.css">
                </head>
                <body>
 
                    <a href= "logout.php" id="encerrar"><img src="../imagens/encerrar.png" alt= "Encerrar Sessão"/><br>Encerrar<br>Sess&atilde;o</a>
                    <div id="divBusca">
                        <img src="../imagens/lupa1.png" alt= "Pesquisar"/>
                        <input id="txtBusca" class="searchbar" type=text placeholder="Pesquisar...">
                    </div>

                    <div id="title">
                        <button onclick=cadastroDiscente()><img src=../imagens/positivo-green.png class= rotacao alt= Adicionar Usuario/> <span>Novo Discente</span></button>
                        <button onclick=atualizarDiscente()><img src=../imagens/lapis-yellow.png class= terremoto alt= Editar Usuario/> <span>Editar Discente</span></button>
                        <button onclick=openModal('dv-modal')><img src=../imagens/lixeira3-red.gif alt= Excluir Usuario/> <span>Excluir Discente</span></button>
                    </div>

                    <div><thead><table>
                            <th colspan=17>Lista de Discentes cadastrados</th>
                            <tr id=titulo><td>Matr&iacute;cula</td><td>Nome</td><td>Data de Nascimento</td><td>Sexo</td>
                                <td>Naturalidade</td><td>Pa&iacute;s</td><td>Estado</td><td>Cidade</td><td>Bairro
                                </td><td>Rua</td><td>N&uacute;mero</td><td>Nome do Pai</td><td>Nome da M&atilde;e</td><td>Telefone do Pai</td>
                                <td>Telefone da M&atilde;e</td><td>S&eacute;rie</td><td>Situa&ccedil;&atilde;o</td></tr>
                        </thead>
                    <tbody id=tbody>
                    <?php    
                        if($result){
                            //percorre os resultados via o laço foreach
                            foreach($result as $linha){
                                $data = $linha['data_nascimento'];
                                $data_formatada = implode('/', array_reverse(explode('-', $data)));
                                echo ("<tr class=pesquisa>"."<td>".$linha['matricula']."</td><td>".$linha['nome']."</td><td>"."$data_formatada"."</td><td>".$linha['sexo']."</td><td>".$linha['naturalidade']."</td><td>".$linha['pais'].
                                     "</td><td>".$linha['estado']."</td><td>".$linha['cidade']."</td><td>".$linha['bairro']."</td><td>".$linha['rua']."</td><td>".$linha['numero']."</td>");                                    
                                echo("<td>".$linha['nome_pai']."</td><td>".$linha['nome_mae']."</td>"."<td>".$linha['telefonePai']."</td>");  
                                echo"<td>".$linha['telefoneMae']."</td><td>".$linha['turma_serie']."</td>";
                                if($linha['situacao'] == 'Indeferido'){
                                    echo("<td bgcolor=#CF0E0E>".$linha['situacao']."</td></tr>");
                                }else{
                                    echo("<td bgcolor=green>".$linha['situacao']."</td></tr>");
                                }    
                            }
                        }
                    ?>    
                    </table></tbody></div>

                    <div id=dv-modal class=modal>
                        <div class=modal-content>
                            <div class=modal-header>
                                <h1>Informe a matr&iacute;cula do discente que deseja excluir</h1>
                            </div>

                            <div class=modal-body>
                                <form class= cadastro-form action= excluir_discente.php method= POST>
                                    <input type=text name=matricula placeholder= CPF autofocus>
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