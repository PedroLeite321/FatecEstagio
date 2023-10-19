<form method="post" action="./scripts/php/login_cadastro/cadastro.aluno.php">

            <div class="form-group row">
                <label for="signInAluno_Email" class="col-sm-2 col-form-label">Email</label>
                <input type="email" class="form-control" id="signInAluno_Email"  name="signInAluno_Email"  placeholder="Email" required>
            </div>
            <div class="form-group row">
                <label for="signInAluno_Password" class="col-sm-2 col-form-label">Senha</label>
                <input type="password" class="form-control" id="signInAluno_Password" name="signInAluno_Password" placeholder="Senha" required>
            </div>
            <div class="form-group row">
                <label for="confirmAluno_Password2">Confirme a Senha:</label>
                <input type="password" class="form-control" id="confirmAluno_Password" name="confirmAluno_Password2" placeholder="Confirmar Senha" required>
            </div>
            <div class="form-group row">
                <label for="alunoName" class="col-sm-2 col-form-label">Nome</label>
                <input type="text" class="form-control" id="alunoName" name="alunoName" placeholder="Maria"><br>
            </div>
            <div class="form-group row">
                <label for="dataNascimento" class="col-sm-2 col-form-label">Data de Nascimento</label>
                <input type="text"  class="form-control" name="dataNascimento" id="">
            </div>
            <div class="form-group row">
                <label for="telefone" class="col-sm-2 col-form-label">Telefone</label>
                <input type="tel" class="form-control" name="telefone" id="">
            </div>
            <div class="form-group row">
                <label for="periodo" class="col-sm-2 col-form-label">Periodo</label>
                <input type="text"  class="form-control" name="periodo" id="">
            </div>
            <div class="form-group row">
                <label for="semestre" class="col-sm-2 col-form-label">Semestre</label>
                <input type="text"  class="form-control" name="semestre" id="">
            </div>
            <fieldset class="form-group">
                <div class="row">
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="opcao1"checked >
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
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">Entrar</button>
            </div>
          </form>