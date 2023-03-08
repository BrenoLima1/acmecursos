<?php

/**
 * Summary of RepositorioCurso
 */
interface RepositorioCurso{
    /**
     * Summary of validarNomeENumeroDeAulas
     * @param mixed $nome
     * @param mixed $numeroDeAulas
     * @return bool
     */
    public function validarCodigoENumeroDeAulas($codigo, $numeroDeAulas):bool;
}

?>
