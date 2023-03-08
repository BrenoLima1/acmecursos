<?php

require_once('RepositorioAluno.php');

/**
 * Summary of Aluno
 */
class Aluno implements RepositorioAluno{

    private $matricula;

    private $nome;

    private $cpf;

    private $telefone;

    private $email;

    public function __construct($matricula, $nome, $cpf, $telefone, $email)
    {
        if($this->validarMatriculaECPF($matricula, $cpf))
        {
            $this->setMatricula($matricula);
            $this->setNome($nome);
            $this->setCpf($cpf);
            $this->setTelefone($telefone);
            $this->setEmail($email);
        }
    }

	/**
	 * @return mixed
	 */
	public function getMatricula() {
		return $this->matricula;
	}

	/**
	 * @param mixed $matricula
	 * @return self
	 */
	public function setMatricula($matricula): self {
		$this->matricula = $matricula;
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
	public function getTelefone() {
		return $this->telefone;
	}

	/**
	 * @param mixed $telefone
	 * @return self
	 */
	public function setTelefone($telefone): self {
		$this->telefone = $telefone;
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
     * Summary of validarMatriculaECPF
     * @param mixed $matricula
     * @param mixed $cpf
     * @return bool
     */
    public function validarMatriculaECPF($matricula, $cpf):bool
    {
        return (is_numeric($matricula) && mb_strlen($matricula) == 6 && is_numeric($cpf) && mb_strlen($cpf) == 11) ? true : false;
    }
}


?>
