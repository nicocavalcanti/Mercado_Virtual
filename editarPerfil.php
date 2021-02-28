<?php 
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
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/styleMeuPerfil.css">
    <title>Perfil de Usuario</title>
</head>
<body>
    <div class="tudo">
        <?php
            include("header/header.php");
        ?>        
            <main class="container">
               <form action="" method="get">
            <!--Caso não esteja logado, Fazer Login -  Colocar um IF sla-->
                  <?php 
                  
                  $nome=$pdo->query("SELECT * FROM usuarios WHERE apelido_usuario='".$_SESSION["login"]."';")->fetch(PDO::FETCH_OBJ);
                  ?>
               
                  <h2>Meus Dados</h2>
                  <table>
                  <tr>
                     <td><p><strong>Nome: </strong></p></td> 
                     <td><p><input type="text" value="<?php echo $nome->nome;?>"></p></td>
                  </tr>
                  <tr>
                     <td><p><strong>cidade: </strong></p> </td> 
                     <td><p><input type="text" value="<?php echo $nome->cidade;?>"></p></td>
                  </tr>
                  <tr>
                     <td><p><strong>Contato: </strong></p> </td> 
                     <td><p><input type="text" value="<?php echo $nome->numero_celular;?>"></p></td>
                  </tr>
                  <tr>
                     <td><p><strong>E-Mail: </strong></p> </td> 
                     <td><p><input type="text" value="<?php echo $nome->email;?>"></p></td>
                  </tr>
                  </table>
                  <input type="submit" value="enviar" class="Salvar">
                  
               </form>    
        </main>
    </div>  
    
</body>
</html>