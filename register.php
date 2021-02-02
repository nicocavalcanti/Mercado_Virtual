<!DOCTYPE html>
<html lang="PT-BR">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="CSS/styleCadastro.css">
   <script src="JAVASCRIPT/interation.js"></script>

   <title>Cadastro de usuário</title>

</head>
<body>
    <main class="container">  
       <a href="login"><img src="https://image.flaticon.com/icons/png/512/36/36976.png" alt="" width=25></a>
        <h2>Cadastramento</h2>
        <form action="BACKEND/registerLogin" method="post">
            <div class="input-field">
                <input type="text" name="completName" placeholder="Nome completo">
                <div class="underline"></div>
             </div>
             <div class="input-field">
                <input type="text" name="city" placeholder="Sua cidade">
                <div class="underline"></div>
             </div>
             <div class="input-field">
                <input type="text" name="contact" placeholder="Contato">
                <div class="underline"></div>
             </div>
             <div class="input-field">
                <input type="text" name="email" placeholder="E-mail">
                <div class="underline"></div>
             </div>
             <div class="input-field">
                <input type="text" name="username" placeholder="Nome de usuário">
                <div class="underline"></div>
             </div>
             <div class="input-field">
                <input type="password" name="password" placeholder="Senha">
                <div class="underline"></div>
             </div>
             
             <input type="submit" value="Cadastrar">
        </form>
      
    </main>
      <?php
      /*
      esse trecho de php serve para aparecer a messagem de erro ou de cadastro
      */
         //$_SESSION['vaziu']=true;
         //$_SESSION['cadastrado']=true;
         //$_SESSION["jaCadastrado"]=true;
         if (isset($_SESSION["vaziu"])) {
            echo " <div class='erro' id='erro'>
                     <p><strong>Campus vaziu!</strong><br> por favor preencha todos os campus.</p>
                  </div>";
            unset($_SESSION["vaziu"]);
         }elseif(isset($_SESSION['cadastrado'])){
            echo" <div class='erro cadastrado' id='erro'>
                     <p><strong>Cadastrado Com Sucesso!</strong></p>
                  </div>";
            unset($_SESSION['cadastrado']);
         }elseif(isset($_SESSION["jaCadastrado"])) {
            echo " <div class='erro' id='erro'>
                      <p><strong>Erro!</strong><br> Usuário já cadastrado.</p>
                   </div>";
            unset($_SESSION["jaCadastrado"]);
         }
      ?>
</body>
</html>