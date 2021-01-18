<?php
    var_dump($_GET);

    echo '<hr>';

    echo '<a href="sobre">sobre</a>';

    if($_GET){
        $url = explode('/', $_GET['url']);
        require_once 'pages/'.$url[0].'.php';
    }
