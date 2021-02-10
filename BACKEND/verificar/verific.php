<?php
session_start();
try{
    $query=$pdo->prepare("SELECT * FROM usuarios WHERE 
    apelido_usuario='{$_COOKIE['login']}' or email='{$_COOKIE['login']}' and senha='{$_COOKIE['senha']}'");//stamente do pdo
    $query->execute();
    if($query->rowCount()==1){
        setcookie("user",$_COOKIE['user'],time()+(60*60*24*7),"/");//segundo*minutos*horas*dias
        //adicionar valor ao cookie
        setcookie("login",$_COOKIE['login'],time()+(60*60*24*7),"/");
        setcookie("senha",$_COOKIE['senha'],time()+(60*60*24*7),"/");
        
        if($_SESSION["pagina"]=="login"){
           $_SESSION["pagina"]="index";
           header("location: index");

        }elseif ($_SESSION["pagina"]=="register") {
            # code...
            $_SESSION["pagina"]="index";
            header("location: .");
        }
        
    }
}catch(Exception $e){
    print_r($e);
    exit();
}

?>