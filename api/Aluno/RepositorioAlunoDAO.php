<?php

/**
 * Summary of RepositorioFuncionarioDAO
 */
interface RepositorioAlunoDAO{

    /**
     * Summary of cadastroAlunos
     * @param Aluno $aluno
     * @return void
     */
    public function listarAlunos(): array;

    /**
     * Summary of validarAlunoCPF
     * @param Aluno $aluno
     * @return bool
     */
    public function validarAlunoCPF(Aluno $aluno): bool;

    /**
     * Summary of validarAlunoMatricula
     * @param Aluno $aluno
     * @return bool
     */
    public function validarAlunoMatricula(Aluno $aluno): bool;

    /**
     * Summary of cadastrarAluno
     * @param Aluno $aluno
     * @return bool
     */
    public function cadastrarAluno(Aluno $aluno): bool;

    /**
     * Summary of removerAluno
     * @param mixed $id
     * @return bool
     */
    public function removerAluno($id): bool;

    /**
     * Summary of alterarAluno
     * @param Aluno $aluno
     * @param mixed $id
     * @return bool
     */
    public function alterarAluno(Aluno $aluno, $id): bool;
}

?>
