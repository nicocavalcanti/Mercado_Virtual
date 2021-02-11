<!DOCTYPE html>
<?php 
session_start();
?>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styleAnuciar.css">
    <script src="JAVASCRIPT/interation.js"></script>
    <title>Anunciar</title>
</head>

<body>
    <main class="container">
        <h2>Anunciando...</h2>
        

        <form  enctype="multipart/form-data" action="BACKEND/registrar/registerAnuncio" method="post">
            <div class="input-field">
                <input type="file" name="arquivo[]" Value="insira imagens" accept="image/*" multiple="multiple">
            </div>
            <div class="underline"></div>
            <div class="input-field">
                
                <select name="marca" required>
                    <option value selected disabled>Selecionar Marca</option> 
                    <option value="Audi">Audi</option>
                    <option value="BMW">BMW</option>
                    <option value="Chevrolet">GM - Chevrolet</option>
                    <option value="Chery">Chery</option>
                    <option value="Citroen">Citroen</option>
                    <option value="Fiat">Fiat</option>
                    <option value="Ford">Ford</option>
                    <option value="Honda">Honda</option>
                    <option value="Hyundai">Hyundai</option>
                    <option value="Jac">Jac</option>
                    <option value="Jeep">Jeep</option>
                    <option value="Kia Motors">Kia Motors</option>
                    <option value="Land Rover">Land Rover</option>
                    <option value="Mercedes">Mercedes</option>
                    <option value="Mitsubishi">Mitsubishi</option>
                    <option value="Nissan">Nissan</option>
                    <option value="Volkswagem">VW - Volkswagem</option>
                    <option value="Suzuki">Suzuki</option>
                    <option value="Renault">Renault</option>
                    <option value="Toyota">Toyota</option>
                </select>
                <select name="modelo" required>
                    <!--Utilizar IF:  se modelo for igual a Fiat apresentar modelos Fiat-->
                    <option value selected disabled>Selecionar Modelo</option> 
                    <option value="147">147</option>
                    <option value="Argo">Argo</option>
                    <option value="Bravo">Bravo</option>
                    <option value="Cronos">Cronos</option>
                    <option value="Doblo">Doblo</option>
                    <option value="Ducato">Ducato</option>
                    <option value="Fiorino">Fiorino</option>
                    <option value="Grand Siena">Grand Siena</option>
                    <option value="Idea">Idea</option>
                    <option value="Linea">Linea</option>
                    <option value="Marea">Marea</option>
                    <option value="Mobi">Mobi</option>
                    <option value="Palio">Palio</option>
                    <option value="Premio">Premio</option>
                    <option value="Punto">Punto</option>
                    <option value="Siena">Siena</option>
                    <option value="Stilo">Stilo</option>
                    <option value="Strada">Strada</option>
                    <option value="Toro">Toro</option>
                    <option value="Uno">Uno</option>
                </select>
                <div class="underline"></div>
            </div>

            <div class="input-field">

                <select name="estado">
                    <option selected value="RN - Rio Grande do Norte" hidden >RN - Rio Grande do Norte</option>
                </select>
                <select name="cidade" required>
                    <option value selected disabled>Selecionar Cidade</option> 
                    <option value="Acari">Acari</option>
                    <option value="Afonso Bezerra">Afonso Bezerra</option>
                    <option value="Alexandria">Alexandria</option>
                    <option value="Apodi">Apodi</option>
                    <option value="Arez">Arez</option>
                    <option value="Baia Formoza">Baia Formoza</option>
                    <option value="Boa Saúde">Boa Saúde</option>
                    <option value="Bom Jesus">Bom Jesus</option>
                    <option value="Ceara Mirim">Ceara Mirim</option>
                    <option value="Conguaretama">Conguaretama</option>
                    <option value="Currais Novos">Currais Novos</option>
                    <option value="Eloi de Souza">Eloi de Souza</option>
                    <option value="Espirito Santo">Espirito Santo</option>
                    <option value="Goinaninha">Goinaninha</option>
                    <option value="Guamare">Guamare</option>
                    <option value="Japi">Japi</option>
                    <option value="Lajes">Lajes</option>
                    <option value="Macaiba">Macaiba</option>
                    <option value="Montanhas">Montanhas</option>
                    <option value="Monte Alegre">Monte Alegre</option>
                    <option value="Mossoro">Mossoro</option>
                    <option value="Natal">Natal</option>
                    <option value="Nova Cruz">Nova Cruz</option>
                    <option value="Parnamirim">Parnamirim</option>
                    <option value="Passa e Fica">Passa e Fica</option>
                    <option value="Pedro Velho">Pedro Velho</option>
                    <option value="Santa Cruz">Santa Cruz</option>
                    <option value="Santo Antônio">Santo Antônio</option>
                    <option value="São Gonçalo do Amarante">São Gonçalo do Amarante</option>
                    <option value="São Jose do Campestre">São Jose do Campestre</option>
                    <option value="São Jose de Mipibu">São Jose de Mipibu</option>
                    <option value="Serra Caiada">Serra Caiada</option>
                    <option value="Serrinha">Serrinha</option>
                    <option value="Tangara">Tangara</option>
                    <option value="Tibal">Tibal</option>
                    <option value="Tibal do Sul">Tibal do Sul</option>
                    <option value="Vera Cruz">Vera Cruz</option>
                    <option value="Varzea">Varzea</option>
                </select>
                <div class="underline"></div>
            </div>
            <div class="input-field">
                Cor: <input type="text" name="cor" placeholder="Ex.: Prata" required>
                <div class="underline"></div>
            </div>
            <div class="input-field">                
                KM rodados: <input type="text" name="KMrodado" placeholder="Ex.: 200.000Km" required>
                <div class="underline"></div>
            </div>
            <div class="input-field">
                Preço: <input type="Valor" name="preco" placeholder="Ex.: 20.000" required>
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <label><input type="checkbox" name="ar" value="sim">Ar Condicionado</label><br>
                <label><input type="checkbox" name="alarme" value="sim">Alarme</label><br>
                <label><input type="checkbox" name="direcao" value="sim">Direção</label><br>
                <label><input type="checkbox" name="sensor" value="sim">Sensor</label><br>
                <label><input type="checkbox" name="som" value="sim">Som</label><br>
                <label><input type="checkbox" name="trava" value="sim">Travas</label><br>
                <label><input type="checkbox" name="vidro" value="sim">Vidro Elétrico</label><br>
                <div class="underline"></div>
            </div>
            <div class="input-field">
                Ano: <input type="text" name="ano" placeholder="2000" maxlength="4" required>
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <p class="combustivel">Combustível:</p>
                <input type="radio" name="combustivel" value="Flex" required> Flex 
                <input type="radio" name="combustivel" value="Gasolina" required> Gasolina 
                <input type="radio" name="combustivel" value="Etanol" required> Etanol 
                <input type="radio" name="combustivel" value="Diesel" required> Diesel 
                <input type="radio" name="combustivel" value="GNV" required> GNV 
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <textarea name="descricao" cols="60" rows="1" placeholder="Digite um resumo do veiculo" required></textarea>
                <div class="underline"></div>
            </div>
            <br><input type="submit" value="Anunciar">
        </form>
    </main>
    <?php
      /*
      esse trecho de php serve para aparecer a messagem de erro ou de cadastro
      */
         //$_SESSION['vaziu']=true;
         
         /*echo date("e");
         echo date("Y-m-d H:i:s");*/
         //$_SESSION['cadastrado']=true;
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
         }
      ?>
</body>

</html>