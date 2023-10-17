<?php 
    /**
 * @var mysqli $conexao
 */
    include_once("../../../banco_dados/conexao.php");
    function preparaAlunoSignIn()   {
        require("../../../banco_dados/conexao.php");
        if ($stmt = $conexao->prepare('SELECT id, password FROM cadastroAluno WHERE username = ?')) {
            // Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
            $stmt->bind_param('s', $_POST['username']);
            $stmt->execute();
            // Store the result so we can check if the account exists in the database.
            $stmt->store_result();
        
        
            $stmt->close();
        }
    }
    function matchPassword($primeiraSenha, $segundaSenha)   {
        if($primeiraSenha !== $segundaSenha)    {
            die("As senhas não são iguais.");

        }
    }
    function checkPostValues()   {
        if( !isset($_POST["alunoName"],  $_POST["signInAluno_Email"], $_POST["signInAluno_Password"], $_POST["confirmAluno_Password2"]) )  {
            die("Um dos POSTS não foram enviados corretamente");
        }
    }
    function checkPost()    {
        if( $_SERVER["REQUEST_METHOD"] === "POST" )  {
            checkPostValues();
            $aluno = $_POST["alunoName"];
            $email = $_POST["signInAluno_Email"];
            $senha = $_POST["signInAluno_Password"];
            $senha2 = $_POST["confirmAluno_Password2"];
            matchPassword($senha, $senha2);
            preparaAlunoSignIn();
            
        }
    }
    checkPost();
    

?>