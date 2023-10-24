<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Alexandre Silva">
    <meta name="description"
        content="Fork do site Clube TRES para a disciplina de Programação Web II, do professor Renan Praxedes">

    <title>Clube TRES</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;700&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/clube_tres_video_branco.png" type="image/x-icon">
</head>
<body style="min-width: 575px;">

    <div class="container-fluid">
        <div class="row navbar">
            <div class="row">
                <div class="col logo-navbar py-2">
                    <a href="/"><img src="images/home/logotres.png" alt="logo TRES"></a>
                </div>
                <div class="col-auto py-4">
                    <div class="col">
                        <a class="nav-item" id="sobre">SOBRE A TRES®</a>
                        <a class="nav-item" id="sac">SAC</a>
                        <button type="button" class="btn btn-comprar nav-item ms-5">COMPRAR</button>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb-2">
                <div class="col-md-10 col-lg-8 d-flex justify-content-between align-items-center">
                    <div class="col-auto"><a href="" class="ico-navbar"><img src="images/home/ico_login.png" alt="Login" style="width: 49px; height: 34px;"><span>LOGIN</span></a></div>
                    <div class="col-auto"><a href="/como-participar" class="ico-navbar"><img src="images/home/ico_participar.png" alt="Participar" style="width: 32px; height: 38px;"><span>BENEFÍCIOS</span></a></div>
                    <div class="col-auto"><a href="" class="ico-navbar"><img src="images/home/ico_cadastro.png" alt="Cadastro" style="width: 33px; height: 38px;"><span>CADASTRE-SE</span></a></div>
                    <div class="col-auto"><a href="/regulamento" class="ico-navbar"><img src="images/home/ico_regulamento.png" alt="Regulamento" style="width: 33px; height: 38px;"><span>REGULAMENTO</span></a></div>
                    <div class="col-auto"><a href="/reciclagem" class="ico-navbar"><img src="images/home/ico_reciclagem.png" alt="Reciclagem" style="width: 32px; height: 38px;"><span>RECICLAGEM</span></a></div>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-5 banner" style="height: 500px">
                <img src="images/clube_tres_video_branco.png" alt="Clube TRES" class="img-banner mt-5 col-md-4 col-6">
                <h2 class="fs-5 mt-3 overflow-hiddden">Programa de benefícios para quem é apaixonado por sabores.</h2>
                <p>Novidades em primeira mão, descontos em produtos, conteúdo exclusivo e muito mais.</p>
                <a href="">CLIQUE E PARTICIPE!</a>
            </div>
            <div class="col-7 p-0" style="height: 500px; position: relative;">
                <img src="images/banner_home.jpg" class="h-100 w-100 object-fit-cover" alt="Clube TRES Evoluiu" style="object-position: right;">
            </div>
        </div>
    </div>

    <div class="container">

        <div class="row justify-content-center mt-2 mb-5">
            <div class="col-md-8">
                <h3 class="txt-1">
                    Bem-vindo(a) ao clube
                    <img src="images/logo-tres.png" alt="TRES">
                    <br>
                    a melhor <span>experiência</span> 
                    em cafés espresssos e multibebidas.
                </h3>
            </div>
        </div>

        <div class="row justify-content-center mt-2 mb-5">
            <div class="col-md-8">
                <p class="txt-2">
                    No <span>Clube Tres®</span> 
                    você faz parte de um Programa de benefícios exclusivos desenvolvidos 
                    para quem é apaixonado por sabores de café.
                </p>
            </div>
        </div>

        <div class="row justify-content-center mb-3">
            <div class="col-auto">
                <button type="button" class="btn btn-1">
                    PARTICIPE AGORA
                </button>
            </div>
        </div>

        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <p class="txt-3">
                    QUANTO MAIS VOCÊ PARTICIPAR, <br>
                    MAIS <span>VANTAGENS</span> E <span>BENEFÍCIOS</span> VOCÊ RECEBE.
                </p>
            </div>
        </div>

    </div>

    <div class="container-fluid">

        <div class="row justify-content-between">
            <div class="col-6 ps-0 pe-md-3 pe-0 pb-md-3 pb-0 beneficios-pai">
                <div class="col beneficios" id="beneficio1">
                    <div class="col-auto d-flex flex-column align-items-center">
                    <img class="img-fluid beneficios-img mb-3" src="images/cifra_dinheiro.png" alt="cifra">
                    <h2 class="col text-center">descontos especiais</h2>
                    </div>
                </div>
            </div>
            <div class="col-6 pe-0 ps-md-3 ps-0 pb-md-3 pb-0 beneficios-pai">
                <div class="col beneficios" id="beneficio2">
                    <div class="col-auto d-flex flex-column align-items-center">
                    <img class="img-fluid beneficios-img mb-3" src="images/diamante.png" alt="">
                    <h2 class="col text-center">benefícios exclusivos</h2>
                    </div>
                </div>
            </div>
            <div class="col-6 ps-0 pe-md-3 pe-0 pt-md-3 pt-0 beneficios-pai">
                <div class="col beneficios" id="beneficio3">
                    <div class="col-auto d-flex flex-column align-items-center">
                    <img class="img-fluid beneficios-img mb-3" src="images/mensagem.png" alt="">
                    <h2 class="col text-center">novidades da Tres®<br>em primeira mão</h2>
                    </div>
                </div>
            </div>
            <div class="col-6 pe-0 ps-md-3 ps-0 pt-md-3 pt-0 beneficios-pai">
                <div class="col beneficios" id="beneficio4">
                    <div class="col-auto d-flex flex-column align-items-center">
                    <img class="img-fluid beneficios-img mb-3" src="images/pc.png" alt="">
                    <h2 class="col text-center">pré-compra<br>de lançamentos</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container">

        <div class="row pt-5 pb-4">
            <p class="txt-4">e muito mais...</p>
        </div>

    </div>

    <div class="container-fluid">

        <div class="row">
            <img src="images/banner_novas_regras_2.jpg" alt="novas regras" class="col-12">
            <div class="col-6 d-flex justify-content-center py-3" style="background-color: var(--marrom);"><span class="footer-txt">escolha <span>tres</span></span></div>
            <div class="col-6 d-flex justify-content-center py-3" style="background-color: var(--escuro);"><span class="footer-txt">comprar</span></div>
        </div>

        <div class="row" style="background-color: #230c00">
            <div class="row justify-content-center">
                <div class="col-auto p-0 m-0 pt-3"><span style="width: fit-content; color: var(--claro)">política de privacidade &nbsp|</span></div>
                <div class="col-auto p-0 m-0 pt-3"><span style="width: fit-content; color: var(--claro)">&nbsp portal de privacidade</span></div>
            </div>
            <div class="row">
                <div class="col p-0 m-0 d-flex justify-content-center"><img src="images/footer-mobile.png" alt="footer" class=""></div>
            </div>
        </div>

    </div>
</body>
</html>