<?php

    include_once("../connection.php");
    session_start();
    
    $nome=$_POST["completName"];
    $cidade=$_POST["city"];
    $contato=$_POST["contact"];
    $email=$_POST["email"];
    $senha = $_POST['password'];
    $nick=$_POST['nickName'];

    $query=$pdo->prepare("SELECT * FROM usuarios WHERE 
    apelido_usuario='{$nick}' and senha='{$senha}'");//stamente do pdo
    /*$query->bindParam(1,$login);//paramentros com valores
    $query->bindParam(2,$senha);// * * */
    $query->execute();//execução 

    $result=$query;//substituir o a variavel

    if($result->rowCount() == 0){
        if (empty($nome) || empty($cidade)) {
            $_SESSION['vaziu']=true;
            header("location: ../../register");
            exit();
        }
        elseif (empty($contato) || empty($email)) {
            $_SESSION['vaziu']=true;
            header("location: ../../register");
            exit();
        }
        elseif (empty($nick) || empty($senha)) {
            $_SESSION['vaziu']=true;
            header("location: ../../register");
            exit();
        }
        else {
            $stmt = $pdo->prepare("INSERT INTO usuarios 
                ( senha, nome, cidade, email, numero_celular, apelido_usuario) VALUES 
                ('{$senha}', '{$nome}', '{$cidade}', '{$email}', '{$contato}', '{$nick}')"
            );
            $stmt->execute();
            $_SESSION['cadastrado']=true;
            header("location: ../../register");
            exit();
        }
    }else{
        $_SESSION["jaCadastrado"]=true;
        header("location: ../../register");
        exit();
    }
?>