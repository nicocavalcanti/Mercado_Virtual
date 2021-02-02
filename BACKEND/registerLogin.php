<?php

    include_once("connection.php");
    session_start();
    $nome=$_POST["completName"];
    $cidade=$_POST["city"];
    $contato=$_POST["contact"];
    $email=$_POST["email"];
    $usuario = $_POST['username'];
    $senha = $_POST['password'];

    $query=$pdo->prepare("SELECT * FROM usuarios WHERE login=? and senha=? and email=?");//stamente do pdo
    $query->bindParam(1,$usuario);//paramentros com valores
    $query->bindParam(2,$senha);// * * *
    $query->bindParam(3,$email);
    $query->execute();//execução 

    $result=$query;//substituir o a variavel

    if($result->rowCount() == 0){
        if (empty($nome) || empty($cidade)) {
            $_SESSION['vaziu']=true;
            header("location: ../register");
            exit();
        }
        elseif (empty($contato) || empty($email)) {
            $_SESSION['vaziu']=true;
            header("location: ../register");
            exit();
        }
        elseif (empty($usuario) || empty($senha)) {
            $_SESSION['vaziu']=true;
            header("location: ../register");
            exit();
        }
        else {
            $stmt = $pdo->prepare("INSERT INTO usuarios 
                (login, senha, nome, cidade, email, numero_celular) VALUES 
                ('{$usuario}' ,'{$senha}', '{$nome}', '{$cidade}', '{$email}', '{$contato}')"
            );
            $stmt->execute();
            $_SESSION['cadastrado']=true;
            header("location: ../register");
            exit();
        }
    }else{
        $_SESSION["jaCadastrado"]=true;
        header("location: ../register");
        exit();
    }
?>