<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Estagio</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="./style/style.css">
</head>

<body>

  <header class="topo-cont fixed-top">
    <div class="img-cont">
      <img class="img-logo" src="./img/2TESTELOGO.svg" alt="/">
    </div>
    <ul class="nav nav-tabs justify-content-end align-self-center">
      <li class="nav-item">
        <a class="nav-link nav-color hov-off" href="#">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link nav-color hov-off" href="#color-cinza">Mural</a>
      </li>
      <li class="nav-item">
        <a class="nav-link nav-color hov-off" href="#documento-scroll">Documentos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link nav-color hov-off" href="#contato-scroll">Contato</a>
      </li>
      <li class="nav-item">
        <a type="button" class="btn text-white" data-toggle="modal" data-target="#login-modal">
          login
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle nav-color hov-off " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Criar</a>
        <div class="dropdown-menu">
          <a type="button" class="btn text-dark" data-toggle="modal" data-target="#aluno-modal">
            Aluno
          </a>
          <a type="button" class="btn text-dark" data-toggle="modal" data-target="#empresa-modal">
            Empresa
          </a>
        </div>
      </li>
    </ul>
  </header>
  <main>
    <div>
      <h1 class="mt-35 text-center">Novo Site do Programa de Estágio da Fatec Tatuí-SP: Uma Evolução para Nossa Comunidade Acadêmica</h1>
    </div>
    <div class="container text-start ">
      <div class="primeiro-conteudo">
        <h3 class="mt-3 mb-3 text-center">Caros alunos, professores e parceiros da Fatec Tatuí-SP</h3>
        <p class=" pt-2 ">
          É com grande entusiasmo que anunciamos o lançamento do nosso novo site do Programa de Estágio da Fatec Tatuí-SP! Este projeto representa um passo significativo em nossa jornada educacional, trazendo melhorias substanciais para o programa de estágio da faculdade.</p>
        <p>Este novo site é a culminação de nossos esforços para enriquecer a experiência de estágio de nossos alunos e fortalecer nossa parceria com as empresas locais. Acreditamos que essas melhorias ajudarão nossos alunos a desenvolver habilidades práticas e a dar os primeiros passos em suas carreiras de forma mais eficaz.</p>
        <p>
          Agradecemos a todos que contribuíram para tornar este projeto uma realidade e convidamos todos os membros de nossa comunidade acadêmica a explorar o novo site do Programa de Estágio da Fatec Tatuí-SP. Juntos, continuaremos a promover o crescimento e o sucesso de nossos alunos.</p>
      </div>
      <div class="container text-start border border-dark mb-5 " style="background-color: rgb(238, 236, 236);">
        <h3 class="mt-5 mb-5 text-center">O que há de novo no nosso site?</h3>
        <p><b> Facilidade de Navegação:</b> Agora, os alunos e empresas parceiras terão uma experiência de navegação mais intuitiva e amigável, permitindo que encontrem informações importantes de forma rápida e eficiente.
        </p>
        <p>
          <b>Acesso a Vagas de Estágio: </b> Nosso novo site será uma plataforma central para anunciar e encontrar vagas de estágio de empresas parceiras, garantindo que nossos alunos tenham acesso a oportunidades de aprendizado prático de qualidade.
        </p>
        <p>
          <b> Processo de Candidatura Simplificado:</b> Facilitamos o processo de candidatura para nossos alunos, tornando-o mais ágil e direto, para que vocês possam focar na busca pela melhor oportunidade de estágio.
        </p>
        <p>
          <b>Recursos de Orientação Profissional:</b> Ofereceremos recursos educacionais adicionais, como artigos, dicas e orientação para ajudar nossos alunos a se prepararem e se destacarem em suas jornadas de estágio.
        </p>
        <p>
          <b>Feedback e Avaliações:</b> Implementamos um sistema de feedback e avaliações para nossos estagiários, permitindo que tanto as empresas quanto os alunos compartilhem suas experiências e melhorem continuamente.
        </p>
        <p>
          <b>Comunicação Aprimorada:</b> Estaremos mais próximos de vocês, oferecendo atualizações regulares sobre oportunidades de estágio, eventos relacionados à carreira e notícias importantes.
        </p>

  </main>
  <section id="color-cinza">
    <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
      <div class="carousel-inner container ">
        <div class="carousel-item active ">
          <h1 class="text-center">Vagas Disponiveis</h1>
          <div class="mural-vagas ">
            <span id="primeira-vaga">
              <h2 class="text-center">Microsoft Corp</h2>
              <strong>Vaga:</strong>
              <p class="txt-small">Front-End Development</p>
              <p><br></p>
              <strong>Tipo de Vaga:</strong>
              <p class="txt-small">
                CLT
              </p>
              <p><br></p>
              <strong>Descrição:</strong>
              <p class="txt-small">
                Transforme designs em experiências web incríveis. Domine HTML, CSS e JavaScript para criar interfaces atraentes e responsivas. Junte-se a nós e impulsione a web com sua criatividade.
              </p>
              <p><br></p>
              <strong>Requisitos</strong>
              <ul>
                <li>5 anos de experiencia na area</li>
                <li>Cursando 3 semestre</li>
                <li>Ingles fluente</li>
              </ul>
              <p><br></p>
              <strong>beneficios</strong>
              <ul>
                <li>Salario: R$1.500,00</li>
                <li>Seguro de Vida</li>
                <li>Plano de Saude</li>
              </ul>
              <span>10/10/23</span>
            </span>
            <span id="primeira-vaga">
              <h2 class="text-center">Microsoft Corp</h2>
              <strong>Vaga:</strong>
              <p class="txt-small">Front-End Development</p>
              <p><br></p>
              <strong>Tipo de Vaga:</strong>
              <p class="txt-small">
                CLT
              </p>
              <p><br></p>
              <strong>Descrição:</strong>
              <p class="txt-small">
                Transforme designs em experiências web incríveis. Domine HTML, CSS e JavaScript para criar interfaces atraentes e responsivas. Junte-se a nós e impulsione a web com sua criatividade.
              </p>
              <p><br></p>
              <strong>Requisitos</strong>
              <ul>
                <li>5 anos de experiencia na area</li>
                <li>Cursando 3 semestre</li>
                <li>Ingles fluente</li>
              </ul>
              <p><br></p>
              <strong>beneficios</strong>
              <ul>
                <li>Salario: R$1.500,00</li>
                <li>Seguro de Vida</li>
                <li>Plano de Saude</li>
              </ul>
              <span>10/10/23</span>
            </span>
          </div>
        </div>
        <div class="carousel-item">
          <h1 class="text-center">Vagas Disponiveis</h1>
          <div class="mural-vagas ">
            <span id="primeira-vaga">
              <h2 class="text-center">Microsoft Corp</h2>
              <strong>Vaga:</strong>
              <p class="txt-small">Front-End Development</p>
              <p><br></p>
              <strong>Tipo de Vaga:</strong>
              <p class="txt-small">
                CLT
              </p>
              <p><br></p>
              <strong>Descrição:</strong>
              <p class="txt-small">
                Transforme designs em experiências web incríveis. Domine HTML, CSS e JavaScript para criar interfaces atraentes e responsivas. Junte-se a nós e impulsione a web com sua criatividade.
              </p>
              <p><br></p>
              <strong>Requisitos</strong>
              <ul>
                <li>5 anos de experiencia na area</li>
                <li>Cursando 3 semestre</li>
                <li>Ingles fluente</li>
              </ul>
              <p><br></p>
              <strong>beneficios</strong>
              <ul>
                <li>Salario: R$1.500,00</li>
                <li>Seguro de Vida</li>
                <li>Plano de Saude</li>
              </ul>
              <span>10/10/23</span>
            </span>
            <span id="primeira-vaga">
              <h2 class="text-center">Microsoft Corp</h2>
              <strong>Vaga:</strong>
              <p class="txt-small">Front-End Development</p>
              <p><br></p>
              <strong>Tipo de Vaga:</strong>
              <p class="txt-small">
                CLT
              </p>
              <p><br></p>
              <strong>Descrição:</strong>
              <p class="txt-small">
                Transforme designs em experiências web incríveis. Domine HTML, CSS e JavaScript para criar interfaces atraentes e responsivas. Junte-se a nós e impulsione a web com sua criatividade.
              </p>
              <p><br></p>
              <strong>Requisitos</strong>
              <ul>
                <li>5 anos de experiencia na area</li>
                <li>Cursando 3 semestre</li>
                <li>Ingles fluente</li>
              </ul>
              <p><br></p>
              <strong>beneficios</strong>
              <ul>
                <li>Salario: R$1.500,00</li>
                <li>Seguro de Vida</li>
                <li>Plano de Saude</li>
              </ul>
              <span>10/10/23</span>
            </span>
          </div>
        </div>
        <div class="carousel-item">
          <h1 class="text-center">Vagas Disponiveis</h1>
          <div class="mural-vagas ">
            <span id="primeira-vaga">
              <h2 class="text-center">Microsoft Corp</h2>
              <strong>Vaga:</strong>
              <p class="txt-small">Front-End Development</p>
              <p><br></p>
              <strong>Tipo de Vaga:</strong>
              <p class="txt-small">
                CLT
              </p>
              <p><br></p>
              <strong>Descrição:</strong>
              <p class="txt-small">
                Transforme designs em experiências web incríveis. Domine HTML, CSS e JavaScript para criar interfaces atraentes e responsivas. Junte-se a nós e impulsione a web com sua criatividade.
              </p>
              <p><br></p>
              <strong>Requisitos</strong>
              <ul>
                <li>5 anos de experiencia na area</li>
                <li>Cursando 3 semestre</li>
                <li>Ingles fluente</li>
              </ul>
              <p><br></p>
              <strong>beneficios</strong>
              <ul>
                <li>Salario: R$1.500,00</li>
                <li>Seguro de Vida</li>
                <li>Plano de Saude</li>
              </ul>
              <span>10/10/23</span>
            </span>
            <span id="primeira-vaga">
              <h2 class="text-center">Microsoft Corp</h2>
              <strong>Vaga:</strong>
              <p class="txt-small">Front-End Development</p>
              <p><br></p>
              <strong>Tipo de Vaga:</strong>
              <p class="txt-small">
                CLT
              </p>
              <p><br></p>
              <strong>Descrição:</strong>
              <p class="txt-small">
                Transforme designs em experiências web incríveis. Domine HTML, CSS e JavaScript para criar interfaces atraentes e responsivas. Junte-se a nós e impulsione a web com sua criatividade.
              </p>
              <p><br></p>
              <strong>Requisitos</strong>
              <ul>
                <li>5 anos de experiencia na area</li>
                <li>Cursando 3 semestre</li>
                <li>Ingles fluente</li>
              </ul>
              <p><br></p>
              <strong>beneficios</strong>
              <ul>
                <li>Salario: R$1.500,00</li>
                <li>Seguro de Vida</li>
                <li>Plano de Saude</li>
              </ul>
              <span>10/10/23</span>
            </span>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev " href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
      </a>
    </div>
  </section>
  <section class="bg-light pt-2 pb-5 ml-auto mr-auto container justify-content-center" id="documento-scroll">
    <h1 class="text-uppercase text-center mt-5">documentação</h1>
    <div class="">
      <h3 class="text-uppercase text-center mt-5">diciplina estágio</h3>
      <div class="pt-2 ">
        <p class="text-start ">Caro(a) estudante. Os alunos regularmente matriculados na Disciplina de Estágio e/ou Práticas Profissionais serão inseridos no começo do Semestre em uma Sala do Teams para desenvolvimento da Disciplina. Portanto, fique atento quanto a essa movimentação e qualquer dúvida, faça contato com o setor, através do <b>f132.estagio@fatec.sp.gov.br</b>

        <p>Os formulários são configurados com o Calendário Acadêmico. Portanto, estarão fechados fora do período indicado para cada atividade.</p>
        </p>

        <!-- Botão para acesso ao documentos -->
        <h1 class="text-center mb-5">Estágios e/ou Práticas Profissionais</h1>
        <div class="box-cont flex-wrap justify-content-center">

          <a href="/">
            <div class="box-doc cor--cinza text-center">
              <p> Apresentação da Disciplina</p>
            </div>
          </a>
          <a href="/">
            <div class="box-doc cor--cinza text-center">
              <p>Declaração para Fins de Estágio</p>
            </div>
          </a>
          <a href="/">
            <div class="box-doc cor--cinza text-center">
              <p> Modelos e Documentos de Estágio e/ou Práticas Profissionais
              </p>
            </div>
          </a>
          <a href="/">
            <div class="box-doc cor--cinza text-center">
              <p> Estágios no Guia do Estudante</p>
            </div>
          </a>

        </div>
        <h1 class="text-center mt-5 mb-5">Programa de Estágios</h1>
        <div class="box-cont flex-wrap justify-content-center">

          <a href="/">
            <div class="box-doc cor--cinza text-center">
              <p> Programa de Estágios - Avaliação das Empresas</p>
            </div>
          </a>
          <a href="/">
            <div class="box-doc cor--cinza text-center">
              <p> Programa de Estágios - Autoavaliação (estagiários) </p>
            </div>
          </a>
          <a href="/">
            <div class="box-doc cor--cinza text-center">
              <p> Programa de Estágios- Captação de Talentos</p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
  <section id="maps">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3663.59088875231!2d-47.87035858522078!3d-23.330597858995446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c5d8935fa04659%3A0x4c76d62eef12bce7!2sFatec+Tatu%C3%AD+-+Prof.+Wilson+Roberto+Ribeiro+de+Camargo+-+Faculdade+de+Tecnologia+de+Tatu%C3%AD!5e0!3m2!1spt-BR!2sbr!4v1554735489613!5m2!1spt-BR!2sbr" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen="">
    </iframe>
  </section>
  <!-- Modal de login, aluno e empresa -->

  <section id="modal-config">
  <!-- Modal login-->
  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header ">
          <h5 class="modal-title text-center" id="TituloModalCentralizado">Bem Vindo á Fatec Estagios</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Senha</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" placeholder="Senha">
              </div>
            </div>
            <fieldset class="form-group">
              <div class="row">
                <div class="col-sm-10">
                </div>
              </div>
            </fieldset>
            <div class="form-group row">
              <!-- dimensionamento do modal -->
              <div class="col-sm-10">
              </div>
            </div>
            <div class="form-group row">

            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          <button type="submit" class="btn btn-primary">Entrar</button>
        </div>
      </div>
    </div>
  </div>
  <!-- modal login -->
  <!-- Criar conta aluno -->
  <div class="modal fade" id="aluno-modal" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="TituloModalCentralizado">Criar Conta Aluno</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>

            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
              <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Senha</label>
              <input type="password" class="form-control" id="inputPassword3" placeholder="Senha">
            </div>
            <div class="form-group row">
              <label for="confirma_senha">Confirme a Senha:</label>
              <input type="password" class="form-control" id="confirma_senha" name="confirma_senha" placeholder="Confirmar Senha" required>
            </div>
            <div class="form-group row">
              <label for="empresa">Nome Aluno:</label>
              <input type="text" class="form-control" id="empresa" name="empresa" placeholder="Maria"><br>
            </div>
            <fieldset class="form-group">
              <div class="row">
                <div class="col-sm-10">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="opcao1" checked>
                    <label class="form-check-label" for="gridRadios1">
                      Masculino
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="opcao2">
                    <label class="form-check-label" for="gridRadios2">
                      Feminino
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="opcao3">
                    <label class="form-check-label" for="gridRadios3">
                      Outros
                    </label>
                  </div>
                </div>
              </div>
            </fieldset>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          <button type="submit" class="btn btn-primary">Entrar</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Criar conta aluno -->

  <!-- empresa modal -->
  <div class="modal fade" id="empresa-modal" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="TituloModalCentralizado">Criar conta empresa</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>

            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
              <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Senha</label>
              <input type="password" class="form-control" id="inputPassword3" placeholder="Senha">
            </div>
            <div class="form-group row">
              <label for="confirma_senha">Confirme a Senha:</label>
              <input type="password" class="form-control" id="confirma_senha" name="confirma_senha" placeholder="Confirmar Senha" required>
            </div>
            <div class="form-group row">
              <label for="empresa">Nome da Empresa:</label>
              <input type="text" class="form-control" id="empresa" name="empresa" placeholder="Microsoft"><br>
            </div>
            <fieldset class="form-group">
              <div class="row">
                <div class="col-sm-10">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="opcao1" checked>
                    <label class="form-check-label" for="gridRadios1">
                      Pequeno
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="opcao2">
                    <label class="form-check-label" for="gridRadios2">
                      Medio
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="opcao3">
                    <label class="form-check-label" for="gridRadios3">
                      Grande
                    </label>
                  </div>
                </div>
              </div>
            </fieldset>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          <button type="submit" class="btn btn-primary">Entrar</button>
        </div>
      </div>

    </div>
  </div>
  </div>
  <!-- empresa modal -->
