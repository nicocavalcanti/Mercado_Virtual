<?php

include_once("connection.php");

$nome=$_POST["completName"];
$cidade=$_POST["city"];
$contato=$_POST["contact"];
$email=$_POST["email"];
$usuario = $_POST['username'];
$senha = $_POST['password'];

$query=$pdo->prepare("select * from usuarios where login=? and senha=? and email=?");//stamente do pdo
$query->bindParam(1,$usuario);//paramentros com valores
$query->bindParam(2,$senha);// * * *
$query->bindParam(3,$email);
$query->execute();//execução 

$result=$query;//substituir o a variavel
if($result->rowCount() !== 1){
    if (empty($nome) || empty($cidade)) {
    # code...
    }
    elseif (empty($contato) || empty($email)) {
        # code...
    }
    elseif (empty($usuario) || empty($senha)) {
        # code...
    }
    else {
        # code...
        $stmt = $pdo->prepare("INSERT INTO usuarios (
            login, senha, nome, cidade, email, numero_celular) 
            VALUES (
            '{$usuario}' ,'{$senha}', '{$nome}', '{$cidade}', '{$email}', '{$contato}'
        )");
        $stmt->execute();
        echo "deu certo";
    }
}else{
    echo "erro!";
}
?>