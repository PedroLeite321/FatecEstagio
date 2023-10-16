<?php
    // session_Start();
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "id21376737_pedro";

    $conexao = mysqli_connect($host, $usuario, $senha, $banco);
    if( mysqli_connect_errno() ) {
        exit("Falha ao se conectar com o database" . mysqli_connect_error());
    }
        