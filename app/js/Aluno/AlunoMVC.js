import { Aluno } from "./Aluno.js";

const API = 'http://localhost/acmecursos/';

async function buscarAlunos(){

    const resposta = await fetch(API + 'alunos',{
        method:'GET',
        headers:{
            'Content-Type':'application/json'
        }
    })
    .then(async (resposta) =>{
        if(!resposta.ok){
            alert('Erro: ' + resposta.status);
            return;
        }
    })
}

async function criarAluno(){
    const matricula = document.getElementById('matricula').value;
    const nome = document.getElementById('nome').value;
    const cpf = document.getElementById('cpf').value;
    const telefone = document.getElementById('telefone').value;
    const email = document.getElementById('email').value;
    const aluno = new Aluno(matricula, nome, cpf, telefone, email);
    return aluno;
}

async function cadastrarAluno() {
    const formData = new FormData(document.querySelector('form'));

    const resposta = await fetch(API + 'aluno', {
        method:'POST',
        body:formData
    })
    .then(async (resposta) => {
        const output = document.querySelector('output');
        if(!resposta.ok){
            output.innerText = 'Falha ao cadastrar aluno.';
            alert('Falha ao cadastrar aluno.' + '\n' + resposta.status);
        }

        if(resposta.status == 409){
            output.innerText = 'Erro: CPF já cadastrado anteriormente.';
            alert('Erro: CPF já cadastrado anteriormente.');
        }else if(resposta.status == 422){
            output.innerText = 'Erro: matrícula já existente';
            alert('Erro: matrícula já existente.');
        }
    })
}
