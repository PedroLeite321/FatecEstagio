<form>
    <div class="form-group row">
    <!-- LOGIN AREA -->
    <label for="signUpEmail" class="col-sm-2 col-form-label font-weight-bold">Email:</label>
    <div class="col-sm-10">
        <input type="email" class="form-control" id="signUpEmail" placeholder="Email" name="signUpEmail">
    </div>
    </div>
    <div class="form-group row">
    <label for="signInPassword" class="col-sm-2 col-form-label font-weight-bold">Senha:</label>
    <div class="col-sm-10">
        <input type="password" class="form-control" id="signUpPassword" name="signUpPassword" placeholder="senha">
    </div>
    </div>
    <div class="form-group d-flex flex-row">
    <p class="pt-2 font-weight-bold font-italic ml-1">Ainda não possui conta?</p>
    <div class="row">
        <p class="ml-3 font-weight-">Criar conta: <button type="button" class="btn p-2 btn-outline-primary text-dark text-center" data-toggle="modal" data-target="#aluno-modal" data-dismiss="modal">
            Aluno
        </button>
        <button type="button" class="btn btn-outline-danger text-dark text-center p-2 " data-toggle="modal" data-target="#empresa-modal" data-dismiss="modal">
            Empresa
        </button>
        </p>
    </div>
    </div>
    <fieldset class="form-group">
    <div class="row">
        <div class="col-sm-10">
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary">Entrar</button>
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