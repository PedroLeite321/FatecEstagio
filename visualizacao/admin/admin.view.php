<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Estagio</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <nav class="topo-cont fixed-top  navbar navbar-expand-lg bg-secondary border border-bottom-1 border-left-0 border-right-0 border-top-0 border-dark mb-5">
        <div class="img-cont">
            <img class="img-logo img-fluid " style="width: 270px; height: auto " src="https://www.fatectatui.edu.br/site4/imagens/topoNovoRodape.png" alt="/">
        </div>
        <ul class=" nav nav-tabs ml-auto ">
            <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle nav-color hov-off text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Aluno</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Entrar</a>
                <a class="dropdown-item" href="#">Criar</a>
                <!-- <div class="dropdown-divider"></div> -->
                <!-- <a class="dropdown-item" href="#">Link isolado</a> -->
            </div>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle nav-color hov-off text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Empresa</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Entrar</a>
                <a class="dropdown-item" href="#">Criar</a>
                <!-- <div class="dropdown-divider"></div> -->
                <!-- <a class="dropdown-item" href="#">Link isolado</a> -->
            </div>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle nav-color hov-off text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Administrador</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Entrar</a>
                <a class="dropdown-item" href="#">Criar</a>
            </div>
            </li>
        </ul>
    </nav>
    <main class="mt-5 pt-5 ">
        <header>
            <div>
                <h1>Bem-Vindo, [nome Usuario!]</h1>
            </div>
        </header>
        <section>
            
        </section>
        <section>
            <div>
                <button>Aluno</button>
                <button>Empresa</button>
            </div>           
            <h2>Dashboard</h2>
            <div id="dashboard_area">

            </div>
        </section>
        <footer>
            <section class="">
                <div class="contato-ft">

                    <div class="contato-media d-inline-flex p-2 mb-2 ">
                        <a href="https://www.instagram.com/fatectatui/"><img style="width:30px; height:auto;" class="img-thumbnail img-fluid" src="./img/instagram.png" alt="instagram"></a>
                        <a href="https://www.facebook.com/fatectatui"><img style="width:30px; height:auto;" class="img-thumbnail img-fluid" src="./img/facebook.png" alt="instagram"></a>
                        <a href="https://www.youtube.com/@FatecTatui132"><img style="width:30px; height:auto;" class="img-thumbnail img-fluid" src="./img/youtube.png" alt="instagram"></a>
                    </div>

                    <div id="contact" class="contato-link">
                        <div class="item-ft mb-2">
                            <a href="https://www.fatectatui.edu.br/site4/contatonovo.php">
                            
                            <p class="mb-auto mt-auto "> <img style="width:30px; height:auto;" src="./img/mail.png" alt="email" class="img-thumbnail img-fluid"> f132.contato@fatec.sp.gov.br </p>
                            </a>
                        </div>
                        <div class="item-ft mb-2">
                            <a href="https://api.whatsapp.com/send?phone=0551532057782">
                            
                            <p class="mb-auto mt-auto mb-2 "><img style="width:30px; height:auto;" src="./img/whatsapp.png" alt="whatsapp" class="img-thumbnail img-fluid">(15) 3205-7782 (clique aqui)</p>
                            </a>
                        </div>
                    </div>
                </div>


                <div id="contact" class="contato-endereco mb-2">
                    <a style="text-decoration: none;" href="https://maps.app.goo.gl/6nBxtmy5BKCkd5MP7">
                    <p class="mb-2">Rod. Mario Batista Mori, 971</p>
                    <p>Jardim Aeroporto, Tatuí - SP</p>
                    </a>
                </div>
                <span class="linha"></span>
                    <p class="copy-ft">Todos os direitos reservados. 2023 Ⓒ.</p>
            </section>
            <section class="fixed-bottom" id="maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3663.59088875231!2d-47.87035858522078!3d-23.330597858995446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c5d8935fa04659%3A0x4c76d62eef12bce7!2sFatec+Tatu%C3%AD+-+Prof.+Wilson+Roberto+Ribeiro+de+Camargo+-+Faculdade+de+Tecnologia+de+Tatu%C3%AD!5e0!3m2!1spt-BR!2sbr!4v1554735489613!5m2!1spt-BR!2sbr" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen="">
                </iframe>
            </section>
        </footer>
    </main>
</body>
</html>