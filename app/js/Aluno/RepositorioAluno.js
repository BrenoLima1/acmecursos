import {Aluno} from './Aluno.js';

const API = "http://localhost/acmecursos/api/";

export class RepositorioAluno{

    async obterAlunos(){
        let resposta;

        await fetch(API + 'alunos', {method: 'GET', headers:{
            "Content-Type": "application/json"
        }})
        .then()
    }
}
