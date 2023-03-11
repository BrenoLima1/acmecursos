<?php

/**
 * Summary of RepositorioFuncionarioDAO
 */
interface RepositorioFuncionarioDAO{

    /**
     * Summary of cadastroAlunos
     * @param Aluno $aluno
     * @return void
     */
    public function listarFuncionarios(): array;

    /**
     * Summary of validarFuncionarioCPF
     * @param Funcionario $funcionario
     * @return bool
     */
    public function validarFuncionarioCPF(Funcionario $funcionario): bool;

    public function validarFuncionarioEmail(Funcionario $funcionario): bool;

    public function cadastrarFuncionario(Funcionario $funcionario): bool;

    public function removerFuncionario($id): bool;

    public function alterarFuncionario(Funcionario $funcionario, $id): bool;
}

?>
