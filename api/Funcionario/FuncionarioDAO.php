<?php

require_once('RepositorioFuncionarioDAO.php');
require_once('../Exception/FuncionarioException.php');
/**
 * Summary of FuncionarioDAO
 */
class FuncionarioDAO implements RepositorioFuncionarioDAO{

    private $pdo;

    /**
     * Summary of __construct
     * @param mixed $pdo
     */
    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }

	/**
	 * @param Aluno $aluno
	 * @return mixed
	 */
	public function cadastrarAlunos(Aluno $aluno) {
        try {
            $this->pdo->beginTransaction();
            $ps = $this->pdo->prepare('INSERT INTO alunos(matricula, nome, cpf, telefone, email) (?,?,?,?,?)');
            $ps->execute([$aluno->getMatricula(), $aluno->getNome(), $aluno->getCpf(), $aluno->getTelefone(), $aluno->getEmail()]);
            return true;
        } catch (\PDOException $e) {
            $this->pdo->rollBack();
            throw new FuncionarioException('Falha ao cadastrar aluno: ' . $e->getMessage());
        }
	}
}

?>
