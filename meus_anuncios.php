<?php
    
    error_reporting(0);
    session_start();
    include_once("BACKEND/connection.php");
    include("BACKEND/verificar/verific.php");
?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./IMG/logo.jpeg" type="image/jpeg">
    <title>Meus Anúncios</title>
    <link rel="stylesheet" href="CSS/styleMAnuncio.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="JAVASCRIPT/passarIMG.js"></script>
</head>
</head>
<body>
    
    <div class="tudo">
        <?php
            include("header/header.php");
        ?>
        
        <div class="meio">
            <div class="anuncio">
            <?php 
                $sql="SELECT * FROM anuncio WHERE apelido_usuario='{$_SESSION['login']}'";
                $query=$pdo->query($sql);
                while($linha=$query->fetch()):  
            ?>
                <div class="pessoa">
                    <a href="anuncios/<?php echo$linha['id_carro'];?>"><img src=<?php echo"anuncios/".$linha['id_carro']."/img/".$linha['id_carro'].".jpg";?> alt=""><?php echo$linha['id_carro'];?></a>
                </div>
                
            <?php endwhile;?>
            </div>
        </div>
        
        <div class="rodape">
            <p style='text-align:center' >Feito por Luiz, Paulo e Reinan</p> 
            <p style='text-align:center' >Copyright © 2021-2021 PotiCars.com.br LTDA.</p>
        
        </div>

    
        
    </div>
</body>
</html>