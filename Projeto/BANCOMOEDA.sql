CREATE DATABASE MOEDA_ESTUDANTIL; 


CREATE TABLE USUARIO (
  LOGIN int(10) NOT NULL,
  NOME varchar(60) NOT NULL,
  SENHA VARCHAR(12) NOT NULL,
  PRIMARY KEY(LOGIN)
) ENGINE=InnoDB;

CREATE TABLE ALUNO(
 CPF INT(11) NOT NULL,
 EMAIL VARCHAR(20) NOT NULL, 
 RG INT(8) NOT NULL,
 ENDERENCO VARCHAR(60) NOT NULL,
 CURSO VARCHAR(20) NOT NULL,
 MOEDAS INT(10),
 LOGIN_USUARIO int(10) NOT NULL,   
 PRIMARY KEY(CPF),/* CHAVE PRIMARIA*/
 foreign key(LOGIN_USUARIO) references USUARIO(LOGIN)/*CHAVE ESTRANGEIRA*/
 )ENGINE=InnoDB;

CREATE TABLE PROFESSOR(
 CPF INT(11) NOT NULL,
 MOEDAS INT(10), 
 DEPARTAMENTO VARCHAR(20) NOT NULL,
 LOGIN_USUARIO int(10) NOT NULL,   
 PRIMARY KEY(CPF),/* CHAVE PRIMARIA*/
 foreign key(LOGIN_USUARIO) references USUARIO(LOGIN)/*CHAVE ESTRANGEIRA*/
 )ENGINE=InnoDB;


CREATE TABLE INSTITUICAO(
 CNPJ FLOAT(14) NOT NULL,
 LOGIN_USUARIO int(10) NOT NULL, 
 CPF_ALUNO INT(11) NOT NULL,
 CPF_PROFESSOR INT(11) NOT NULL,
 PRIMARY KEY(CNPJ),/* CHAVE PRIMARIA*/
 foreign key(LOGIN_USUARIO) references USUARIO(LOGIN),/*CHAVE ESTRANGEIRA*/
 foreign key(CPF_ALUNO) references ALUNO(CPF),/*CHAVE ESTRANGEIRA*/
 foreign key(CPF_PROFESSOR) references PROFESSOR(CPF)/*CHAVE ESTRANGEIRA*/
 )ENGINE=InnoDB;

 CREATE TABLE PRODUTO(
 ID INT UNSIGNED AUTO_INCREMENT  NOT NULL,
 CUSTO_MOEDAS INT(10) NOT NULL,
 FOTO BLOB,
 NOME varchar(60) NOT NULL,
 DESCRICAO varchar(60) NOT NULL,
 CNPJ_INSTITUICAO FLOAT(14) NOT NULL,    
 PRIMARY KEY(ID),/* CHAVE PRIMARIA*/
 foreign key(CNPJ_INSTITUICAO) references INSTITUICAO(CNPJ)/*CHAVE ESTRANGEIRA*/
 )ENGINE=InnoDB;
