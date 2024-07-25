<?php
//get all configs from app.php and return it
if (!function_exists('config')) {
    function config($key)
    {
        static $configs = null;

        if ($configs === null)
            $configs = require PROJECT_ROOT.'/config/app.php';

        return $configs[$key] ?? null;
    }
}