<?php
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="toop.css" />
    <title>projeto</title>
</head>

<style>
    body {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
        width: 100vw;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    header {
        width: 100vw;
        height: 90px;
        background-color: #8275da;
        text-align: center;
        position: fixed;
        top: 0;
        display: flex;
        justify-content: flex-end;
        align-items: center;
    }

    h1 {
        color: black;
        font-size: 24px;
        padding: 20px;
    }

    h1:hover {
        color: white;
        cursor: pointer;
    }

    .section {

        height: calc(100vh - 180px);
        /*soma os px do header do footere subtrai*/
        background-color: white;
        width: 100%;
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        padding: 50px;
        margin: 50px;
    }

    .caixa {
        width: 100vw;
        align-items: center;
        display: flex;
        justify-content: center;

    }

    .caixa2 {
        width: 100vw;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    img {
        border-radius: 5px;

    }

    .aline {
        border-radius: 100px;
    }

    .foto {
        padding: 25px;
    }

    .contato {
        align-items: center;
        justify-content: flex-start;
        font-size: 30px;
    }

    h5 {
        margin-left: 20px;
    }

    .input1 {
        width: 400px;
        height: 40px;
        margin-left: 20px;
        margin-top: 10px;
        border-radius: 20px;
        background-color: none;
        font-weight: bold;
        font-size: 15px;
        cursor: pointer;
        padding: 12px;
        border: 2px solid #836FFF;
    }

    input {
        padding: 0px;
        margin: 0px;
    }

    .botao1 {
        width: 150px;
        margin-top: 10px;
        font-weight: bold;
        border-radius: 20px;
        height: 50px;
        border: 2px solid #836FFF;
    }

    .salvar:hover {
        background-color: green;
        cursor: pointer;
    }

    .login {
        align-items: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }


    .conta {
        align-items: center;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .quadrado {
        background-color: #dabaec;
        width: 300px;
        display: flex;
        height: 500px;
        justify-content: center;
        flex-direction: column;
        align-items: center;
        border-radius: 20px;
        box-shadow: 3px 3px 3px 3px #eeee;

    }

    .digitar {
        width: 250px;
        height: 20px;
        margin: 20px;
        background-color: none;
        font-weight: bold;
        font-size: 15px;
        cursor: pointer;
        padding: 12px;
        border: none;
        border-radius: 20px;
    }

    .botao {
        width: 250px;
        height: 40px;
        padding: 12px;
        font-size: 15px;
        background-color: rgb(70, 5, 66);
        border: none;
        margin-top: 10px;
        color: white;
        border-radius: 20px;
    }

    .botao:hover {
        background-color: rgb(46, 63, 46);
        cursor: pointer;
    }

    h7 {
        color: black;
        font-size: 30px;
        font-weight: bold;

    }

    .cadastro {
        background-color: white;
        display: flex;
        flex-direction: column;
    }

    .osdois {
        background-color: white;
        width: 600px;
        display: flex;
        flex-direction: row;
        margin: 10px;
    }

    .esquerdo {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: justify;
        margin: 10px;
    }

    .nome {
        width: 250px;
        height: 20px;
        margin-top: 10px;
        border-radius: 5px;
        background-color: rgb(231, 202, 231);
        font-weight: bold;
        font-size: 15px;
        cursor: pointer;
        padding: 12px;
        border: none;
    }

    .botao3 {
        padding: 12px;
        font-size: 15px;
        background-color: rgb(231, 202, 231);
        border: none;
        margin-top: 10px;
        color: black;
        border-radius: 5px;
        font-weight: bold;
        margin-left: 5px;
        text-align: center;

    }

    .botao3:hover {
        background-color: rgb(48, 6, 58);
        cursor: pointer;
    }

    .botoes {
        background-color: white;
        width: 600px;
        height: 80px;
        display: flex;
        flex-direction: row;
        justify-content: flex-start;
        align-items: center;
        margin-left: 320px;
    }

    h10 {
        color: black;
        font-size: 24px;
        padding: 20px;
        font-weight: bold;
    }

    .textoefoto {
        display: flex;
        align-items: center;
        flex-direction: row;
        justify-content: center;
        margin: 20px;
    }

    .texto {
        width: 500px;
        font-size: 20px;
    }

    .imagem {
        margin-left: 20px;
    }

    .edu {
        border-radius: 10px;
    }

    .formulario {
        display: flex;
        align-items: center;
        flex-direction: row;
        justify-content: center;
        border: 2px dotted rgb(231, 202, 231);
    }

    .texto2 {
        border: 2px solid black;
        margin-left: 20px;
    }

    fieldset {
        border: none;
    }

    h20 {
        margin-top: 200px;
        font-size: 18px;
        color: rgb(70, 68, 68);
    }

    .foto {
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
    }

    label {
        color: #5b4cbb;
        font-weight: bold;
    }

    .icon {
        display: flex;
        justify-content: flex-start;
    }
</style>

<body>

    <header>
        <div class="icon">
            <img class="icones" src="icon.png" title="logomarca" alt="logomeninas" width="150px" height="50px">
        </div>
        <h1>Home</h1>
        <h1>Trabalhos</h1>
        <h1>Sobre</h1>
        <h1>Contato</h1>
        <h1>Avaliação</h1>

    </header>


    <div class="section">
        <h7>Home</h7>
        <img class="aline" src="aline.png" title="logomarca" alt="logomeninas" width="600px">
    </div>


    </div>

    <div class="section duas">

        <h10>Trabalhos</h10>
        <div class="caixa">
            <div class="foto">
                <label>Gestante</label>
                <img src="gestante.jpg" title="logomarca" alt="ny" width="200px" height="270px">
            </div>
            <div class="foto">
                <label>Aniversário</label>
                <img src="niver.jpg" title="logomarca" alt="bh" width="200px" height="270px">
            </div>
            <div class="foto">
                <label>Mêsversarios</label>
                <img src="mensal.jpg" title="logomarca" alt="ny" width="200px" height="275px">
            </div>
        </div>
        <div class="caixa2">
            <div class="foto">
                <label>Família</label>
                <img src="Familia.jpg" title="logomarca" alt="rio" width="300px" height="300">
            </div>
            <div class="foto">
                <label>Eventos</label>
                <img src="evento.jpg" title="logomarca" alt="bh" width="300px" height="300px">
            </div>
            <div class="foto">
                <label>NewBorn</label>
                <img src="new.jpg" title="logomarca" alt="rio" width="300px" height="300px">
            </div>
        </div>
    </div>


    <div class="section contato">
        <h5>Sobre</h5>
        <div class="textoefoto">
            <div class="texto">
                <p>O Estúdio ad foi criado em 07/02/2023 com o intuito de proporcionar aos seus clientes a oportunidade
                    de
                    eternizar os momentos mais incríveis na vida de cada um, seja a chegada de mais um integrante da
                    família, os tão sonhados 15 anos, os momentos mais felizes e deliciosos da vida ou por simplesmente
                    querer eternizar momentos incríveis!</p>
                <p>Para que tudo isso se torne realidade, trabalhamos com uma equipe especializada em cada etapa da sua
                    experiência de fotografar com a gente.</p>
                <p>As Sócias:
                    Mesmo atuando no ramo da fotografia há pouco tempo, trazem profissionais dedicadas que
                    amam aquilo que fazem.</p>
                <p>Os fotógrafos:
                    Temos profissionais especializados em Design Gráfico, Ensaios femininos, Gestantes, Newborn, Eventos
                    entre outros. Com todo seu conhecimento e dedicação, eles proporcionam aos seus clientes uma
                    experiência
                    fotográfica
                    única, divertida e muito especial!</p>
            </div>
            <div class="imagem">
                <img class="edu" src="edu.webp" title="logomarca" alt="ny" width="400px" height="700px">
            </div>
        </div>
    </div>

    <div class="section login">
        <h7>Contatos: (35) 99729-7389</h7>
        <p>Email: 893473@senacminas.edu.br</p>
        <div class="formulario">
            <div class="esquerdo">
                <label>Nome completo</label>
                <input class="nome" type="text" placeholder="..." />
                <label>Telefone</label>
                <input class="nome" type="number" placeholder="(00) 00000-0000" />
                <label>Email</label>
                <input class="nome" type="email" placeholder="exemplo@gmail.com:" />
                <p>Qual serviço você deseja solicitar?</p>
                <fieldset>
                    <input class="digi" type="checkbox" value="eventos"> Gestante<br>
                    <input class="digi" type="checkbox" value="Familia"> Eventos<br>
                    <input class="digi" type="checkbox" value="Familia"> Família<br>
                    <input class="digi" type="checkbox" value="newborn"> NewBorn<br>
                    <input class="digi" type="checkbox" value="mensal"> Mensal Baby<br>
                    <input class="digi" type="checkbox" value="niver"> Aniversario<br>

                </fieldset>
            </div>
        </div>
        <div class="botoes">
            <button class="botao3" onclick="alert('Salvou')">Cadastrar</button>
        </div>
    </div>
    </div>

    <div class="section conta">
        <h7>Avaliação</h7>
        <div class="quadrado">
            <form>
                <p>Como você avalia nosso serviço?</p>
                <fieldset>
                    <input class="digitar" type="radio" value="ruim"> Precisa melhorar!<br>
                    <input class="digitar" type="radio" value="bom"> Bom!<br>
                    <input class="digitar" type="radio" value="muitobom"> Muito bom!<br>
                </fieldset>
            </form>
        </div>
        <h20>2023 Lavras-MG - Eduarda Sousa e Aline Furtado</h20>
    </div>


</body>

</html>
?>