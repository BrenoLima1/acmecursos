<?php

require_once('../DAO/config.php');
require_once('Aluno.php');
require_once('AlunoDAO.php');

class AlunoController{

    private $alunoDAO;

    public function __construct(){
        $this->alunoDAO = new AlunoDAO(conexaoPDO());
    }

    public function listarAlunos(){
        try {
            return $this->alunoDAO->listarAlunos();
        } catch (\AlunoException $e) {
            die($e->getMessage());
        }
    }

    public function cadastrarAluno(Aluno $aluno){
        try {
            $validacaoCPF = $this->alunoDAO->validarAlunoCPF($aluno);
            $validacaoMatricula = $this->alunoDAO->validarAlunoMatricula($aluno);

            if($validacaoCPF && $validacaoMatricula){
                $cadastroAluno = $this->alunoDAO->cadastrarAluno($aluno);
                return $cadastroAluno;
            }elseif(!$validacaoCPF){
                http_response_code(409);
                return false;
            }elseif(!$validacaoMatricula){
                http_response_code(422);
                return false;
            }
        } catch (\AlunoException $e) {
            die($e->getMessage());
        }
    }

    public function removerAluno($id){
        try {
            return $this->alunoDAO->removerAluno($id);
        } catch (\AlunoException $e) {
            die($e->getMessage());
        }
    }

    public function alterarAluno(ALuno $aluno, $id){
        try {
            return $this->alterarAluno($aluno, $id);
        } catch (\AlunoException $e) {
            die($e->getMessage());
        }
    }
}

?>
