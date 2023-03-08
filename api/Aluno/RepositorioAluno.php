<?php

/**
 * Summary of RepositorioAluno
 */
interface RepositorioAluno{
    /**
     * Summary of validarMatriculaECPF
     * @param mixed $matricula
     * @param mixed $cpf
     * @return bool
     */
    public function validarMatriculaECPF($matricula, $cpf):bool;
}
?>
