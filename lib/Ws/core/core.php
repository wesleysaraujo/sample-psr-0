<?php

namespace Ws\core;

class core
{
	static function debug($var)
	{
		echo '<pre>';
		print_r($var);
		echo '</pre>';
	}
}