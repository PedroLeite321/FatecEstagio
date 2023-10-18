
CREATE TABLE aluno(
    alunoID INT PRIMARY_KEY AUTO_INCREMENT,
    ra INT(25),
    nome VARCHAR(50),
    curso VARCHAR(80),
    semestre VARCHAR(80),
    email VARCHAR(80),
    endereco VARCHAR(255),
    dataNascimento DATE,
    telefone VARCHAR(255),
    senha INT(255),
    periodo VARCHAR(255)
);
CREATE TABLE empresa(
    empresaId INT PRIMARY_KEY AUTO_INCREMENT,
    razaoSocial VARCHAR(255),
    nome VARCHAR(255),
    endereco VARCHAR(255),
    cnpj VARCHAR(255),
    siteEmpresa VARCHAR(255),
    ramo VARCHAR(255),
    
);
CREATE TABLE usuarioEmpresa(
    idUsuarioEmpresa INT PRIMARY_KEY NOT NULL AUTO_INCREMENT,
    empresaId INT,
    FOREIGN_KEY (empresaId) REFERENCES empresa(empresaId),
    senha,
    email
);
CREATE TABLE vagas(

);
CREATE TABLE alunoVagas(
    idVaga INT PRIMARY_KEY NOT NULL AUTO_INCREMENT
);
CREATE TABLE admin(

);