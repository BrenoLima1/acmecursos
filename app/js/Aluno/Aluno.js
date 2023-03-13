export class Aluno {
    constructor(matricula, nome, cpf, telefone, email) {
      this.matricula = matricula;
      this.nome = nome;
      this.cpf = cpf;
      this.telefone = telefone;
      this.email = email;
    }

    // getters e setters para as propriedades da classe
    getMatricula() {
      return this.matricula;
    }

    setMatricula(matricula) {
      this.matricula = matricula;
    }

    getNome() {
      return this.nome;
    }

    setNome(nome) {
      this.nome = nome;
    }

    getCpf() {
      return this.cpf;
    }

    setCpf(cpf) {
      this.cpf = cpf;
    }

    getTelefone() {
      return this.telefone;
    }

    setTelefone(telefone) {
      this.telefone = telefone;
    }

    getEmail() {
      return this.email;
    }

    setEmail(email) {
      this.email = email;
    }
  }
