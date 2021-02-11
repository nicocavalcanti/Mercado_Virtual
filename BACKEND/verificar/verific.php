<?php
try{
    $query=$pdo->prepare("SELECT * FROM usuarios WHERE 
    apelido_usuario='{$_SESSION['login']}' or email='{$_SESSION['login']}' and senha='{$_SESSION['senha']}'");//stamente do pdo
    $query->execute();
    if($query->rowCount()==1){        
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