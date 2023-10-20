<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="./styles/aluno.css">
</head>

  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="container-topo">
      <div id="persona-topo">
        <a class="navbar-brand" href="#"><img src="./img/persona.png" width="46" height="46" class="d-inline-block align-self-center" alt="">
          PAVANELLI</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse " id="conteudoNavbarSuportado">
        <div id="barra-pesquisa-topo">
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Vagas Disponiveis" aria-label="Pesquisar">
            <button class="btn btn-outline-succes my-2 my-sm-0" type="submit">Pesquisar</button>
          </form>
        </div>
      </div>
      <div class="container-link-topo">
        <ul class="navbar-nav mr-auto link-buttom-topo">
          <li class="nav-item active">
            <a class="nav-link text-white" href="./index.html">Home <span class="sr-only">(página atual)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Link</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white disabled" href="#">Desativado</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Perfil</a>
              <a class="dropdown-item" href="#">Cadastro</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Configurações</a>
            </div>
          </li>
        </ul>
      </div>

    </nav>
    <header>


      <main>
        <div class="container-main mt-5">
          <div class="mural-vagas-main bg-primary">

            <!-- Mural de vagas 1 -->
            <div class="container ">
              <div class="row ml-auto mr-auto ">

                <!-- BLOCO NUMERO 1 -->

                <div class="rounded col-lg-6 vh-100 bg-primary text-white border border-white  pt-2 ">
                  <div class="text-center">
                    <h3>Microsoft Corp</h3>
                    <p><br></p>
                    <span>Salario:R$1.500,00</span>
                    <p><br></p>
                    <strong>Vaga: <span>Desenvolvedor</span></strong>
                    <p><br></p>
                    <strong class="search-curso">Curso: <span> GTI; ADS</span></strong>

                    <!-- MODAL -->
                    <!-- Botão para acionar modal -->
                    <p><br></p>
                    <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#ExemploModalCentralizado">
                      Ver Mais
                    </button>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade " id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content bg-primary">
                        <div class="modal-header">
                          <h1 class="modal-title ml-auto mr-auto" id="TituloModalCentralizado ">Vaga Disponivel</h1>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <!-- TESTE DE VAGAAAAAA MURAL -->

                          <div class="mural-vagas ">
                            <span id="primeira-vaga">
                              <h2 class="text-center">Microsoft Corp</h2>
                              <p><br></p>
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
                              <strong>Periodo inscrição: <span>10/10/23 á 17/10/23</span>
                            </span></strong>
                            <!-- TESTE DE VAGAAAAAA MURAL -->
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>

                            <!-- TESTE MODAL PARA PREENCHIMENTO DA VAGA -->

                            <!-- Botão para acionar modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalCandidatar">
                              Candidatar-se
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="ModalCandidatar" tabindex="-1" role="dialog" aria-labelledby="TituloModalLongoExemplo" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="TituloModalLongoExemplo">Título do modal</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <!-- TESTE DE FORMULARIO DENTRO DO MODAL -->

                                    <form>
                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="inputEmail4">Email</label>
                                          <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                        </div>
                                        <div class="form-group col-md-6">
                                          <label for="inputPassword4">Senha</label>
                                          <input type="password" class="form-control" id="inputPassword4" placeholder="Senha">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="inputAddress">Endereço</label>
                                        <input type="text" class="form-control" id="inputAddress" placeholder="Rua dos Bobos, nº 0">
                                      </div>
                                      <div class="form-group">
                                        <label for="inputAddress2">Endereço 2</label>
                                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartamento, hotel, casa, etc.">
                                      </div>
                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="inputCity">Cidade</label>
                                          <input type="text" class="form-control" id="inputCity">
                                        </div>
                                        <div class="form-group col-md-4">
                                          <label for="inputEstado">Estado</label>
                                          <select id="inputEstado" class="form-control">
                                            <option selected>Escolher...</option>
                                            <option>...</option>
                                          </select>
                                        </div>
                                        <div class="form-group col-md-2">
                                          <label for="inputCEP">CEP</label>
                                          <input type="text" class="form-control" id="inputCEP">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" id="gridCheck">
                                          <label class="form-check-label" for="gridCheck">
                                            Clique em mim
                                          </label>
                                        </div>
                                      </div>
                                      <button type="submit" class="btn btn-primary">Entrar</button>
                                    </form>


                                    <!-- TESTE DE FORMULARIO DENTRO DO MODAL -->
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                    <button type="button" class="btn btn-primary">oq é ossp</button>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <!-- TESTE MODAL PARA PREENCHIMENTO DA VAGA -->

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

                <!-- BLOCO NUMERO 2 -->

                <div class="rounded col-lg-6 vh-100 bg-primary text-white border border-white text-center pt-2">
                  <h3>Microsoft Corp</h3>
                  <p><br></p>
                  <span>Salario:R$1.500,00</span>
                  <p><br></p>
                  <strong>Vaga: <span>Desenvolvedor</span></strong>
                  <p><br></p>
                  <strong class="search-curso">Curso: <span> GTI; ADS</span></strong>

                  <!-- MODAL -->
                  <!-- Botão para acionar modal -->
                  <p><br></p>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ExemploModalCentralizado">
                    Ver Mais
                  </button>

                  <!-- Modal -->
                  <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content bg-primary">
                        <div class="modal-header">
                          <h1 class="modal-title ml-auto mr-auto" id="TituloModalCentralizado ">Vaga Disponivel</h1>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <!-- TESTE DE VAGAAAAAA MURAL -->

                          <div class="mural-vagas ">
                            <span id="primeira-vaga">
                              <h2 class="text-center">Microsoft Corp</h2>
                              <p><br></p>
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
                              <strong>Periodo inscrição: <span>10/10/23 á 17/10/23</span>
                            </span></strong>
                            <!-- TESTE DE VAGAAAAAA MURAL -->
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <button type="button" class="btn btn-primary">Candidatar-se</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- MURAL DE VAGAS 2 -->
            <div class="container">
              <div class="row">
                <div class="rounded col-lg-6 vh-100 bg-primary text-white border border-white text-center pt-2">
                  <h3>Microsoft Corp</h3>
                  <p><br></p>
                  <span>Salario:R$1.500,00</span>
                  <p><br></p>
                  <strong>Vaga: <span>Desenvolvedor</span></strong>
                  <p><br></p>
                  <strong class="search-curso">Curso: <span> GTI; ADS</span></strong>

                  <!-- MODAL -->
                  <!-- Botão para acionar modal -->
                  <p><br></p>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ExemploModalCentralizado">
                    Ver Mais
                  </button>

                  <!-- Modal -->
                  <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content bg-primary">
                        <div class="modal-header">
                          <h1 class="modal-title ml-auto mr-auto" id="TituloModalCentralizado ">Vaga Disponivel</h1>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <!-- TESTE DE VAGAAAAAA MURAL -->

                          <div class="mural-vagas ">
                            <span id="primeira-vaga">
                              <h2 class="text-center">Microsoft Corp</h2>
                              <p><br></p>
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
                              <strong>Periodo inscrição: <span>10/10/23 á 17/10/23</span>
                            </span></strong>
                            <!-- TESTE DE VAGAAAAAA MURAL -->
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <button type="button" class="btn btn-primary">Candidatar-se</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="rounded col-lg-6 vh-100 bg-primary text-white border border-white text-center pt-2">
                  <h3>Microsoft Corp</h3>
                  <p><br></p>
                  <span>Salario:R$1.500,00</span>
                  <p><br></p>
                  <strong>Vaga: <span>Desenvolvedor</span></strong>
                  <p><br></p>
                  <strong class="search-curso">Curso: <span> GTI; ADS</span></strong>

                  <!-- MODAL -->
                  <!-- Botão para acionar modal -->
                  <p><br></p>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ExemploModalCentralizado">
                    Ver Mais
                  </button>

                  <!-- Modal -->
                  <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content bg-primary">
                        <div class="modal-header">
                          <h1 class="modal-title ml-auto mr-auto" id="TituloModalCentralizado ">Vaga Disponivel</h1>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <!-- TESTE DE VAGAAAAAA MURAL -->

                          <div class="mural-vagas ">
                            <span id="primeira-vaga">
                              <h2 class="text-center">Microsoft Corp</h2>
                              <p><br></p>
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
                              <strong>Periodo inscrição: <span>10/10/23 á 17/10/23</span>
                            </span></strong>
                            <!-- TESTE DE VAGAAAAAA MURAL -->
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <button type="button" class="btn btn-primary">Candidatar-se</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- MURAL DE VAGAS 3 -->
            <div class="container">
              <div class="row">
                <div class="rounded col-lg-6 vh-100 bg-primary text-white border border-white text-center pt-2">
                  <h3>Microsoft Corp</h3>
                  <p><br></p>
                  <span>Salario:R$1.500,00</span>
                  <p><br></p>
                  <strong>Vaga: <span>Desenvolvedor</span></strong>
                  <p><br></p>
                  <strong class="search-curso">Curso: <span> GTI; ADS</span></strong>

                  <!-- MODAL -->
                  <!-- Botão para acionar modal -->
                  <p><br></p>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ExemploModalCentralizado">
                    Ver Mais
                  </button>

                  <!-- Modal -->
                  <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content bg-primary">
                        <div class="modal-header">
                          <h1 class="modal-title ml-auto mr-auto" id="TituloModalCentralizado ">Vaga Disponivel</h1>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <!-- TESTE DE VAGAAAAAA MURAL -->

                          <div class="mural-vagas ">
                            <span id="primeira-vaga">
                              <h2 class="text-center">Microsoft Corp</h2>
                              <p><br></p>
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
                              <strong>Periodo inscrição: <span>10/10/23 á 17/10/23</span>
                            </span></strong>
                            <!-- TESTE DE VAGAAAAAA MURAL -->
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <button type="button" class="btn btn-primary">Candidatar-se</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="rounded col-lg-6 vh-100 bg-primary text-white border border-white text-center pt-2">
                  <h3>Microsoft Corp</h3>
                  <p><br></p>
                  <span>Salario:R$1.500,00</span>
                  <p><br></p>
                  <strong>Vaga: <span>Desenvolvedor</span></strong>
                  <p><br></p>
                  <strong class="search-curso">Curso: <span> GTI; ADS</span></strong>

                  <!-- MODAL -->
                  <!-- Botão para acionar modal -->
                  <p><br></p>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ExemploModalCentralizado">
                    Ver Mais
                  </button>

                  <!-- Modal -->
                  <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content bg-primary">
                        <div class="modal-header">
                          <h1 class="modal-title ml-auto mr-auto" id="TituloModalCentralizado ">Vaga Disponivel</h1>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <!-- TESTE DE VAGAAAAAA MURAL -->

                          <div class="mural-vagas ">
                            <span id="primeira-vaga">
                              <h2 class="text-center">Microsoft Corp</h2>
                              <p><br></p>
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
                              <strong>Periodo inscrição: <span>10/10/23 á 17/10/23</span>
                            </span></strong>
                            <!-- TESTE DE VAGAAAAAA MURAL -->
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <button type="button" class="btn btn-primary">Candidatar-se</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- fim das vagas -->
          </div>
        </div>
      </main>





      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>