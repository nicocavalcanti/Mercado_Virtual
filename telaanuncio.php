<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anúncio</title>
    <link rel="stylesheet" href="CSS/styleAnuncio.css">
</head>

<body>
    <main class="container"> 
        <a href="index"><img src="IMG/36976.png" alt="" width=25></a>
        <h2>Anúncio</h2>

            <div class="input-field"><!--Colocar pra mostrar todas as imagens cadastradas para o anúncio-->
                <img src="https://s3-sa-east-1.amazonaws.com/carroaluguel-website/images/carros/doblo.png" alt="">
                <div class="underline"></div>
            </div>
           
            <div class="input-field">
                Marca: <p>*FIAT*</p>
                <div class="underline"></div>
            </div>
            <div class="input-field">
                Modelo: <p>*Doblo*</p>
                <div class="underline"></div>
            </div>

            <div class="input-field">
                Estado: <p>RN - Rio Grande do Norte</p>
                <div class="underline"></div>
            </div>

            <div class="input-field">
                Cidade: <p>*Serrinha*</p>
                <div class="underline"></div>
            </div>
            <div class="input-field">
            Cor: <p>*Prata*</p>
                <div class="underline"></div>
            </div>
            <div class="input-field">                
                KM rodados: <p>*1.000.000*</p>
                <div class="underline"></div>
            </div>
            <div class="input-field">
                Preço: <p>*R$ 21.000*</p>
                <div class="underline"></div>
            </div>
            <div class="input-field">
                Adicionais:
                <ul>
                    <li><p>*Ar condicionado*</p></li>
                    <li><p>*Ar condicionado*</p></li>
                </ul>
                <div class="underline"></div>
            </div>
            <div class="input-field">
                Ano: <p>2010</p>
                <div class="underline"></div>
            </div>
            <div class="input-field">
                Combustivel: <p >*Flex* </p>
               
                <div class="underline"></div>
            </div>
            <div class="input-field"><!--Olha o size colocar de acordo com o tamanho texto -->
                <p>*Carro muito conservado e novo, para mais informações mande um chat ou um zap para 84 900000000*</p> 
                <div class="underline"></div>
            </div>
            <div class="chat" id="containerChat">
                <p><b>ola: </b> oi</p>
                <!-- aqui vai aparecer o chat-->

            </div>
        <form  enctype="" action="" method="post">
            <input type="text" name="chat" class="caixa_chat">
            <input type="submit" value="Enviar" class="btSub"> 
        </form>
    </main>
    <script>
        document.querySelector("form").addEventListener("submit",function(e){
            e.preventDefault()
        })
    </script>
</body>
</html>