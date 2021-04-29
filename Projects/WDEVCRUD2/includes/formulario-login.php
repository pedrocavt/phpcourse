<?php
$alertaLogin = strlen($alertaLogin) ? '<div class="alert alert-danger">' . $alertaLogin . '</div>' : '';
$alertaCadastro = strlen($alertaCadastro) ? '<div class="alert alert-danger">' . $alertaCadastro . '</div>' : '';

?>
<div class="jumbotron text-dark bg-light">

    <div class="row p-3">
    
        <div class="col">
        
            <form method="post">

                <h2>Login</h2>

                <?= $alertaLogin ?>

                <div class="form-group mt-2">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" required>
                </div>

                <div class="form-group mt-2">
                    <label>Senha</label>
                    <input type="password" class="form-control" name="senha" required>
                </div>
            
                <div class="form-group mt-2">
                    <button type="submit" name="acao" value="logar" class="btn btn-primary">Login</button>
                </div>

            </form>

        </div>

        <div class="col">

            <form method="post">

                <h2>Cadastrar-se</h2>

                <?= $alertaCadastro  ?>

                <div class="form-group mt-2">
                    <label>Nome</label>
                    <input type="text" class="form-control" name="nome" required>
                </div>

                <div class="form-group mt-2">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" required>
                </div>

                <div class="form-group mt-2">
                    <label>Senha</label>
                    <input type="password" class="form-control" name="senha" required>
                </div>
            
                <div class="form-group mt-2">
                    <button type="submit" name="acao" value="cadastrar" class="btn btn-primary">Cadastrar</button>
                </div>

            </form>

        </div>

    </div>

</div>