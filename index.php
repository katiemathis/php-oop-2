<?php 

require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/Registrato.php';


$tom = new User('Tom', 'info@tom.com', false);
$tom->setValidExp(2020);
$tom->getEmail();
$tom->setDiscount();

$mary = new Registrato('Mary', 'info@mary.com', true);
$mary->setValidExp(2024);
$mary->getEmail();
$mary->setDiscount();

var_dump($tom);
var_dump($mary);

