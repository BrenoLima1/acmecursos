<?php

require_once('RepositorioAlunoDAO.php');
require_once('../Exception/AlunoException.php');


/**
 * Summary of AlunoDAO
 */
class AlunoDAO implements RepositorioAlunoDAO{

    private $pdo;

    /**
     * Summary of __construct
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }

     /**
  * Summary of listarAlunos
  * @throws AlunoException
  * @return array
  */
	public function listarAlunos(): array {
        try {
            $ps = $this->pdo->query('SELECT * FROM alunos');
            return $ps->fetchAll();
        } catch (\PDOException $e) {
            $this->pdo->rollBack();
            throw new AlunoException('Falha ao listar alunos: ' . $e->getMessage());
        }
	}

    /**
     * Summary of validarAlunoCPF
     * @param Aluno $aluno
     * @throws AlunoException
     * @return bool
     */
    public function validarAlunoCPF(Aluno $aluno): bool{
        try {
            $ps = $this->pdo->prepare('SELECT * FROM alunos WHERE cpf = ?');
            $ps->execute([$aluno->getCpf()]);
            return $ps->fetch(PDO::FETCH_ASSOC) ? false : true;
        } catch (\PDOException $e) {
            throw new AlunoException($e->getMessage());
        }
    }

    /**
     * Summary of validarAlunoMatricula
     * @param Aluno $aluno
     * @throws AlunoException
     * @return bool
     */
    public function validarAlunoMatricula(Aluno $aluno): bool{
        try {
            $ps = $this->pdo->prepare('SELECT * FROM alunos WHERE matricula = ?');
            $ps->execute([$aluno->getMatricula()]);
            return $ps->fetch(PDO::FETCH_ASSOC) ? false : true;
        } catch (\PDOException $e) {
            throw new AlunoException($e->getMessage());
        }
    }

 /**
  * Summary of cadastrarAluno
  * @param Aluno $aluno
  * @throws AlunoException
  * @return bool
  */
	public function cadastrarAluno(Aluno $aluno): bool {
        try {
            $this->pdo->beginTransaction();
            $ps = $this->pdo->prepare('INSERT INTO alunos(matricula, nome, cpf, telefone, email) (?,?,?,?,?)');
            $ps->execute([$aluno->getMatricula(), $aluno->getNome(), $aluno->getCpf(), $aluno->getTelefone(), $aluno->getEmail()]);
            $this->pdo->commit();
            return true;
        } catch (\PDOException $e) {
            $this->pdo->rollBack();
            throw new AlunoException('Falha ao cadastrar aluno: ' . $e->getMessage());
        }
	}


 /**
  * Summary of removerAluno
  * @param mixed $id
  * @throws AlunoException
  * @return bool
  */
	public function removerAluno($id): bool {
        try {
            $this->pdo->beginTransaction();
            $ps = $this->pdo->prepare('DELETE FROM alunos(matricula, nome, cpf, telefone, email) WHERE id = ?');
            $ps->execute([$id]);
            $this->pdo->commit();
            return true;
        } catch (\PDOException $e) {
            $this->pdo->rollBack();
            throw new AlunoException('Falha ao remover aluno: ' . $e->getMessage());
        }
	}

 /**
  * Summary of alterarAluno
  * @param Aluno $aluno
  * @param mixed $id
  * @throws AlunoException
  * @return bool
  */
	public function alterarAluno(Aluno $aluno, $id): bool {
        try {
            $this->pdo->beginTransaction();
            $ps = $this->pdo->prepare('UPDATE alunos(matricula, nome, cpf, telefone, email) SET matricula = ? , nome = ? , cpf = ? , telefone = ?
            , email = ? WHERE id = ?');
            $ps->execute([$aluno->getMatricula(), $aluno->getNome(), $aluno->getCpf(), $aluno->getTelefone(), $aluno->getEmail(), $id]);
            $this->pdo->commit();
            return true;
        } catch (\PDOException $e) {
            $this->pdo->rollBack();
            throw new AlunoException('Falha ao alterar aluno: ' . $e->getMessage());
        }
	}

}
?>
