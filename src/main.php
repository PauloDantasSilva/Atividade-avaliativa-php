<?php

include_once(__DIR__ . "/../vendor/autoload.php");
use App\model\Carro;
use App\SystemServices\MonologFactory;

MonologFactory::getInstance()->info("Testando");

$Carro = new Carro("BMW", 2015, "Branco");
echo $Carro->getInfo();
echo "rodar" . $Carro -> rodar();
