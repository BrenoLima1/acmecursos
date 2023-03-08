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

    public function cadastrarAluno(Aluno $aluno): bool;

    public function removerAluno($id): bool;

    public function alterarAluno(Aluno $aluno, $id): bool;
}

?>
