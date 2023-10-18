<?php 
    /**
 * @var mysqli $conexao
 */
    include_once("../../../banco_dados/conexao.php");
    
    function preparaAlunoSignIn()   {
        require("../../../banco_dados/conexao.php");
        if ($stmt = $conexao->prepare('SELECT idCadastroAluno, senhaRA FROM cadastroAluno WHERE nomeAluno = ?')) {
            // Bind parameters (s = string, i = int, b = blob, etc), in our case the nomeAluno is a string so we use "s"
            $stmt->bind_param('s', $_POST['nomeAluno']);
            $stmt->execute();
            // Store the result so we can check if the account exists in the database.
            $stmt->store_result();
        

            $stmt->close();
        }
    if ($stmt->num_rows > 0) {
	    $stmt->bind_result($id, $password);
	    $stmt->fetch();
	    // Account exists, now we verify the password.
	    // Note: remember to use password_hash in your registration file to store the hashed passwords.
	if (password_verify($_POST['password'], $password)) {
		// Verification success! User has logged-in!
		// Create sessions, so we know the user is logged in, they basically act like cookies but remember the data on the server.
		session_regenerate_id();
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['name'] = $_POST['username'];
		$_SESSION['id'] = $id;
		echo 'Welcome ' . $_SESSION['name'] . '!';
	} else {
		// Incorrect password
		echo 'Incorrect username and/or password!';
	}
    }   
    else {
	// Incorrect username
	echo 'Incorrect username and/or password!';
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