class Curso {
    constructor(codigo, nome, situacao, dataInicio, dataTermino, horarioInicio, horarioTermino, numeroDeAulas) {
      this.codigo = codigo;
      this.nome = nome;
      this.situacao = situacao;
      this.dataInicio = dataInicio;
      this.dataTermino = dataTermino;
      this.horarioInicio = horarioInicio;
      this.horarioTermino = horarioTermino;
      this.numeroDeAulas = numeroDeAulas;
    }

    // getters e setters para as propriedades da classe
    getCodigo() {
      return this.codigo;
    }

    setCodigo(codigo) {
      this.codigo = codigo;
    }

    getNome() {
      return this.nome;
    }

    setNome(nome) {
      this.nome = nome;
    }

    getSituacao() {
      return this.situacao;
    }

    setSituacao(situacao) {
      this.situacao = situacao;
    }

    getDataInicio() {
      return this.dataInicio;
    }

    setDataInicio(dataInicio) {
      this.dataInicio = dataInicio;
    }

    getDataTermino() {
      return this.dataTermino;
    }

    setDataTermino(dataTermino) {
      this.dataTermino = dataTermino;
    }

    getHorarioInicio() {
      return this.horarioInicio;
    }

    setHorarioInicio(horarioInicio) {
      this.horarioInicio = horarioInicio;
    }

    getHorarioTermino() {
      return this.horarioTermino;
    }

    setHorarioTermino(horarioTermino) {
      this.horarioTermino = horarioTermino;
    }

    getNumeroDeAulas() {
      return this.numeroDeAulas;
    }

    setNumeroDeAulas(numeroDeAulas) {
      this.numeroDeAulas = numeroDeAulas;
    }
  }
