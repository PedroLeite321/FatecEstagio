
CREATE TABLE aluno(
    alunoId INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50),
    curso VARCHAR(80),
    semestre VARCHAR(80),
    email VARCHAR(80),
    endereco VARCHAR(255),
    dataNascimento DATE,
    telefone VARCHAR(255),
    senha INT(255),
    periodo VARCHAR(255),
    genero VARCHAR(255)
);
CREATE TABLE empresa(
    empresaId INT PRIMARY KEY AUTO_INCREMENT,
    razaoSocial VARCHAR(255),
    nome VARCHAR(255),
    endereco VARCHAR(255),
    cnpj VARCHAR(255),
    siteEmpresa VARCHAR(255),
    ramo VARCHAR(255)
    
);
CREATE TABLE usuarioEmpresa(
    idUsuarioEmpresa INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    empresaId INT,
    FOREIGN_KEY INT (empresaId) REFERENCES empresa(empresaId),
    senha INT(16),
    email VARCHAR(255)

);
CREATE TABLE vagas(
    idVagas INT PRIMARY KEY NOT NULL,
    tituloVaga VARCHAR(70),
    descricaoVagas LONGTEXT,
    vagasStatus VARCHAR(255),
    dataVaga DATE,
    salario VARCHAR(30),
    beneficios LONGTEXT,
    horario VARCHAR(255),
    curso VARCHAR(255),
    localizacaoVaga VARCHAR(255),
    regiao VARCHAR(255)


);

CREATE TABLE alunoAplicacaoVagas(
    idVaga INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    FOREIGN_KEY INT (idVagas) REFERENCES vagas(idVagas),
    FOREIGN_KEY INT (alunoId) REFERENCES aluno(alunoId),
    dataAplicacao DATE,
    aplicacaoStatus VARCHAR(50),
    feedback LONGTEXT

    
);
CREATE TABLE admin(
    idAdmin INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR(255),
    senha VARCHAR(30),
    email VARCHAR(255),
    cargos VARCHAR(255)
);
