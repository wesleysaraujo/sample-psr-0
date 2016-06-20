<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

//chama nosso autoloader
include 'bootstrap.php';

//inclui os arquivos e cria um nome curto para o namespace
use Ws\core\core as Core;
use Ws\core\request as Request;

//Instancia as class;
$core = new Core;
$request = new Request;

//executa os códigos
$core->debug($request->data());

?>