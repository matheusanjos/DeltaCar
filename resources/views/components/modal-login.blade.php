<div id="modalLogin" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modalLoginLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header px-4 pb-4">
                <h4 class="modal-title">Login</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body p-4">
                <form action="" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="email" name="loginEmail" class="form-control" required>
                        <label for="loginEmail">E-mail</label>
                    </div>

                    <div class="form-group">
                        <input type="password" name="loginPassword" class="form-control" required>
                        <label for="loginPassword">Senha</label>
                        <a href="">Esqueceu a senha?</a>
                    </div>

                    <div class="mt-2 mb-2">
                        <button class="btn btn-outline-light btn-block">Entrar</button>
                    </div>
                </form>
            </div>

            <div class="modal-footer px-4">
                <p class="mb-0">Não possui cadastro? <a href="{{ url('/usuario/cadastro') }}">Cadastre-se</a></p>
            </div>
        </div>
    </div>
</div>
