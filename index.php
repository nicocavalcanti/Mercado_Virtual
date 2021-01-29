<?php
error_reporting(0);
session_start();
if($_SESSION["user"]){
    //header("location: main");
    exit();
}
include_once("connection.php");
?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1ab94d0eba.js" crossorigin="anonymous"></script>
 
    <title>PotiCars - Um mercado virtual Potiguar de vendas automotivas </title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    
    <main class="container">  
        <h2>Login</h2>
        <form action="BACKEND/verifyLogin.php" method="get"> <!--post não mostra, o get mostra  -->
            <div class="input-field">
                <input type="text" name="username" id="username" placeholder="Usuário">
                <div class="underline"></div>
             </div>
             <div class="input-field">
                <input type="password" name="password" id="password" placeholder="Senha">
                <div class="underline"></div>
             </div>
            
            <input type="submit" value="Entrar">
             
        </form>
        <div class="footer">
            <span>Você é cadastrado no PotiCars?</span>
            <div class="social-fields">
                <div class="social-field.google">
                    <a href="register.php" target="_blanck">
                        <i class="fab fa-google-plus-g"></i> 
                        Cadastre-se
                    </a>
                </div>

            </div>
        </div>
    </main>
    
</body>
</html>