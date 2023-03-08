<?php

require_once('RepositorioCurso.php');
/**
 * Summary of Curso
 */
class Curso implements RepositorioCurso{

    private $codigo;

    private $nome;

    private $situacao;

    private $dataInicio;

    private $dataTermino;

    private $horarioInicio;

    private $horarioTermino;

    private $numeroDeAulas;

    public function __construct($codigo, $nome, $situacao, $dataInicio, $dataTermino, $horarioInicio, $horarioTermino, $numeroDeAulas)
    {
        if($this->validarCodigoENumeroDeAulas($codigo, $numeroDeAulas))
        {
            $this->setCodigo($codigo);
            $this->setNome($nome);
            $this->setSituacao($situacao);
            $this->setDataInicio($dataInicio);
            $this->setDataTermino($dataTermino);
            $this->setHorarioInicio($horarioInicio);
            $this->setHorarioTermino($horarioTermino);
            $this->setNumeroDeAulas($numeroDeAulas);
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
	public function getSituacao() {
		return $this->situacao;
	}

	/**
	 * @param mixed $situacao
	 * @return self
	 */
	public function setSituacao($situacao): self {
		$this->situacao = $situacao;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getDataInicio() {
		return $this->dataInicio;
	}

	/**
	 * @param mixed $dataInicio
	 * @return self
	 */
	public function setDataInicio($dataInicio): self {
		$this->dataInicio = $dataInicio;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getDataTermino() {
		return $this->dataTermino;
	}

	/**
	 * @param mixed $dataTermino
	 * @return self
	 */
	public function setDataTermino($dataTermino): self {
		$this->dataTermino = $dataTermino;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getHorarioInicio() {
		return $this->horarioInicio;
	}

	/**
	 * @param mixed $horarioInicio
	 * @return self
	 */
	public function setHorarioInicio($horarioInicio): self {
		$this->horarioInicio = $horarioInicio;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getHorarioTermino() {
		return $this->horarioTermino;
	}

	/**
	 * @param mixed $horarioTermino
	 * @return self
	 */
	public function setHorarioTermino($horarioTermino): self {
		$this->horarioTermino = $horarioTermino;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getNumeroDeAulas() {
		return $this->numeroDeAulas;
	}

	/**
	 * @param mixed $numeroDeAulas
	 * @return self
	 */
	public function setNumeroDeAulas($numeroDeAulas): self {
		$this->numeroDeAulas = $numeroDeAulas;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCodigo() {
		return $this->codigo;
	}

	/**
	 * @param mixed $codigo
	 * @return self
	 */
	public function setCodigo($codigo): self {
		$this->codigo = $codigo;
		return $this;
	}

     /**
      * Summary of validarNome
      * @param mixed $nome
      * @return bool
      */
     public function validarCodigoENumeroDeAulas($codigo, $numeroDeAulas):bool
     {
         return mb_strlen($codigo) == 5 && is_numeric($numeroDeAulas) ? true : false;
     }
}

?>
