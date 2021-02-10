<?php
	session_start();
	include_once("../connection.php");//conexão com o banco de dados

	//verificar se um ou os dois campus estão vaziu
	if(empty($_POST["username"]) || empty($_POST["password"])) { 
		$_SESSION['vaziu']=true;
		unset($_SESSION['não_autenticado']);
		header("location: ../../login");
		exit();
	}
	$login = $_POST['username'];
	$senha = $_POST['password'];

	//verificação no banco de dado
	$query=$pdo->prepare("select * from usuarios where apelido_usuario=? and senha=?");//stamente do pdo
	$query->bindParam(1,$login);//paramentros com valores
	$query->bindParam(2,$senha);// * * *

	$query->execute();//execução 

	$result=$query;//substituir o a variavel

	//verificar a quantidades de valores vai voltar do banco de dados
	if($result->rowCount() == 1){
		//retornar valor do banco de dados
		$nome=$pdo->query("SELECT ID,nome from usuarios WHERE 
		apelido_usuario='{$login}' OR email='{$login}' AND senha='{$senha}'")->fetch(PDO::FETCH_OBJ);

		setcookie("user",$nome->nome,time()+(60*60*24*7),"/");//adicionar valor ao cookie
		setcookie("login",$login,time()+(60*60*24*7),"/");
		setcookie("senha",$senha,time()+(60*60*24*7),"/");
		unset($_SESSION["não_autenticado"]);//destruir a seção não_autenticado || usado para mensagem de erro
		unset($_SESSION["vaziu"]);// destruir a seção vaziu || usado para mensagem de erro
		header("location: ../../index");//ir para outra pagina
		exit();
	}
	// se não existir voltarar para a pagina para efetuar login
	else{
		unset($_SESSION['vaziu']);//destruir a seção não_autenticado || usado para mensagem de erro
		$_SESSION['não_autenticado']=true;//destruir a seção não_autenticado || usado para mensagem de erro
		header("location: ../../login");//voltar para o index.php voltar pagina inicial
		exit();
	}

?>