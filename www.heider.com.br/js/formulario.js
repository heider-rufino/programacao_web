
var enviar = document.getElementById("enviar")
enviar.setAttribute('onclick','exibirDadosDigitados()')

function exibirDadosDigitados(){

var nome = document.getElementById("nome").value22              
var email = document.getElementById("email").value
var telefone = document.getElementById("telefone").value
var mensagem = document.getElementById("mensagem").value

alert(
    `
    - nome: ${nome} 
    - email: ${email} 
    - Telefone: ${telefone} 
    - mensagem ${mensagem}
    `
)
}