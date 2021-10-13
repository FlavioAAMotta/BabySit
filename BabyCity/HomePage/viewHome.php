<!DOCTYPE html>

<head>
    <title>HomePage</title>
</head>
<link rel="stylesheet" type="text/css" href="../css/stylepage2.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');

    a:any-link {
        color: black;
        background-color: transparent;
        text-decoration: none;
    }

    .f1 {
        width: 850.99px;
        height: 220px;
        left: 27px;
        top: 180px;
        font-weight: bolder;
        font-size: 40px;
    }

    .f2 {
        width: 259px;
        height: 99.73px;
        left: 27px;
        font-size: 20px;
        font-weight: bold;
        top: 390px;
    }

    .header {
        display: flex;
        justify-content: space-between;
        background-size: 100% auto;
        padding: 40px 20px;
    }

    .content {
        display: flex;
        justify-content: center;
        background-size: 100% auto;
        padding: 80px;
    }

    .bold {
        font-weight: bold;
    }

    .x1 {
        background-image: url(imagens/fundo.png);
        background-size: cover;
        background-position: center;
    }

    body {
        font-family: 'Poppins', sans-serif;
    }

    .navbar {
        display: flex;
        flex-direction: row;
        width: 100%;
        height: 100%;
        font-weight: bolder;
    }

    .space {
        margin: 50px;
    }

    .button {
        width: 210px;
        height: 75px;
        font-size: 20px;
        font-weight: bolder;
        border: 2px solid #000000;
        box-sizing: border-box;
        filter: drop-shadow(0px 5px 4px rgba(0, 0, 0, 0.3));
        border-radius: 50px;
        background: radial-gradient(100% 1081.68% at 0% 27.78%, #DCD6D6 5.21%, #D9C9D3 100%);
    }

    .button2 {
        width: 90px;
        height: 39px;
        font-size: 18px;
        outline: none;
        font-weight: bolder;
        border: 2px solid #000000;
        box-sizing: border-box;
        filter: drop-shadow(0px 5px 4px rgba(0, 0, 0, 0.3));
        border-radius: 50px;
        background: radial-gradient(100% 1081.68% at 0% 27.78%, #DCD6D6 5.21%, #D9C9D3 100%);
    }

    .imgheader {
        filter: drop-shadow(5px 5px 4px rgba(0, 0, 0, 0.5));
    }

    .cardboxes {
        display: flex;
        flex-direction: row;
        justify-content: center;
    }

    .boxdesign {
        background: radial-gradient(100% 1000% at 0% 0%, #B1D1E2 0%, #EABDBD 99.98%, #FFB8B8 99.99%, rgba(184, 214, 230, 0) 100%);
        filter: drop-shadow(6px 6px 10px rgba(2, 2, 2, 0.3));
        border-radius: 30px;
        width: 230px;
        height: 255px;
        margin: 40px;
    }

    .boxdesign img {
        position: relative;
        top: -51px;
        left: 64px;

    }

    .checked {
        color: #8BB8DB;
    }

    .starsposition {
        display: flex;
        flex-direction: row;
        justify-content: center;
        margin-top: -10px;
    }

    .boxcontent {
        display: flex;
        flex-direction: row;
    }

    .justifytxt {
        display: flex;
        flex-direction: row;
        padding-inline-start: 10px;
    }

    IMG.displayed {
        display: block;
        margin-left: auto;
        margin-right: auto;
        margin-top: 100px;
    }

    .fundos {
        background-image: url(imagens/elipses.png);
        background-size: cover;
        background-position: center;
        padding-bottom: 50px;

    }

    .z1 {
        text-align: center;
        margin-top: 10px;
    }

    .final {
        margin-top: 50px;
    }

    .a1 {
        background: linear-gradient(180deg, #E7F1F8 0%, rgba(200, 227, 247, 0) 100%);
        border: 2px solid #D8EDFC;
        filter: drop-shadow(7px 7px 10px rgba(1, 1, 1, 0.25));
        border-radius: 25px;
    }

    .a2 {
        background: linear-gradient(180deg, #E1DCF5 0%, rgba(226, 219, 253, 0) 100%);
        border: 2px solid rgba(200, 187, 250, 0.7);
        filter: drop-shadow(7px 7px 10px rgba(0, 0, 0, 0.25));
        border-radius: 25px;
    }

    .a3 {
        background: linear-gradient(180deg, #FFE2E6 0%, rgba(251, 224, 227, 0) 100%);
        border: 2px solid rgba(255, 205, 211, 0.7);
        filter: drop-shadow(7px 7px 10px rgba(0, 0, 0, 0.25));
        border-radius: 25px;
    }

    .cardF1 {
        text-align: center;

    }

    .cardF2 {
        text-align: center;


    }

    .cardF3 {
        text-align: center;


    }

    .p1 {
        margin-top: 20px;
    }

    .pesquisa {
        width: 500px;
    }

    #cidade {
        background-color: #ECE6E6;
    }
</style>

<body>
    <section class="x1">
        <div class="navbar">
            <div>
                <a href="">
                    <img src="imagens/logo.png">
                </a>
            </div>
            <div align="right" style="display: flex; flex-direction: row;">
                <div class="space">
                    <a href="">
                        <p>Como funciona</p>
                    </a>
                </div>
                <div class="space">
                    <a href="">
                        <p>Babás</p>
                    </a>
                </div>
                <div class="space">
                    <a href="">
                        <p>Cadastro</p>
                    </a>
                </div>
                <div class="space">
                    <button type="button" class="button2">Log in</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="header">
            <div>
                <div>
                    <p class="f1">A comunidade de cuidados infantis
                        em que você pode confiar
                        Encontre uma babá ou vaga de babá</p>
                    <p class="f2">Gratuito<br>
                        Serviço seguro<br>
                        Serviço de mensagens<br>
                    </p>
                </div>
                <div>
                    <button type="button" class="button">Ver Babás ➞</button>
                </div>
            </div>
            <div class="imgheader">
                <img src="imagens/baba.png">
            </div>
        </div>
    </section>
    <div class="content">
        <h1 class="bold">Avaliações</h1>
    </div>
    <div class="cardboxes">
        <div class="boxdesign">
            <img src="imagens/foto4.png" alt="baba4">
            <div class="starsposition">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
            </div>
            <div class="justifytxt">
                <p class="bold">Nome</p>
            </div>
            <div class="justifytxt">
                <p>Dia/Mês</p>
            </div>
            <div class="justifytxt">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
        <div class="boxdesign">
            <img src="imagens/foto2.png" alt="baba2">
            <div class="starsposition">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
            </div>
            <div class="justifytxt">
                <p class="bold">Nome</p>
            </div>
            <div class="justifytxt">
                <p>Dia/Mês</p>
            </div>
            <div class="justifytxt">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
        <div class="boxdesign">
            <img src="imagens/foto1.png" alt="baba1">
            <div class="starsposition">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
            </div>
            <div class="justifytxt">
                <p class="bold">Nome</p>
            </div>
            <div class="justifytxt">
                <p>Dia/Mês</p>
            </div>
            <div class="justifytxt">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
        <div class="boxdesign">
            <img src="imagens/foto3.png" alt="baba3">
            <div class="starsposition">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
            </div>
            <div class="justifytxt">
                <p class="bold">Nome</p>
            </div>
            <div class="justifytxt">
                <p>Dia/Mês</p>
            </div>
            <div class="justifytxt">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>

    </div>
    <div class="fundos">
        <div>
            <IMG class=" displayed" src="imagens/gps.png" alt="gps">
        </div>
        <div class="z1">
            <h1><b>Procure sua região</b></h1>
            <p>Você procura por:</p>
            <form>
                <input type="radio" id="pais" name="fav_language" value="PAIS">
                <label for="pais">Pais</label>
                <input type="radio" id="babas" name="fav_language" value="BABAS">
                <label for="babas">Babás</label><br>
                <input type="text" id="cidade" name="cidade" placeholder="Digite sua cidade">
            </form>
        </div>
    </div>
    <div class="final">
        <div>
            <h1><b>Tenha serviço rápido e de qualidade</b></h1>
        </div>
        <div class="d-flex justify-content-around" style="height: 500px; width: 1000px; margin:0 auto">
            <div class="a1 align-self-start p-2">
                <div class="cardF2">
                    <img src="imagens/Group.png" alt="group">
                </div>
                <div class="p1">
                    <p>Pesquise e encontre uma família ou babá na sua região.</p>
                </div>
            </div>
            <div class="a2 align-self-end p-2">
                <div class="cardF1">
                    <img src="imagens/image 8.png" alt="group">
                </div>
                <div class="p1">
                    <p>Pesquise e encontre uma família ou babá na sua região.</p>
                </div>
            </div>
            <div class="a3 align-self-start p-2">
                <div class="cardF3">
                    <img src="imagens/image9.png" alt="group">
                </div>
                <div class="p1">
                    <p>Pesquise e encontre uma família ou babá na sua região.</p>
                </div>
            </div>
        </div>


    </div>
</body>

</html>
