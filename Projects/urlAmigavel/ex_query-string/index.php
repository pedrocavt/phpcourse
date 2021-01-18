<?php
    var_dump($_GET);

    echo '<hr>';

    echo '<a href="?pagina=sobre">sobre</a>';

    if(isset($_GET['pagina'])){
        require_once 'pages/'.$_GET['pagina'].'.php';
    }