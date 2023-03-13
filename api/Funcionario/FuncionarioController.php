<?php

require_once('../DAO/config.php');
require_once('Funcionario.php');
require_once('FuncionarioDAO.php');

class FuncionarioController{

    private $funcionarioDAO;

    public function __construct(){
        $this->funcionarioDAO = new FuncionarioDAO(conexaoPDO());
    }

    public function listarFuncionarios(){
        try {
            return $this->funcionarioDAO->listarFuncionarios();
        } catch (\FuncionarioException $e) {
            die($e->getMessage());
        }
    }

    public function cadastrarFuncionario(Funcionario $funcionario){
        try {
            $validacaoCPF = $this->funcionarioDAO->validarFuncionarioCPF($funcionario);
            $validacaoEmail = $this->funcionarioDAO->validarFuncionarioEmail($funcionario);

            if($validacaoCPF && $validacaoEmail){
                $cadastroAluno = $this->funcionarioDAO->cadastrarFuncionario($funcionario);
                return $cadastroAluno;
            }elseif(!$validacaoCPF){
                http_response_code(409);
                return false;
            }elseif(!$validacaoEmail){
                http_response_code(422);
                return false;
            }
        } catch (\FuncionarioException $e) {
            die($e->getMessage());
        }
    }

    public function removerFuncionario($id){
        try {
            return $this->funcionarioDAO->removerFuncionario($id);
        } catch (\FuncionarioException $e) {
            die($e->getMessage());
        }
    }

    public function alterarFuncionario(Funcionario $funcionario, $id){
        try {
            return $this->alterarFuncionario($funcionario, $id);
        } catch (\FuncionarioException $e) {
            die($e->getMessage());
        }
    }
}

?>
