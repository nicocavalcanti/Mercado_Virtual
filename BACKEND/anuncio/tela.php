<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="../../IMG/logo.jpeg" type="image/jpeg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anúncio</title>
    <link rel="stylesheet" href="../../CSS/styleAnuncio.css">
    <script src="../../BACKEND/anuncio/chat.js"></script>
    <script src="../../BACKEND/anuncio/passarIMG.js"></script>
</head>

<body>

    <main class="container"> 
        <a href="../../"><img src="../../IMG/36976.png" alt="" width=25></a>
        <h2>Anúncio</h2>

            <div class="input-field" id="img"><!--Colocar pra mostrar todas as imagens cadastradas para o anúncio-->
                <div class="img">
                    <img src="<?php echo "img/{$_SESSION["anuncio"]}.jpg";?>" alt="" width= "600" height="400">
                </div>
                <?php
                $n=1;
                $cond=true;
                $di=new FilesystemIterator("img/");
                //echo iterator_count($di);
                for($n;$n<iterator_count($di); $n++) {
                        echo'<div class="img" id="im">
                        <img src="img/'.$_SESSION["anuncio"].'('.$n.').jpg" alt=""width= "400" height="400">
                        </div>';
                }?>
                
                
            </div>
            <div class="input-field">
                <div class="box">
                    <?php  
                    $n=1;
                    $cond=true;
                    //echo iterator_count($di);
                    for($n;$n<iterator_count($di); $n++){
                        if($n===1){
                            echo'<input type="radio" name="slide" class="rad" checked>';
                        }
                        echo'<input type="radio" name="slide"> ';

                    }?>
                </div>
            </div>
            <div class="underline"></div>
            <div class="input-field">
                Marca: <p><?php echo $query1->marca;?></p>
                <div class="underline"></div>
            </div>
            <div class="input-field">
                Modelo: <p><?php echo $query1->modelo;?></p>
                <div class="underline"></div>
            </div>

            <div class="input-field">
                Estado: <p><?php echo $query->estado;?></p>
                <div class="underline"></div>
            </div>

            <div class="input-field">
                Cidade: <p><?php echo $query->cidade;?></p>
                <div class="underline"></div>
            </div>
            <div class="input-field">
            Cor: <p><?php echo $query1->cor;?></p>
                <div class="underline"></div>
            </div>
            <div class="input-field">                
                KM rodados: <p><?php echo $query1->quilometragem;?></p>
                <div class="underline"></div>
            </div>
            <div class="input-field">
                Preço: <p><?php echo $query->preco_pedido;?></p>
                <div class="underline"></div>
            </div>
            <div class="input-field">
                Adicionais:
                <ul>
                    <li><p>Ar condicionado: <?php echo $query1->ar_condicionado;?></p></li>
                    <li><p>vidro Eletrico: <?php echo $query1->vidro;?></p></li>
                    <li><p>Sensor: <?php echo $query1->sensor;?></p></li>
                    <li><p>Direcão: <?php echo $query1->direcao;?></p></li>
                    <li><p>Som: <?php echo $query1->som;?></p></li>
                    <li><p>Alarme: <?php echo $query1->alarme;?></p></li>
                    <li><p>Travas: <?php echo $query1->travas;?></p></li>
                </ul>
                <div class="underline"></div>
            </div>
            <div class="input-field">
                Ano: <p><?php echo $query1->ano;?></p>
                <div class="underline"></div>
            </div>
            <div class="input-field">
                Combustivel: <p ><?php echo $query1->combustivel;?> </p>
               
                <div class="underline"></div>
            </div>
            <div class="input-field"><!--Olha o size colocar de acordo com o tamanho texto -->
            Descrição: <br>
                <p><?php echo $query->descricao;?></p> 
                <div class="underline"></div>
            </div>
            <div class="chat" id="containerChat">
                <!-- aqui vai aparecer o chat-->

            </div>
        <form  enctype="" action="envia" method="post">
            <input type="text" name="chat"autocomplete="off" class="caixa_chat">
            <input type="submit" value="Enviar" class="btSub"> 
        </form>
    </main>
    
</body>
</html>