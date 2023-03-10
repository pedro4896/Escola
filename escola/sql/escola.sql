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
			values('1 Ano','manh??','2022'),
				  ('2 Ano','manh??','2022'),
				  ('3 Ano','manh??','2022'),
                  ('4 Ano','manh??','2022'),
				  ('5 Ano','manh??','2022'),
				  ('6 Ano','manh??','2022'),
				  ('7 Ano','manh??','2022'),
				  ('Jardim 1','manh??','2022'),
				  ('Jardim 2','manh??','2022'),
				  ('Jardim 3','manh??','2022'),
                  ('Gestao','manh??','2022');
                  
insert into disciplinas (codigo,nome)
			values('GEST','Gest??o'),
				  ('1_PORT','Portugu??s'),
				  ('1_MAT','Matem??tica'),
                  ('1_HIST','Hist??ria'),
				  ('1_GEO','Geografia'),
				  ('1_ART','Artes'),
				  ('1_ED_FISI','Educa????o F??sica'),
				  ('1_CIEN','Ci??ncias'),
				  ('1_ING','Ingl??s'),
				  ('1_ENSI_RELI','Ensino Religioso'),
                  ('2_PORT','Portugu??s'),
				  ('2_MAT','Matem??tica'),
                  ('2_HIST','Hist??ria'),
				  ('2_GEO','Geografia'),
				  ('2_ART','Artes'),
				  ('2_ED_FISI','Educa????o F??sica'),
				  ('2_CIEN','Ci??ncias'),
				  ('2_ING','Ingl??s'),
				  ('2_ENSI_RELI','Ensino Religioso'),
                  ('3_PORT','Portugu??s'),
				  ('3_MAT','Matem??tica'),
                  ('3_HIST','Hist??ria'),
				  ('3_GEO','Geografia'),
				  ('3_ART','Artes'),
				  ('3_ED_FISI','Educa????o F??sica'),
				  ('3_CIEN','Ci??ncias'),
				  ('3_ING','Ingl??s'),
				  ('3_ENSI_RELI','Ensino Religioso'),
                  ('4_PORT','Portugu??s'),
				  ('4_MAT','Matem??tica'),
                  ('4_HIST','Hist??ria'),
				  ('4_GEO','Geografia'),
				  ('4_ART','Artes'),
				  ('4_ED_FISI','Educa????o F??sica'),
				  ('4_CIEN','Ci??ncias'),
				  ('4_ING','Ingl??s'),
				  ('4_ENSI_RELI','Ensino Religioso'),
                  ('5_PORT','Portugu??s'),
				  ('5_MAT','Matem??tica'),
                  ('5_HIST','Hist??ria'),
				  ('5_GEO','Geografia'),
				  ('5_ART','Artes'),
				  ('5_ED_FISI','Educa????o F??sica'),
				  ('5_CIEN','Ci??ncias'),
				  ('5_ING','Ingl??s'),
				  ('5_ENSI_RELI','Ensino Religioso'),
                  ('6_PORT','Portugu??s'),
				  ('6_MAT','Matem??tica'),
                  ('6_HIST','Hist??ria'),
				  ('6_GEO','Geografia'),
				  ('6_ART','Artes'),
				  ('6_ED_FISI','Educa????o F??sica'),
				  ('6_CIEN','Ci??ncias'),
				  ('6_ING','Ingl??s'),
				  ('6_ENSI_RELI','Ensino Religioso'),
                  ('7_PORT','Portugu??s'),
				  ('7_MAT','Matem??tica'),
                  ('7_HIST','Hist??ria'),
				  ('7_GEO','Geografia'),
				  ('7_ART','Artes'),
				  ('7_ED_FISI','Educa????o F??sica'),
				  ('7_CIEN','Ci??ncias'),
				  ('7_ING','Ingl??s'),
				  ('7_ENSI_RELI','Ensino Religioso'),
                  ('J1_PORT','Portugu??s'),
				  ('J1_MAT','Matem??tica'),
                  ('J1_NAT_SOC','Natureza e Sociedade'),
                  ('J2_PORT','Portugu??s'),
				  ('J2_MAT','Matem??tica'),
                  ('J2_NAT_SOC','Natureza e Sociedade'),
                  ('J3_PORT','Portugu??s'),
				  ('J3_MAT','Matem??tica'),
                  ('J3_NAT_SOC','Natureza e Sociedade');
                
insert into usuario(cpf, senha, nome, sexo, data_nascimento, naturalidade, pais, estado, cidade, bairro, rua, numero)
		values('00000000000','000000000000','Administrador','Indefinido','2022-12-11','IOT','DEV','OPS','STL','PHP','HTML','314');
insert into docente(cpf_usuario,formacao)
			values('00000000000','Gestao');

insert into leciona(cpf_usuario, turma_serie)
			values('00000000000','Gestao');

insert into ensina(cpf_usuario,codigo_disciplinas)
			values('00000000000','GEST');