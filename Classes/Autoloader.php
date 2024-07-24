<?php

namespace Classes;

class Autoloader
{
    public static function loadClasses( $className ): void
    {
        error_log("iniciando loadClasses");
        $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
        $file = dirname(__DIR__) . DIRECTORY_SEPARATOR . $className . '.php';

        if (file_exists($file))
        {
            error_log("Carregando: ".$file);
            require_once $file;
        } else {
            error_log("Arquivo não encontrado: ".$file);
        }
    }

    public static function register(): void
    {
        spl_autoload_register(self::class . '::loadClasses');
    }

}

Autoloader::register();