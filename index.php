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
    
    <title>PotiCars- Um Mercado Virtual Potiguar de Vendas Automotiva</title>
    <link rel="stylesheet" href="CSS/stylePrincipal.css">
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
        <div class="ads">
            <div class="anunciototal" id='n1'>
                <div class="anuncio"><img src="https://i.vrum.com.br/JyKahLylgVfhOkEFuZfxB8W03NQ=/675x/smart/imgsapp.estadodeminas.vrum.com.br/app/noticia_128576568202/2020/09/16/55316/20200915164159518844e.jpg" alt=""></div>
            <div class="descricao">DESCRIÇÃO 1</div>
            </div>
            <div class="anunciototal" id='n1'>
                <div class="anuncio"><img src="https://i.vrum.com.br/JyKahLylgVfhOkEFuZfxB8W03NQ=/675x/smart/imgsapp.estadodeminas.vrum.com.br/app/noticia_128576568202/2020/09/16/55316/20200915164159518844e.jpg" alt=""></div>
            <div class="descricao">DESCRIÇÃO 2</div>
            </div>
            <div class="anunciototal" id='n1'>
                <div class="anuncio"><img src="https://i.vrum.com.br/JyKahLylgVfhOkEFuZfxB8W03NQ=/675x/smart/imgsapp.estadodeminas.vrum.com.br/app/noticia_128576568202/2020/09/16/55316/20200915164159518844e.jpg" alt=""></div>
            <div class="descricao">DESCRIÇÃO 3</div>
            </div>
            <div class="anunciototal" id='n1'>
                <div class="anuncio"><img src="https://i.vrum.com.br/JyKahLylgVfhOkEFuZfxB8W03NQ=/675x/smart/imgsapp.estadodeminas.vrum.com.br/app/noticia_128576568202/2020/09/16/55316/20200915164159518844e.jpg" alt=""></div>
            <div class="descricao">DESCRIÇÃO 4</div>
            </div>
            <div class="anunciototal" id='n1'>
                <div class="anuncio"><img src="https://i.vrum.com.br/JyKahLylgVfhOkEFuZfxB8W03NQ=/675x/smart/imgsapp.estadodeminas.vrum.com.br/app/noticia_128576568202/2020/09/16/55316/20200915164159518844e.jpg" alt=""></div>
            <div class="descricao">DESCRIÇÃO 5</div>
            </div>
            <div class="anunciototal" id='n1'>
                <div class="anuncio"><img src="https://i.vrum.com.br/JyKahLylgVfhOkEFuZfxB8W03NQ=/675x/smart/imgsapp.estadodeminas.vrum.com.br/app/noticia_128576568202/2020/09/16/55316/20200915164159518844e.jpg" alt=""></div>
            <div class="descricao">DESCRIÇÃO 6</div>
            </div>
        </div>
        <div class='seta voltar' id="n1" ><i></i></div>
        <div class='seta passar' id="n1" ><i></i></div>
        <div class="ads">
            <div class="anunciototal" id='n2'>
                <div class="anuncio"><img src="https://i.vrum.com.br/JyKahLylgVfhOkEFuZfxB8W03NQ=/675x/smart/imgsapp.estadodeminas.vrum.com.br/app/noticia_128576568202/2020/09/16/55316/20200915164159518844e.jpg" alt=""></div>
            <div class="descricao">DESCRIÇÃO 1</div>
            </div>
            <div class="anunciototal" id='n2'>
                <div class="anuncio"><img src="https://i.vrum.com.br/JyKahLylgVfhOkEFuZfxB8W03NQ=/675x/smart/imgsapp.estadodeminas.vrum.com.br/app/noticia_128576568202/2020/09/16/55316/20200915164159518844e.jpg" alt=""></div>
            <div class="descricao">DESCRIÇÃO 2</div>
            </div>
            <div class="anunciototal" id='n2'>
                <div class="anuncio"><img src="https://i.vrum.com.br/JyKahLylgVfhOkEFuZfxB8W03NQ=/675x/smart/imgsapp.estadodeminas.vrum.com.br/app/noticia_128576568202/2020/09/16/55316/20200915164159518844e.jpg" alt=""></div>
            <div class="descricao">DESCRIÇÃO 3</div>
            </div>
            <div class="anunciototal" id='n2'>
                <div class="anuncio"><img src="https://i.vrum.com.br/JyKahLylgVfhOkEFuZfxB8W03NQ=/675x/smart/imgsapp.estadodeminas.vrum.com.br/app/noticia_128576568202/2020/09/16/55316/20200915164159518844e.jpg" alt=""></div>
            <div class="descricao">DESCRIÇÃO 4</div>
            </div>
            <div class="anunciototal" id='n2'>
                <div class="anuncio"><img src="https://i.vrum.com.br/JyKahLylgVfhOkEFuZfxB8W03NQ=/675x/smart/imgsapp.estadodeminas.vrum.com.br/app/noticia_128576568202/2020/09/16/55316/20200915164159518844e.jpg" alt=""></div>
            <div class="descricao">DESCRIÇÃO 5</div>
            </div>
            <div class="anunciototal" id='n2'>
                <div class="anuncio"><img src="https://i.vrum.com.br/JyKahLylgVfhOkEFuZfxB8W03NQ=/675x/smart/imgsapp.estadodeminas.vrum.com.br/app/noticia_128576568202/2020/09/16/55316/20200915164159518844e.jpg" alt=""></div>
            <div class="descricao">DESCRIÇÃO 6</div>
            </div>
        </div>
        <div class='seta voltar' id="n2"><i></i></div>
        <div class='seta passar' id="n2"><i></i></div>
    </div>
    <p style='text-align:center' >1,2,3,4,5...</p>
	<div class="rodape">
        <p> Powerd PotiCars</p>
   
    </div>

   
    
    </div>
</body>
</html>