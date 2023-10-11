<?php
$servidor = "localhost";
$username = "id21376737_fatecestagiousuarios";
$password = "tgFatec2023!";
$banco = "id21376737_fiw";

try {
        $conexao = new PDO("mysql:host=$servidor;dbname=$banco", $username, $password);
        // set the PDO error mode to exception
        $connexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully"; 
        } catch(PDOException $e) {    
        echo "Connection failed: " . $e->getMessage();
    }