// seleciona um elemento dentro do documento html pelo id
//e altera seu conteudo
document.getElementById("exibir").innerHTML = "Ola mundo"
// seleciona e altera uma configuração de estilo (css)
document.getElementById("exibir").style.color = "red"
// seleciona e salva o elemento do DOM variavel
let divExibir = document.getElementById("exibir")
// utilizo a variavel para fazer as modificações no elemento
divExibir.style.backgroundcolor = "green"

// seleciona o elemento com id bemvindo e salva na variavel bemVindo
let bemVindo = document.getElementById("bemvindo")
// exibe um prompt perguntando o nome e salva o valor na variavel nome
let nome = window.prompt("qual seu nome?")
// modifica o elemento bemvindo para seu conteudo apresentar a frase
//"ola, valoe_variavel_nome"
bemVindo.innerHTML = `Olá, ${nome}`
let paragrafos = document.getElementsByTagName('P')
paragrafos[0].innerHTML = "eu sou o 1 paragrafo"
paragrafos[1].innerHTML = "eu sou o 2 paragrafo"
paragrafos[2].innerHTML = "eu sou o 3 paragrafo"

let novo = document.createElement('div')
novo.innerHTML = "eu sou o novo elemento"
document.body.appendChild(novo)

divExibir.removeChild(divExibir.firstChild)

function trocaCor(){
    document.getElementById("hover").stylebackgroundColor = "red"
}

function voltaCor(){
    document.getElementById("hover").style.
    backgroundColor = "blueviolet"
}

let btnClick = document.getElementById("btnClick")
btnClick.addEventListener("click", ()=>{
    window.alert("você clicou")
})
document.getElementById("imgjujuba").src="princesa-jujuba.webp"


let inptNome = document.getElementById("nome")
inputNome.addEventListener("input", ()=>{
    if(inptNome.ariaValueMax.match(/\d/) || inptNome.ariaValueMax.match(/\w/))
{
    inptNome.style.backgroundColor = "red"
} else if (inptNome.value=""){
    inptNome.style.background = "initial"

}
else {
    inptNome.style.backgroundColor = "green"
}
let form1 = document.getElementById("form1")
form1.addEventListener("submit", ()=>{
    if(inptNome.value == "") {
        window.alert("Campo obrigatório vazio")
        event.prerventDefault()
    }
        
})