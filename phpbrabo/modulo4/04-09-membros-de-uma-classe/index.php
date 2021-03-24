<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.09 - Membros de uma classe");

require __DIR__ . "/source/autoload.php";

/*
 * [ constantes ] http://php.net/manual/pt_BR/language.oop5.constants.php
 */
fullStackPHPClassSession("constantes", __LINE__);

use \Source\Members\Config;
$config = new Config();
echo "<p>" . $config::COMPANY . "</p>";

var_dump(Config::COMPANY,
// Config::DOMAIN
);

$reflection = new ReflectionClass(Config::class);

var_dump($config, $reflection->getConstants());

/*
 * [ propriedades ] http://php.net/manual/pt_BR/language.oop5.static.php
 */
fullStackPHPClassSession("propriedades", __LINE__);

Config::$company = "UpInside";
Config::$domain = "UpInside.com.br";

$config::$sector = "Tecnologia";
var_dump($config, $reflection->getMethods(),$reflection->getDefaultProperties());

/*
 * [ métodos ] http://php.net/manual/pt_BR/language.oop5.static.php
 */
fullStackPHPClassSession("métodos", __LINE__);

$config::setConfig("", "", "");
Config::setConfig("UpInside", "upsindide.com.br", "educação");

var_dump($config, $reflection->getMethods(),$reflection->getDefaultProperties());

/*
 * [ exemplo ] Uma classe trigger
 */
fullStackPHPClassSession("exemplo", __LINE__);

use Source\Members\Trigger;

$trigger = new Trigger();
$trigger::show("Um objeto trigger");

Trigger::show("Essa é uma mensagem");
Trigger::show("Essa é uma mensagem", Trigger::ACCEPT);
Trigger::show("Essa é uma mensagem", Trigger::WARNING);

echo Trigger::push("Essa é um retorno para o usuário");


