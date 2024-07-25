<?php

namespace Classes;

use Exception;

class Config
{
    /**
     * @throws Exception
     */
    public function __construct()
    {
        //
    }

    public static function showAllConfigs(): void
    {
        echo '<pre>';
        print_r($_ENV);
        echo '</pre>';
    }

    public static function get($key)
    {
        return $_ENV[$key] ?? null;
    }
}