<?php 
    include("./banco_dados/conexao.php");
    function matchPassword($primeiraSenha, $segundaSenha)   {
        if($primeiraSenha !== $segundaSenha)    {
            echo("As senhas não são iguais.");

        }
    }
    checkPostValues()   {
        if(isset($_POST["alunoName"]) === TRUE && isset($_POST["signInAluno_Email"]) === TRUE && isset($_POST["signInAluno_Password"]) && === TRUE $_POST["signInAluno_Password"] === TRUE )  {
            die("Um dos POSTS não foram enviados corretamente");
        }
    }
    function checkPost()    {
        if( $_SERVER["REQUEST_METHOD"] === "POST" )  {
            checkPostValues();
            $aluno = $_POST["alunoName"];
            $email = $_POST["signInAluno_Email"];
            $senha = $_POST["signInAluno_Password"];
            $senha2 = $_POST["signInAluno_Password"];
            
        }
    }
    checkPost();

?>