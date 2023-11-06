//Script de Pesquisa

//armazena na variavel tbody, os elementos que estão dentro da tag tbody,ou seja, os meus dados
var tbody = document.getElementById("tbody"); 

//Acesso o elemento de busca (txtBusca) 
//crio um evento listener para que cada vez que o usuario prescionar uma tecla do teclado e soltar (evento "keyup")
//executar essa funcao
document.getElementById("txtBusca").addEventListener("keyup",function () {

    //Amazeno na variavel "busca" oque foi digitado no meu elemento ("txtBusca")
    //em seguida transformo em letras minusculas para remover o case-sensitive
    var busca = document.getElementById("txtBusca").value.toLowerCase();

    //tbody.childNodes retorna todos os nodes do elemento tbody(oque tem dentro dele (tag tr)) e armazena em um array
    //tbody.childNodes.length retorna o tamanho do array que armazena os dados
    for(var i = 0; i < tbody.childNodes.length; i++){ //acessa as linhas

       //variavel que controla se achou ou nao oque foi pesquisado 
       var achou = false;

       //acessa o elemento tbody na posicao i = tr[i]
       var tr = tbody.childNodes[i];

       //Acessa o elemento tr[i] e armazena todos os seus filhos (td)
       var td = tr.childNodes;

       //td.lenght retorna o tamanho do array que esta armazenando os elementos td
       for(var j = 0; j < td.length; j++){ //acessa as colunas

            //armazena o valor que esta no td[j], acessa o seu filho na posicao[0] 
            //e armazena o valor da propriedade nodeValue (texto que queremos) em letra minuscula
            var valor = td[j].childNodes[0].nodeValue.toLowerCase(); 

            //o indexOf procura uma ocorrencia se ele encontrar retorna >= 0 , se não retorna -1
            //a ocorrencia seria o valor de busca, a cada lopp ele ira verificar se achou ou não a string de pesquisa
            if(valor.indexOf(busca) >= 0){
                achou = true;
            }

            //Se a pesquisa teve resultado, a exibicao da tr encontrada sera "table-row" (padrão para exibir tabela)
            if(achou){
                tr.style.display = "table-row";
            }
            //Se a pesquisa não teve resultado, a exibicao da tr encontrada sera "none" nada irá mudar
            else{
                tr.style.display = "none";
            }
        }
    }
})

//Script Janela Modal

//funcao para abrir a janela modal
//modalName recebe o nome informado na declaracao da funcao no html
function openModal(modalName){ 

    //modal armazena oque esta no id de nome modalName
    let modal = document.getElementById(modalName);

    //verificar se o modal nao esta nulo ou indefinido
    if(typeof modal == 'undefined' || modal === null)
        return;

        //seta o display do id que estou utilizando via css como block
        modal.style.display = 'Block';

        //seta o overflow do body da pagina como hidden (apaga a barra de scroll)
        document.body.style.overflow = 'hidden';

}

//funcao para abrir a janela modal
//modalName recebe o nome informado na declaracao da funcao no html
function closeModal(modalName){
    //modal armazena oque esta no id de nome modalName
    let modal = document.getElementById(modalName);

     //verificar se o modal nao esta nulo ou indefinido
    if(typeof modal == 'undefined' || modal === null)
        return;

        //seta o display do id que estou utilizando via css como none
        modal.style.display = 'none';

        //seta o overflow do body da pagina como auto (aparece a barra de scroll)
        document.body.style.overflow = 'auto';
}

//Script links

//redireciona para a pagina do caminho informado
function cadastro(){
    window.location.href="../php/cadastro_usuario_Forms.php"; 
}

function atualizar(){
    window.location.href="../php/atualizar_usuario_Forms.php"; 
}

function cadastroDiscente(){
    window.location.href="../php/cadastro_discente_Forms.php"; 
}

function atualizarDiscente(){
    window.location.href="../php/atualizar_discente_Forms.php"; 
}