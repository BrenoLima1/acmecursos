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
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }

    /**
     * Summary of validarFuncionario
     * @param Funcionario $funcionario
     * @throws FuncionarioException
     * @return bool
     */
    public function validarFuncionarioCPF(Funcionario $funcionario): bool{
        try {
            $ps = $this->pdo->prepare('SELECT cpf FROM funcionarios WHERE cpf = ?');
            $ps->execute([$funcionario->getCpf()]);
            return $ps->fetch(PDO::FETCH_ASSOC) ? false : true;

        } catch (\PDOException $e) {
            throw new FuncionarioException('CPF já cadastrado: ' . $e->getMessage());
        }
    }

    /**
     * Summary of validarFuncionarioEmail
     * @param Funcionario $funcionario
     * @throws FuncionarioException
     * @return bool
     */
    public function validarFuncionarioEmail(Funcionario $funcionario): bool
    {
        try {
            $ps = $this->pdo->prepare('SELECT email FROM funcionario WHERE email = ?');
            $ps->execute([$funcionario->getEmail()]);
            return $ps->fetch(PDO::FETCH_ASSOC) ? false : true;
        } catch (\PDOException $e) {
            throw new FuncionarioException('Email já cadastrado: '  . $e->getMessage());
        }
    }

     /**
  * Summary of listarAlunos
  * @throws FuncionarioException
  * @return array
  */
	public function listarFuncionarios(): array {
        try {
            $ps = $this->pdo->query('SELECT * FROM funcionarios');
            return $ps->fetchAll();
        } catch (\PDOException $e) {
            $this->pdo->rollBack();
            throw new FuncionarioException('Falha ao listar funcionarios: ' . $e->getMessage());
        }
	}

 /**
  * Summary of cadastrarFuncionario
  * @param Funcionario $funcionario
  * @throws FuncionarioException
  * @return bool
  */
	public function cadastrarFuncionario(Funcionario $funcionario): bool {
        if($this->validarFuncionarioCPF($funcionario) && $this->validarFuncionarioEmail($funcionario)){
            try {
                $this->pdo->beginTransaction();
                $ps = $this->pdo->prepare('INSERT INTO funcionarios(nome, cpf, email, senha) (?,?,?,?)');
                $ps->execute([$funcionario->getNome(), $funcionario->getCpf(), $funcionario->getEmail(), $funcionario->getSenha()]);
                $this->pdo->commit();
                return true;
            } catch (\PDOException $e) {
                $this->pdo->rollBack();
                throw new FuncionarioException('Falha ao cadastrar funcionario: ' . $e->getMessage());
            }
        }
        return false;
	}


 /**
  * Summary of removerAluno
  * @param mixed $id
  * @throws FuncionarioException
  * @return bool
  */
	public function removerFuncionario($id): bool {
        try {
            $this->pdo->beginTransaction();
            $ps = $this->pdo->prepare('DELETE FROM funcionarios WHERE id = ?');
            $ps->execute([$id]);
            $this->pdo->commit();
            return true;
        } catch (\PDOException $e) {
            $this->pdo->rollBack();
            throw new FuncionarioException('Falha ao remover funcionario: ' . $e->getMessage());
        }
	}

 /**
  * Summary of alterarAluno
  * @param Funcionario $funcionario
  * @param mixed $id
  * @throws FuncionarioException
  * @return bool
  */
	public function alterarFuncionario(Funcionario $funcionario, $id): bool {
        try {
            $this->pdo->beginTransaction();
            $ps = $this->pdo->prepare('UPDATE funcionarios(nome, cpf, email, senha) SET nome = ? , cpf = ? ,
            , email = ?, senha = ? WHERE id = ?');
            $ps->execute([$funcionario->getNome(), $funcionario->getCpf(), $funcionario->getEmail(), $funcionario->getSenha(), $id]);
            $this->pdo->commit();
            return true;
        } catch (\PDOException $e) {
            $this->pdo->rollBack();
            throw new FuncionarioException('Falha ao alterar funcionario: ' . $e->getMessage());
        }
	}

}

?>
