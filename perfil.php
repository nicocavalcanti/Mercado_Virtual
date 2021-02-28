<?php 
session_start();
include_once("BACKEND/connection.php");
include("BACKEND/verificar/verific.php");
?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./IMG/logo.jpeg" type="image/jpeg">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/styleMeuPerfil.css">
    <title>Perfil de Usuario</title>
</head>
<body>
    
        <?php
            include("header/header.php");
        ?>
        
        
            <main class="container">
            
            <!--Caso não esteja logado, Fazer Login -  Colocar um IF sla-->
                <?php 
                
                $nome=$pdo->query("SELECT * FROM usuarios WHERE apelido_usuario='".$_SESSION["login"]."';")->fetch(PDO::FETCH_OBJ);
                ?>
               
                <h2>Meus Dados</h2>
                        <p>Nome: <?php echo $nome->nome;?></p>
                        <p>cidade: <?php echo $nome->cidade;?></p>
                        <p>Contato: <?php echo $nome->numero_celular;?></p>
                        <p>E-Mail: <?php echo $nome->email;?></p>
                  
                    <h2 >Editar Meu Perfil</h2>
                   <a href="editarPerfil">Clique aqui e edite seu Perfil</a>
               
                    <h2 >Meus Anúncios</h2>
                 <a href="meus_anuncios" target="_blank" >Clique aqui para ver seus anúncios</a>
       
        </main>
       

    
        
    
    
    
</body>
</html>