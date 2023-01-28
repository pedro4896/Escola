CREATE DATABASE escola;

CREATE TABLE usuario
(
    cpf VARCHAR(11) NOT NULL,
    senha VARCHAR(12) NOT NULL,
    nome VARCHAR(80) NOT NULL,
    sexo VARCHAR(10) NOT NULL,
    data_nascimento date NOT NULL,
    naturalidade VARCHAR(20) NOT NULL,
    pais VARCHAR(15) NOT NULL,
    estado VARCHAR(15) NOT NULL,
    cidade VARCHAR(15) NOT NULL,
    bairro VARCHAR(15) NOT NULL,
    rua VARCHAR(30) NOT NULL,
    numero VARCHAR(5) NOT NULL,
    PRIMARY KEY (cpf)
);

CREATE TABLE docente
(
    formacao VARCHAR(80) NOT NULL,
    cpf_usuario VARCHAR(11) NOT NULL,
    FOREIGN KEY (cpf_usuario) REFERENCES usuario (cpf) ON DELETE CASCADE,
    PRIMARY KEY (cpf_usuario)
);

CREATE TABLE secretaria
(
    cpf_usuario VARCHAR(11) NOT NULL,
    FOREIGN KEY (cpf_usuario) REFERENCES usuario (cpf) ON DELETE CASCADE,
    PRIMARY KEY (cpf_usuario)
);

CREATE TABLE disciplinas
(
    codigo VARCHAR(30) NOT NULL,
    nome VARCHAR(30) NOT NULL,
    PRIMARY KEY (codigo)
);

CREATE TABLE serie
(
    turma VARCHAR(50) NOT NULL,
    turno VARCHAR(10) NOT NULL,
    Ano_escolar YEAR NOT NULL,
    PRIMARY KEY (turma)
);

CREATE TABLE discentes 
(
    matricula BIGINT AUTO_INCREMENT,
    nome VARCHAR(80) NOT NULL,
    sexo VARCHAR(10) NOT NULL,
    data_nascimento VARCHAR(11) NOT NULL,
    situacao VARCHAR(15) NOT NULL,
    naturalidade VARCHAR(20) NOT NULL,
    pais VARCHAR(15) NOT NULL,
    estado VARCHAR(15) NOT NULL,
    cidade VARCHAR(15) NOT NULL,
    bairro VARCHAR(15) NOT NULL,
    rua VARCHAR(30) NOT NULL,
    numero VARCHAR(5) NOT NULL,
    turma_serie VARCHAR(50) NOT NULL,
    FOREIGN KEY (turma_serie) REFERENCES serie (turma) ON DELETE CASCADE,
    PRIMARY KEY (matricula)
);

CREATE TABLE nome_dos_pais
(
    nome_pai VARCHAR(50) NOT NULL,
    nome_mae VARCHAR(50) NOT NULL,
    matricula_discente BIGINT AUTO_INCREMENT,
    FOREIGN KEY (matricula_discente) REFERENCES discentes (matricula) ON DELETE CASCADE,
    PRIMARY KEY (matricula_discente)
);

CREATE TABLE telefones
(
    telefonePai BIGINT NOT NULL,
    telefoneMae BIGINT NOT NULL,
    matricula_discente BIGINT AUTO_INCREMENT,
    FOREIGN KEY (matricula_discente) REFERENCES discentes (matricula) ON DELETE CASCADE,
    PRIMARY KEY (matricula_discente)
);

CREATE TABLE frequencia(
	data_frequencia DATE NOT NULL,
	faltas SMALLINT NOT NULL,
    presenca SMALLINT NOT NULL,
    justificativa LONGTEXT NOT NULL,
    codigo_disciplinas VARCHAR(30) NOT NULL,
    matricula_discente BIGINT AUTO_INCREMENT,
    cpf_usuario VARCHAR(11) NOT NULL,
	turma_serie VARCHAR(50) NOT NULL,
    FOREIGN KEY (turma_serie) REFERENCES serie (turma) ON DELETE CASCADE,
    FOREIGN KEY (cpf_usuario) REFERENCES usuario (cpf) ON DELETE CASCADE,
    FOREIGN KEY (codigo_disciplinas) REFERENCES disciplinas (codigo) ON DELETE CASCADE,
    FOREIGN KEY (matricula_discente) REFERENCES discentes (matricula) ON DELETE CASCADE
);

CREATE TABLE aula(
	data_aula DATE NOT NULL,
    pauta LONGTEXT NOT NULL,
    codigo_disciplinas VARCHAR(30) NOT NULL,
    cpf_usuario VARCHAR(11) NOT NULL,
	turma_serie VARCHAR(50) NOT NULL,
    FOREIGN KEY (turma_serie) REFERENCES serie (turma) ON DELETE CASCADE,
    FOREIGN KEY (cpf_usuario) REFERENCES usuario (cpf) ON DELETE CASCADE,
    FOREIGN KEY (codigo_disciplinas) REFERENCES disciplinas (codigo) ON DELETE CASCADE
);

