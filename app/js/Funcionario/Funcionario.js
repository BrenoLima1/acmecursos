class Funcionario {
    constructor(nome, cpf, email) {
      this.nome = nome;
      this.cpf = cpf;
      this.email = email;
    }

    // getters e setters para as propriedades da classe
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

    getEmail() {
      return this.email;
    }

    setEmail(email) {
      this.email = email;
    }
  }
