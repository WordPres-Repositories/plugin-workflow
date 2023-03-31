<?php

namespace LPT\Includes;

defined('ABSPATH') || exit;

class Deactivate 
{
    
    protected function __constructor() 
    {
    }

    public static function deactivate()
    {   
        // Ao desativar o plugin automaticamente será feito uma refresh nos links permanentes.
        flush_rewrite_rules();
    }
}