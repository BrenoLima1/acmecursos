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

    public function validarFuncionario(Funcionario $funcionario): bool;

    public function cadastrarFuncionario(Funcionario $funcionario): bool;

    public function removerFuncionario($id): bool;

    public function alterarFuncionario(Funcionario $funcionario, $id): bool;
}

?>
