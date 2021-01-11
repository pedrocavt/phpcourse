<?php
    include_once("templates/header.php");

    if(isset($_GET['id'])){
        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post){
            if($post['id'] == $postId){
                $currentPost = $post;
            }
        }
    }
?>
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>
            <p id="post-description"><?= $currentPost['description'] ?></p>
            <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img']?>" alt="<?= $currentPost['title']?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero non ullam consequatur exercitationem aperiam. Alias cumque quia autem. Similique optio hic consequuntur ad illum expedita ab culpa, eius nostrum officiis!
            Ullam aspernatur cupiditate doloremque sunt ipsum ut provident, dolor impedit quasi nemo in rem libero. Nemo ad repellendus assumenda eum nobis. Ipsum cupiditate repellat quibusdam doloremque maiores eos, perferendis soluta.
            Similique voluptas assumenda sapiente itaque quis ducimus tempore quasi labore reiciendis voluptatibus maxime sed accusantium quisquam iste, repellendus cumque saepe eveniet facilis natus, doloremque sit ab! Molestias ipsa numquam vitae.
            Esse mollitia totam placeat dolorem eaque commodi nobis eos facilis eius corrupti eum voluptas debitis blanditiis iste perferendis error, inventore alias culpa sit itaque asperiores architecto! Nostrum est voluptatum placeat.
            Praesentium magnam blanditiis nesciunt omnis laboriosam maiores ratione nostrum officiis nam non dolores tempore eos deleniti quis, deserunt ipsum asperiores consequuntur enim doloremque! Sapiente recusandae fuga alias. Optio, mollitia incidunt.</p>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero non ullam consequatur exercitationem aperiam. Alias cumque quia autem. Similique optio hic consequuntur ad illum expedita ab culpa, eius nostrum officiis!
            Ullam aspernatur cupiditate doloremque sunt ipsum ut provident, dolor impedit quasi nemo in rem libero. Nemo ad repellendus assumenda eum nobis. Ipsum cupiditate repellat quibusdam doloremque maiores eos, perferendis soluta.
            Similique voluptas assumenda sapiente itaque quis ducimus tempore quasi labore reiciendis voluptatibus maxime sed accusantium quisquam iste, repellendus cumque saepe eveniet facilis natus, doloremque sit ab! Molestias ipsa numquam vitae.
            Esse mollitia totam placeat dolorem eaque commodi nobis eos facilis eius corrupti eum voluptas debitis blanditiis iste perferendis error, inventore alias culpa sit itaque asperiores architecto! Nostrum est voluptatum placeat.
            Praesentium magnam blanditiis nesciunt omnis laboriosam maiores ratione nostrum officiis nam non dolores tempore eos deleniti quis, deserunt ipsum asperiores consequuntur enim doloremque! Sapiente recusandae fuga alias. Optio, mollitia incidunt.</p>
        </div>
        <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
            <ul id="tag-list">
                <?php foreach($currentPost['tags'] as $tag):?>
                    <li><a href="#"><?= $tag ?></a></li>
                <?php endforeach;?>
            </ul>
            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
                <?php foreach($categories as $category):?>
                    <li><a href="#"><?= $category ?></a></li>
                <?php endforeach;?>
            </ul>
        </aside>
    </main>
    
<?php
    include_once("templates/footer.php");
?>