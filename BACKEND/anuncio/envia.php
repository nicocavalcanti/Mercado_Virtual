<?php 
session_start();
include_once("../connection.php");
    if(!empty($_POST['chat'])){
        echo $_POST['user'];
        $id=$pdo->query("SELECT id_anuncio,apelido_usuario from anuncio WHERE
         id_carro={$_SESSION["anuncio"]}")->fetch(PDO::FETCH_OBJ);
        if($id->apelido_usuario==$_SESSION['login']){
            $sql="INSERT INTO chat (de_quem,para_quem,id_anuncio,mensagem) VALUES 
            ('{$_SESSION['login']}','{$_POST['user']}',{$id->id_anuncio},'{$_POST['chat']}')";
            $prepared=$pdo->prepare($sql);
            $prepared->execute();
        }else{
            $sql="INSERT INTO chat (de_quem,para_quem,id_anuncio,mensagem) VALUES 
            ('{$_SESSION['login']}','{$id->apelido_usuario}',{$id->id_anuncio},'{$_POST['chat']}')";
            $prepared=$pdo->prepare($sql);
            $prepared->execute();
        }
    }
   
?>