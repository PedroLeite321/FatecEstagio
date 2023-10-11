//create database

    CREATE DATABASE programaestagio;

    CREATE TABLE empresa    {
        empresaID INT AUTO_INCREMENT PRIMARY KEY,
        nomeEmpresa VARCHAR(255),
        enderecoRua INT(255),
        cnpj INT(14),
        email VARCHAR(255),
    };
    CREATE TABLE alunos {
        alunoID INT AUTO_INCREMENT PRIMARY KEY,
        nomAluno VARCHAR(255),
        curso VARCHAR(255),
        periodo VARCHAR(255),
        enderecoRua VARCHAR(255),
        semestre VARCHAR(255),
    };
    CREATE TABLE admin   {
        idAdmin INT AUTO_INCREMENT PRIMARY KEY,
        fazendoEstagioNMatriculado INT(255),
        fazendoEstagioMatriculado INT(255),
    };
    CREATE TABLE vagas  {
        idVagas INT AUTO_INCREMENT PRIMARY KEY,
        descricaoVagas VARCHAR(255),
        cursoVoltado VARCHAR(255),
        dataPublicao VARCHAR(255),

    };
    CREATE TABLE cadastroAluno  {
        idCadastroAluno INT AUTO_INCREMENT PRIMARY KEY,
        nomeAluno VARCHAR(255),
        emailInstitucional VARCHAR(255),
        senhaRA INT(14),
    };
    CREATE TABLE cadastroEmpresa    {
        idCadastroEmpresa INT AUTO_INCREMENT PRIMARY KEY,
        nomeEmpresa  VARCHAR(255),
        emailGuerra VARCHAR(255),
        senha INT(16),
        cnpj VARCHAR(255),

    };