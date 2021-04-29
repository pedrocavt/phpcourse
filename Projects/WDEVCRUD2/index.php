<?php

require __DIR__ . "/vendor/autoload.php";

use \App\Entity\Vaga;
use \App\Session\Login;

Login::requireLogin();

$vagas = Vaga::getVagas();

require __DIR__ . "/includes/header.php";
require __DIR__ . "/includes/listagem.php";
require __DIR__ . "/includes/footer.php";