CREATE TABLE un1(
	nota_1 REAL NULL,
    nota_2 REAL NULL,
    nota_3 REAL NULL,
    media REAL NULL,
    avaliacao LONGTEXT NULL,
    ano YEAR NOT NULL,
	codigo_disciplinas VARCHAR(10) NOT NULL,
    matricula_discente BIGINT AUTO_INCREMENT,
    cpf_usuario VARCHAR(11) NOT NULL,
	turma_serie VARCHAR(50) NOT NULL,
    FOREIGN KEY (turma_serie) REFERENCES serie (turma) ON DELETE CASCADE,
    FOREIGN KEY (cpf_usuario) REFERENCES usuario (cpf) ON DELETE CASCADE,
    FOREIGN KEY (codigo_disciplinas) REFERENCES disciplinas (codigo) ON DELETE CASCADE,
    FOREIGN KEY (matricula_discente) REFERENCES discentes (matricula) ON DELETE CASCADE,
    PRIMARY KEY (matricula_discente,codigo_disciplinas,cpf_usuario,turma_serie)
);

CREATE TABLE un2(
	nota_1 REAL NULL,
    nota_2 REAL NULL,
    nota_3 REAL NULL,
    media REAL NULL,
    avaliacao LONGTEXT NULL,
    ano YEAR NOT NULL,
	codigo_disciplinas VARCHAR(10) NOT NULL,
    matricula_discente BIGINT AUTO_INCREMENT,
    cpf_usuario VARCHAR(11) NOT NULL,
	turma_serie VARCHAR(50) NOT NULL,
    FOREIGN KEY (turma_serie) REFERENCES serie (turma) ON DELETE CASCADE,
    FOREIGN KEY (cpf_usuario) REFERENCES usuario (cpf) ON DELETE CASCADE,
    FOREIGN KEY (codigo_disciplinas) REFERENCES disciplinas (codigo) ON DELETE CASCADE,
    FOREIGN KEY (matricula_discente) REFERENCES discentes (matricula) ON DELETE CASCADE,
    PRIMARY KEY (matricula_discente,codigo_disciplinas,cpf_usuario,turma_serie)
);

CREATE TABLE un3(
	nota_1 REAL NULL,
    nota_2 REAL NULL,
    nota_3 REAL NULL,
    media REAL NULL,
    avaliacao LONGTEXT NULL,
    ano YEAR NOT NULL,
	codigo_disciplinas VARCHAR(10) NOT NULL,
    matricula_discente BIGINT AUTO_INCREMENT,
    cpf_usuario VARCHAR(11) NOT NULL,
	turma_serie VARCHAR(50) NOT NULL,
    FOREIGN KEY (turma_serie) REFERENCES serie (turma) ON DELETE CASCADE,
    FOREIGN KEY (cpf_usuario) REFERENCES usuario (cpf) ON DELETE CASCADE,
    FOREIGN KEY (codigo_disciplinas) REFERENCES disciplinas (codigo) ON DELETE CASCADE,
    FOREIGN KEY (matricula_discente) REFERENCES discentes (matricula) ON DELETE CASCADE,
    PRIMARY KEY (matricula_discente,codigo_disciplinas,cpf_usuario,turma_serie)
);

CREATE TABLE un4(
	nota_1 REAL NULL,
    nota_2 REAL NULL,
    nota_3 REAL NULL,
    media REAL NULL,
    avaliacao LONGTEXT NULL,
    ano YEAR NOT NULL,
	codigo_disciplinas VARCHAR(10) NOT NULL,
    matricula_discente BIGINT AUTO_INCREMENT,
    cpf_usuario VARCHAR(11) NOT NULL,
	turma_serie VARCHAR(50) NOT NULL,
    FOREIGN KEY (turma_serie) REFERENCES serie (turma) ON DELETE CASCADE,
    FOREIGN KEY (cpf_usuario) REFERENCES usuario (cpf) ON DELETE CASCADE,
    FOREIGN KEY (codigo_disciplinas) REFERENCES disciplinas (codigo) ON DELETE CASCADE,
    FOREIGN KEY (matricula_discente) REFERENCES discentes (matricula) ON DELETE CASCADE,
    PRIMARY KEY (matricula_discente,codigo_disciplinas,cpf_usuario,turma_serie)
);

CREATE TABLE leciona
(
    cpf_usuario VARCHAR(11) NOT NULL,
    turma_serie VARCHAR(50) NOT NULL,
    FOREIGN KEY (turma_serie) REFERENCES serie (turma) ON DELETE CASCADE,
    FOREIGN KEY (cpf_usuario) REFERENCES usuario (cpf) ON DELETE CASCADE,
    PRIMARY KEY (turma_serie,cpf_usuario)
);

