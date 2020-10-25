<?php

require_once __DIR__ . '/../vendor/autoload.php';

use HelloWorld\SayHello;

$message = new SayHello;
echo $message->world();
