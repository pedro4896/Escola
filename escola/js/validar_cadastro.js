function validarGestao(){
    var gestao = document.getElementById("gestao").checked;

    if(gestao){
        return true;
    }
    else{
        return false;
    }
}

function validarPortugues(){
    var portugues = document.getElementById("portugues").checked;

    if(portugues){
        return true;
    }
    else{
        return false;
    }
}

function validarMatematica(){
    var matematica = document.getElementById("matematica").checked;

    if(matematica){
        return true;
    }
    else{
        return false;
    }
}

function validarHistoria(){
    var historia = document.getElementById("historia").checked;

    if(historia){
        return true;
    }
    else{
        return false;
    }
}

function validarGeografia(){
    var geografia = document.getElementById("geografia").checked;

    if(geografia){
        return true;
    }
    else{
        return false;
    }
}

function validarArtes(){
    var artes = document.getElementById("artes").checked;

    if(artes){
        return true;
    }
    else{
        return false;
    }
}

function validar_edFisica(){
    var edFisica = document.getElementById("edFisica").checked;

    if(edFisica){
        return true;
    }
    else{
        return false;
    }
}

function validarCiencias(){
    var ciencias = document.getElementById("ciencias").checked;

    if(ciencias){
        return true;
    }
    else{
        return false;
    }
}

function validarIngles(){
    var ingles = document.getElementById("ingles").checked;

    if(ingles){
        return true;
    }
    else{
        return false;
    }
}

function validar_enReligioso(){
    var enReligioso = document.getElementById("enReligioso").checked;

    if(enReligioso){
        return true;
    }
    else{
        return false;
    }
}

function validar_portugues2(){
    var portugues2 = document.getElementById("portugues2").checked;

    if(portugues2){
        return true;
    }
    else{
        return false;
    }
}

function validar_matematica2(){
    var matematica2 = document.getElementById("matematica2").checked;

    if(matematica2){
        return true;
    }
    else{
        return false;
    }
}

function validar_nat_soci(){
    var nat_soci = document.getElementById("nat_soci").checked;

    if(nat_soci){
        return true;
    }
    else{
        return false;
    }
}


function validarDisciplinas(){
    if(validarGestao() || validarPortugues() || validarMatematica() || validarHistoria() || validarGeografia()
    || validarArtes() || validar_edFisica() || validarCiencias() || validarIngles() || validar_enReligioso() || 
    validar_matematica2() || validar_portugues2() || validar_nat_soci()){
        return true;
    }
    else{
        return false;
    }
}

function validarGestao_Series(){
    var gestao_s = document.getElementById("gestao_s").checked;

    if(gestao_s){
        return true;
    }
    else{
        return false;
    }
}

function validarJardim_1(){
    var jardim_1 = document.getElementById("jardim_1").checked;

    if(jardim_1){
        return true;
    }
    else{
        return false;
    }
}

function validarJardim_2(){
    var jardim_2 = document.getElementById("jardim_2").checked;

    if(jardim_2){
        return true;
    }
    else{
        return false;
    }
}

function validarJardim_3(){
    var jardim_3 = document.getElementById("jardim_3").checked;

    if(jardim_3){
        return true;
    }
    else{
        return false;
    }
}

function validarAno_1(){
    var Ano_1 = document.getElementById("1_ano").checked;

    if(Ano_1){
        return true;
    }
    else{
        return false;
    }
}

function validarAno_2(){
    var Ano_2 = document.getElementById("2_ano").checked;

    if(Ano_2){
        return true;
    }
    else{
        return false;
    }
}

function validarAno_3(){
    var Ano_3 = document.getElementById("3_ano").checked;

    if(Ano_3){
        return true;
    }
    else{
        return false;
    }
}

function validarAno_4(){
    var Ano_4 = document.getElementById("4_ano").checked;

    if(Ano_4){
        return true;
    }
    else{
        return false;
    }
}

function validarAno_5(){
    var Ano_5 = document.getElementById("5_ano").checked;

    if(Ano_5){
        return true;
    }
    else{
        return false;
    }
}

function validarAno_6(){
    var Ano_6 = document.getElementById("6_ano").checked;

    if(Ano_6){
        return true;
    }
    else{
        return false;
    }
}

function validarAno_7(){
    var Ano_7 = document.getElementById("7_ano").checked;

    if(Ano_7){
        return true;
    }
    else{
        return false;
    }
}

function validarSeries(){
    if(validarGestao_Series() || validarJardim_1() || validarJardim_2() || validarJardim_3() || validarAno_1()
    || validarAno_2() || validarAno_3() || validarAno_4() || validarAno_5() || validarAno_6() || validarAno_7()){
        return true;
    }
    else{
        return false;
    }
}

function validarTudo(){
    if(validarDisciplinas() && validarSeries()){
        return true;
    }
    else{
        alert("Campos em branco");
        return false;
    }
}