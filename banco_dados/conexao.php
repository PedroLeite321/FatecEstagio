<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "id21376737_pedro";

    try {
            $conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
            // set the PDO error mode to exception
            $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully"; //repetindo 2x no chrome.
            } catch(PDOException $event) {    
            echo "Connection failed: " . $event->getMessage();
        }