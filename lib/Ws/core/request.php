<?php

namespace Ws\core;

class request
{
	public static function data()
	{
		$retorno['post'] = self::post();
		$retorno['get']  = self::get();

		return $retorno;
	}

	public static function post()
	{
		$retorno = array();

		foreach ($_POST as $key => $value) {
			$retorno[$key] = self::securityVar($value);
		}

		return $retorno;
	}

	public static function get()
	{
		$retorno['parametros'] = array();
		foreach($_GET as $value){
			$retorno['parametros'][] = self::securityVar($value);
		}

		return $retorno;
	}

	public static function securityVar($var)
	{
		$var = addslashes($var);
		return $var;
	}
}