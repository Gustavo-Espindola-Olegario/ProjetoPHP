var trocaItemListaCodigo = document.querySelector("#trocaItemListaCodigo");
trocaItemListaCodigo.style.color = "red";
var promo1 = 10;
var promo2 = 10;
const btn = document.querySelector("#btn");
trocaItemListaCodigo.innerHTML = "Código Desativado";    
//alert("Olá Mundo");
//document.write("<h1>Usando document.write");
function trocaCodigo(){
    var subtitulo = document.querySelector(".subtitulo");
    console.log(subtitulo);

    subtitulo.textContent = "Os códigos ativos do Dead By Daylight ";
}

function teste(){
    if(promo1 == promo2){
        console.log("Promoção 1 e 2 tem preços iguais");
    }else{
        console.log("Promoção 1 e 2 tem preços diferentes");
    }

}

function digaOla(){
    console.log("Olá mundo!");
}

btn.addEventListener("click", digaOla);

trocaCodigo();
teste ();