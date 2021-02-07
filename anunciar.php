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
        

        <form>

            <div class="input-field">
                <input type="file" name="arquivo" Value="insira imagens" accept="image/*" multiple="multiple">
                <select name="modelo" class="">
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
                <select name="select-simples-grande" class="">
                    <!--Utilizar IF:  se modelo for igual a Fiat apresentar modelos Fiat-->
                    <option value="Grand Siena">Grand Siena</option>
                    <option value="">Palio</option>
                    <option value="">Siena</option>
                    <option value="">Punto</option>
                    <option value="">Idea</option>
                    <option value="">Toro</option>
                    <option value="">Mobi</option>
                    <option value="">Uno</option>
                    <option value="">Bravo</option>
                    <option value="">Doblo</option>
                    <option value="">Fiorino</option>
                    <option value="">Linea</option>
                    <option value="">Premio</option>
                    <option value="">Stilo</option>
                    <option value="">Strada</option>
                    <option value="">Argo</option>
                    <option value="">Cronos</option>
                    <option value="">147</option>
                    <option value="">Marea</option>
                    <option value="">Ducato</option>

                </select>
                <div class="underline"></div>
            </div>

            <div class="input-field">

                <select name="estado" id="">
                    <option value="">RN - Rio Grande do Norte</option>
                </select>
                <select name="cidade" class="">
                    <option value="">Arez</option>
                    <option value="">Acari</option>
                    <option value="">Afonso Bezerra</option>
                    <option value="">Alexandria</option>
                    <option value="">Apodi</option>
                    <option value="">Conguaretama</option>
                    <option value="">Ceara Mirim</option>
                    <option value="">Baia Formoza</option>
                    <option value="">Serrinha</option>
                    <option value="">Santo Antônio</option>
                    <option value="">Nova Cruz</option>
                    <option value="">Natal</option>
                    <option value="">Boa Saúde</option>
                    <option value="">Tibal do Sul</option>
                    <option value="">Parnamirim</option>
                    <option value="">Goinaninha</option>
                    <option value="">Tibal</option>
                    <option value="">Mossoro</option>
                    <option value="">Varzea</option>
                    <option value="">Espirito Santo</option>
                    <option value="">Montanhas</option>
                    <option value="">Pedro Velho</option>
                    <option value="">São Jose do Campestre</option>
                    <option value="">São Jose de Mipibu</option>
                    <option value="">Monte Alegre</option>
                    <option value="">Vera Cruz</option>
                    <option value="">Macaiba</option>
                    <option value="">São Gonçalo do Amarante</option>
                    <option value="">Lajes</option>
                    <option value="">Guamare</option>
                    <option value="">Passa e Fica</option>
                    <option value="">Santa Cruz</option>
                    <option value="">Currais Novos</option>
                    <option value="">Japi</option>
                    <option value="">Tangara</option>
                    <option value="">Serra Caiada</option>
                    <option value="">Eloi de Souza</option>
                    <option value="">Bom Jesus</option>
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
                <label><input type="checkbox" >Ar Condicionado</label><br>
                <label><input type="checkbox" >Vidro Elétrico</label><br>
                <label><input type="checkbox" >Sensor</label><br>
                <label><input type="checkbox" >Direção</label><br>
                <label><input type="checkbox" >Som</label><br>
                <label><input type="checkbox" >Alarme</label><br>
                <label><input type="checkbox" >Travas</label><br>
                <div class="underline"></div>
            </div>
            <div class="input-field">
                Ano: <input type="text" placeholder="2000" maxlength="4">
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <p>Combustível:</p>
                <input type="radio" name="combustivel"> Flex 
                <input type="radio" name="combustivel"> Gasolina 
                <input type="radio" name="combustivel"> Etanol 
                <input type="radio" name="combustivel"> Diesel 
                <input type="radio" name="combustivel"> GNV 
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