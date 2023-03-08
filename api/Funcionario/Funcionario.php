<?php

require_once('RepositorioFuncionario.php');

/**
 * Summary of Funcionario
 */
class Funcionario implements RepositorioFuncionario{

    private $nome;

    private $cpf;

    private $email;

    public function __construct($nome, $cpf, $email)
    {
        if($this->validarCPF($cpf)){
            $this->setNome($nome);
            $this->setCpf($cpf);
            $this->setEmail($email);
        }
    }

	/**
	 * @return mixed
	 */
	public function getNome() {
		return $this->nome;
	}

	/**
	 * @param mixed $nome
	 * @return self
	 */
	public function setNome($nome): self {
		$this->nome = $nome;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCpf() {
		return $this->cpf;
	}

	/**
	 * @param mixed $cpf
	 * @return self
	 */
	public function setCpf($cpf): self {
		$this->cpf = $cpf;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * @param mixed $email
	 * @return self
	 */
	public function setEmail($email): self {
		$this->email = $email;
		return $this;
	}

    /**
     * Summary of validarCPF
     * @param mixed $cpf
     * @return bool
     */
    public function validarCPF($cpf) : bool
    {
        return (is_numeric($cpf) && mb_strlen($cpf) == 11) ? true : false;
    }
}

?>
