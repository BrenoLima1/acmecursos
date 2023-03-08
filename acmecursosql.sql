use acmecursos;

create table funcionarios(id int not null auto_increment primary key,
						  nome varchar(255) not null,
                          cpf int(11) not null,
                          email varchar(255) not null,
                          senha varchar(255) not null)engine=InnoDB;


create table alunos(id int not null auto_increment primary key,
				matricula int(6) not null,
                nome varchar(255) not null,
                cpf int(11) not null,
                telefone int(15) not null,
                email varchar(255) not null)engine=InnoDB;

create table cursos(id int not null auto_increment primary key,
					codigo varchar(5) not null,
                    nome varchar(100) not null,
                    situacao varchar(12) not null,
                    data_inicio date not null,
                    data_termino date not null,
                    horario_inicio time not null,
                    horario_termino time not null,
                    quantidade_aulas int not null,
                    id_funcionario int not null,
                    constraint fk_curso_id_funcionario foreign key (id_funcionario) references funcionarios(id)
                    )engine=InnoDB;