CREATE TABLE ensina
(
    cpf_usuario VARCHAR(11) NOT NULL,
    codigo_disciplinas VARCHAR(30) NOT NULL,
    FOREIGN KEY (codigo_disciplinas) REFERENCES disciplinas (codigo) ON DELETE CASCADE,
    FOREIGN KEY (cpf_usuario) REFERENCES usuario (cpf) ON DELETE CASCADE,
    PRIMARY KEY (cpf_usuario,codigo_disciplinas)
);

insert into serie (turma,turno,Ano_escolar)
			values('1 Ano','manhã','2022'),
				  ('2 Ano','manhã','2022'),
				  ('3 Ano','manhã','2022'),
                  ('4 Ano','manhã','2022'),
				  ('5 Ano','manhã','2022'),
				  ('6 Ano','manhã','2022'),
				  ('7 Ano','manhã','2022'),
				  ('Jardim 1','manhã','2022'),
				  ('Jardim 2','manhã','2022'),
				  ('Jardim 3','manhã','2022'),
                  ('Gestao','manhã','2022');
                  
insert into disciplinas (codigo,nome)
			values('GEST','Gestão'),
				  ('1_PORT','Português'),
				  ('1_MAT','Matemática'),
                  ('1_HIST','História'),
				  ('1_GEO','Geografia'),
				  ('1_ART','Artes'),
				  ('1_ED_FISI','Educação Física'),
				  ('1_CIEN','Ciências'),
				  ('1_ING','Inglês'),
				  ('1_ENSI_RELI','Ensino Religioso'),
                  ('2_PORT','Português'),
				  ('2_MAT','Matemática'),
                  ('2_HIST','História'),
				  ('2_GEO','Geografia'),
				  ('2_ART','Artes'),
				  ('2_ED_FISI','Educação Física'),
				  ('2_CIEN','Ciências'),
				  ('2_ING','Inglês'),
				  ('2_ENSI_RELI','Ensino Religioso'),
                  ('3_PORT','Português'),
				  ('3_MAT','Matemática'),
                  ('3_HIST','História'),
				  ('3_GEO','Geografia'),
				  ('3_ART','Artes'),
				  ('3_ED_FISI','Educação Física'),
				  ('3_CIEN','Ciências'),
				  ('3_ING','Inglês'),
				  ('3_ENSI_RELI','Ensino Religioso'),
                  ('4_PORT','Português'),
				  ('4_MAT','Matemática'),
                  ('4_HIST','História'),
				  ('4_GEO','Geografia'),
				  ('4_ART','Artes'),
				  ('4_ED_FISI','Educação Física'),
				  ('4_CIEN','Ciências'),
				  ('4_ING','Inglês'),
				  ('4_ENSI_RELI','Ensino Religioso'),
                  ('5_PORT','Português'),
				  ('5_MAT','Matemática'),
                  ('5_HIST','História'),
				  ('5_GEO','Geografia'),
				  ('5_ART','Artes'),
				  ('5_ED_FISI','Educação Física'),
				  ('5_CIEN','Ciências'),
				  ('5_ING','Inglês'),
				  ('5_ENSI_RELI','Ensino Religioso'),
                  ('6_PORT','Português'),
				  ('6_MAT','Matemática'),
                  ('6_HIST','História'),
				  ('6_GEO','Geografia'),
				  ('6_ART','Artes'),
				  ('6_ED_FISI','Educação Física'),
				  ('6_CIEN','Ciências'),
				  ('6_ING','Inglês'),
				  ('6_ENSI_RELI','Ensino Religioso'),
                  ('7_PORT','Português'),
				  ('7_MAT','Matemática'),
                  ('7_HIST','História'),
				  ('7_GEO','Geografia'),
				  ('7_ART','Artes'),
				  ('7_ED_FISI','Educação Física'),
				  ('7_CIEN','Ciências'),
				  ('7_ING','Inglês'),
				  ('7_ENSI_RELI','Ensino Religioso'),
                  ('J1_PORT','Português'),
				  ('J1_MAT','Matemática'),
                  ('J1_NAT_SOC','Natureza e Sociedade'),
                  ('J2_PORT','Português'),
				  ('J2_MAT','Matemática'),
                  ('J2_NAT_SOC','Natureza e Sociedade'),
                  ('J3_PORT','Português'),
				  ('J3_MAT','Matemática'),
                  ('J3_NAT_SOC','Natureza e Sociedade');
                
insert into usuario(cpf, senha, nome, sexo, data_nascimento, naturalidade, pais, estado, cidade, bairro, rua, numero)
		values('00000000000','000000000000','Administrador','Indefinido','2022-12-11','IOT','DEV','OPS','STL','PHP','HTML','314');
insert into docente(cpf_usuario,formacao)
			values('00000000000','Gestao');

insert into leciona(cpf_usuario, turma_serie)
			values('00000000000','Gestao');

insert into ensina(cpf_usuario,codigo_disciplinas)
			values('00000000000','GEST');