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
    public function cadastrarFuncionario(Funcionario $funcionario): bool;

    public function removerFuncionario($id): bool;

    public function listarFuncionarios(): array;

    public function alterarAluno(Funcionario $funcionario, $id): bool;
}

?>
