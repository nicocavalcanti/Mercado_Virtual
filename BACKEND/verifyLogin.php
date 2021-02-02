<?php
session_start();
include_once("../connection.php");//conexão com o banco de dados

//verificar se um ou os dois campus estão vaziu
if(empty($_POST["username"]) || empty($_POST["password"])) { 
	$_SESSION['vaziu']=true;
	$_SESSION['não_autenticado']=false;
    header("location: ../login");
    exit();
}
$usuario = $_POST['username'];
$senha = $_POST['password'];

//verificação no banco de dado
$query=$pdo->prepare("select ID, login from usuarios where login=? and senha=?");//stamente do pdo
$query->bindParam(1,$usuario);//paramentros com valores
$query->bindParam(2,$senha);// * * *

$query->execute();//execução 

$result=$query;//substituir o a variavel

//verificar a quantidades de valores vai voltar do banco de dados
if($result->rowCount() == 1){
	//retornar valor do banco de dados
	$nome=$pdo->query("select ID,nome,login from usuarios where 
	login='{$usuario}' and senha='{$senha}'")->fetch(PDO::FETCH_OBJ);

	$_SESSION['user'] = $nome->nome;//adicionar valor a sessão
	unset($_SESSION["não_autenticado"]);//destruir a seção não_autenticado || usado para mensagem de erro
	unset($_SESSION["vaziu"]);// destruir a seção vaziu || usado para mensagem de erro
	header("location: ../login");//ir para outra pagina
	exit();
}
// se não existir voltarar para a pagina para efetuar login
else{
	$_SESSION['vaziu']=false;//destruir a seção não_autenticado || usado para mensagem de erro
	$_SESSION['não_autenticado']=true;//destruir a seção não_autenticado || usado para mensagem de erro
	header("location: ../login");//voltar para o index.php voltar pagina inicial
    exit();
}

?>