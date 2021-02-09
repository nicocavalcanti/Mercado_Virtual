<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styleAnuciar.css">
    <title>Anunciar</title>
</head>

<body>
    <main class="container">
        <h2>Anunciando...</h2>
        

        <form action="BACKEND/register/registerAnuncio" method="post">

            <div class="input-field">
                <input type="file" name="arquivo" Value="insira imagens" accept="image/*" multiple="multiple">
                <select name="marca">
                    <option value="Fiat">Fiat</option>
                    <option value="Volkswagem">VW - Volkswagem</option>
                    <option value="Ford">Ford</option>
                    <option value="Land Rover">Land Rover</option>
                    <option value="Mercedes">Mercedes</option>
                    <option value="BMW">BMW</option>
                    <option value="Audi">Audi</option>
                    <option value="Chery">Chery</option>
                    <option value="Jeep">Jeep</option>
                    <option value="Honda">Honda</option>
                    <option value="Hyundai">Hyundai</option>
                    <option value="Chevrolet">GM - Chevrolet</option>
                    <option value="Jac">Jac</option>
                    <option value="Citroen">Citroen</option>
                    <option value="Toyota">Toyota</option>
                    <option value="Mitsubishi">Mitsubishi</option>
                    <option value="Kia Motors">Kia Motors</option>
                    <option value="Suzuki">Suzuki</option>
                    <option value="Renault">Renault</option>
                    <option value="Nissan">Nissan</option>
                </select>
                <select name="modelo">
                    <!--Utilizar IF:  se modelo for igual a Fiat apresentar modelos Fiat-->
                    <option value="Grand Siena">Grand Siena</option>
                    <option value="">Model</option>
                    <option value="">Model</option>
                    <option value="">Model</option>
                    <option value="">Model</option>
                    <option value="">Model</option>
                    <option value="">Model</option>
                    <option value="">Model</option>
                    <option value="">Model</option>
                    <option value="">Model</option>
                    <option value="">Model</option>
                    <option value="">Model</option>
                    <option value="">Model</option>
                    <option value="">Model</option>
                    <option value="">Model</option>
                    <option value="">Model</option>
                    <option value="">Model</option>
                    <option value="">Model</option>
                    <option value="">Model</option>
                    <option value="Nissan">Nissan</option>

                </select>
                <div class="underline"></div>
            </div>

            <div class="input-field">

                <select name="estado">
                    <option value="">RN - Rio Grande do Norte</option>
                </select>
                <select name="cidade">
                    <option value="Acari">Acari</option>
                    <option value="Afonso Bezerra">Afonso Bezerra</option>
                    <option value="Alexandria">Alexandria</option>
                    <option value="Serrinha">Serrinha</option>
                    <option value="Santo Antônio">Santo Antônio</option>
                    <option value="Nova Cruz">Nova Cruz</option>
                    <option value="Natal">Natal</option>
                    <option value="Boa Saúde">Boa Saúde</option>
                    <option value="Tibal do Sul">Tibal do Sul</option>
                    <option value="Parnamirim">Parnamirim</option>
                    <option value="Goinaninha">Goinaninha</option>
                    <option value="Brejinho">Brejinho</option>
                </select>
                <div class="underline"></div>
            </div>
            <div class="input-field">
                Cor: <input type="text" name="cor" placeholder="Ex.: Prata">
                <div class="underline"></div>
            </div>
            <div class="input-field">                
                KM rodados: <input type="text" name="KMrodado" placeholder="Ex.: 200.000Km">
                <div class="underline"></div>
            </div>
            <div class="input-field">
                Preço: <input type="Valor" name="preco" placeholder="Ex.: 20.000">
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <label><input type="checkbox" name="ar" value="sim">Ar Condicionado</label><br>
                <label><input type="checkbox" name="Vidro" value="sim">Vidro Elétrico</label><br>
                <label><input type="checkbox" name="Sensor" value="sim">Sensor</label><br>
                <label><input type="checkbox" name="Direcao" value="sim">Direção</label><br>
                <label><input type="checkbox" name="Som" value="sim">Som</label><br>
                <label><input type="checkbox" name="Alarme" value="sim">Alarme</label><br>
                <label><input type="checkbox" name="Trava" value="sim">Travas</label><br>
                <div class="underline"></div>
            </div>
            <div class="input-field">
                Ano: <input type="text" name="ano" placeholder="2000" maxlength="4">
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <p>Combustível:</p>
                <input type="radio" name="combustivel" value="Flex"> Flex 
                <input type="radio" name="combustivel" value="Gasolina"> Gasolina 
                <input type="radio" name="combustivel" value="Etanol"> Etanol 
                <input type="radio" name="combustivel" value="Diesel"> Diesel 
                <input type="radio" name="combustivel" value="GNV"> GNV 
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <textarea name="descricao" cols="30" rows="1" placeholder="Digite um resumo do veiculo"></textarea>
                <div class="underline"></div>
            </div>
            <br><input type="submit" value="Anunciar">
        </form>
    </main>
</body>

</html>