<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

//chama nosso autoloader
include 'bootstrap.php';

//inclui os arquivos e cria um nome curto para o namespace
use Ws\core\core as Core;
use Ws\core\request as Request;

//executa os códigos
Core::debug(Request::data());

?>