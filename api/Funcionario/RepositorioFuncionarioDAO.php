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

    /**
     * Summary of validarFuncionarioEmail
     * @param Funcionario $funcionario
     * @return bool
     */
    public function validarFuncionarioEmail(Funcionario $funcionario): bool;

    /**
     * Summary of cadastrarFuncionario
     * @param Funcionario $funcionario
     * @return bool
     */
    public function cadastrarFuncionario(Funcionario $funcionario): bool;

    /**
     * Summary of removerFuncionario
     * @param mixed $id
     * @return bool
     */
    public function removerFuncionario($id): bool;

    /**
     * Summary of alterarFuncionario
     * @param Funcionario $funcionario
     * @param mixed $id
     * @return bool
     */
    public function alterarFuncionario(Funcionario $funcionario, $id): bool;
}

?>
