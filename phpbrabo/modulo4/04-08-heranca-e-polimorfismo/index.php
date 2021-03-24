<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.08 - Herança e polimorfismo");

require __DIR__ . "/source/autoload.php";

/*
 * [ classe pai ] Uma classe que define o modelo base da estrutura da herança
 * http://php.net/manual/pt_BR/language.oop5.inheritance.php
 */
fullStackPHPClassSession("classe pai", __LINE__);

$event = new \Source\Inheritance\Event\Event(
    "WorkShop PHP",
    new DateTime("2020-03-24 10:00"),
    100,
    2
);

print_r($event);

$event->register("Pedro Vitor", "pedro@gmail.com");
$event->register("Vitor", "pedro@gmail.com");
$event->register("Pedro", "pedro@gmail.com");

/*
 * [ classe filha ] Uma classe que herda a classe pai e especializa seuas rotinas
 */
fullStackPHPClassSession("classe filha", __LINE__);

$address = new \Source\Inheritance\Address("Rua sem nome", "39");
$event = new \Source\Inheritance\Event\EventLive(
    "WorkShop PHP",
    new DateTime("2020-03-24 10:00"),
    100,
    2,
    $address
);

print_r($event);

$event->register("Pedro Vitor", "pedro@gmail.com");
$event->register("Vitor", "pedro@gmail.com");
$event->register("Pedro", "pedro@gmail.com");
/*
 * [ polimorfismo ] Uma classe filha que tem métodos iguais (mesmo nome e argumentos) a class
 * pai, mas altera o comportamento desses métodos para se especializar
 */
fullStackPHPClassSession("polimorfismo", __LINE__);

$event = new \Source\Inheritance\Event\EventOnline(
    "WorkShop PHP",
    new DateTime("2020-03-24 10:00"),
    100,
    "http://google.com.br",
);

print_r($event);

$event->register("Pedro Vitor", "pedro@gmail.com");
$event->register("Vitor", "pedro@gmail.com");
$event->register("Pedro", "pedro@gmail.com");