</section>
  <!-- Modal de login, aluno e empresa -->
  <footer>
    <div class="cont-ft" id="contato-scroll">
      <div class="img-logo-ft">
        <img src="./img/LogoTeste.svg" alt="logofooter">
      </div>
      <div class="contato-ft">

        <div class="contato-media">
          <a href="https://www.instagram.com/fatectatui/"><img src="./img/instagram.png" alt="instagram"></a>
          <a href="https://www.facebook.com/fatectatui"><img src="./img/facebook.png" alt="instagram"></a>
          <a href="https://www.youtube.com/@FatecTatui132"><img src="./img/youtube.png" alt="instagram"></a>
        </div>

        <div id="contact" class="contato-link">
          <div class="item-ft ">
            <a href="https://www.fatectatui.edu.br/site4/contatonovo.php">
              <img src="./img/mail.png" alt="email">
              <p class="mb-auto mt-auto">f132.contato@fatec.sp.gov.br </p>
            </a>
          </div>
          <div class="item-ft">
            <a href="https://api.whatsapp.com/send?phone=0551532057782">
              <img src="./img/whatsapp.png" alt="whatsapp">
              <p class="mb-auto mt-auto ">(15) 3205-7782 (clique aqui)</p>
            </a>
          </div>
        </div>
      </div>

      <div id="contact" class="contato-endereco">
        <a style="text-decoration: none;" href="https://maps.app.goo.gl/6nBxtmy5BKCkd5MP7">
          <p>Rod. Mario Batista Mori, 971 <br>
            Jardim Aeroporto, Tatuí - SP</p>
        </a>
      </div>
      <span class="linha"></span>
      <p class="copy-ft">Todos os direitos reservados. 2023 Ⓒ.</p>
  </footer>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>