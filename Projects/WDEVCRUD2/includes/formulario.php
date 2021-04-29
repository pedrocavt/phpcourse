<main>
    <section class="mt-3">
        <a href="index.php" >
        <button class="btn btn-success">Voltar</button>
        </a>
    </section>

    <h2 class="mt-3"><?= TITLE ?></h2>

    <form method="post">

        <div class="form-group mt-2">
            <label>Título</label>
            <input type="text" class="form-control" name="titulo" value="<?= $obVaga->titulo ?>">
        </div>

        <div class="form-group mt-2">
            <label>Descrição</label>
            <textarea name="descricao" rows="5" class="form-control"><?= $obVaga->descricao ?></textarea>
        </div>

        <div class="form-group mt-2">
            <label>Status</label>
            
            <div>
                <div class="form-check form-check-inline p-0">
                    <label class="form-control">
                        <input type="radio" name="ativo" value="s" checked>Ativo
                    </label>
                </div>

                <div class="form-check form-check-inline p-0">
                    <label class="form-control">
                        <input type="radio" name="ativo" value="n" <?= $obVaga->ativo == 'n' ? 'checked' : '' ?>>Inativo
                    </label>
                </div>
            </div>

        </div>

        <div class="form-group mt-2">
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>

    </form>
    
</main>