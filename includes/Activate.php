<?php

namespace LPT\Includes;

defined( 'ABSPATH' ) || exit;

class Activate
{
	protected function __construct()
	{
	}

	public static function activate()
	{
		flush_rewrite_rules(); // Ao ativar o plugin automaticamente será feito uma refresh nos links permanentes.
	}

}