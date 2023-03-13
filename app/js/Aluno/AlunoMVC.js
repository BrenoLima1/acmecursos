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

async function cadastrarAluno() {
    const matricula = document.getElementById('matricula').value;
    const nome = document.getElementById('nome').value;
    const cpf = document.getElementById('cpf').value;
    const telefone = document.getElementById('telefone').value;
    const email = document.getElementById('email').value;

    const aluno = new Aluno(matricula, nome, cpf, telefone, email);
}
