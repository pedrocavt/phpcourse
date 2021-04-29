<main>
    <section class="mt-3">
        <a href="index.php" >
        <button class="btn btn-success">Voltar</button>
        </a>
    </section>

    <h2 class="mt-3">Excluir Vaga</h2>

    <form method="post">

        <div class="form-group mt-2">
           <p>Você deseja realmente excluir a vaga <strong><?= $obVaga->titulo ?></strong>?</p>
        </div>


        <div class="form-group mt-2">
            <a href="index.php" >
                <button type="button" class="btn btn-success">Cancelar</button>
            </a>

            <button type="submit" class="btn btn-danger" name="excluir">Excluir</button>
        </div>

    </form>
    
</main>