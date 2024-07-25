<?php

namespace Classes;

use PDO;
use PDOException;

class Database
{
    private static ?PDO $instance = null;

    private function __construct()
    {
    }

    public static function getConnection()
    {
        if (!self::$instance) {

            $db_host    = env('DB_HOST');
            $db_port    = env('DB_PORT') ?? 3306;
            $db_name    = env('DB_DATABASE');
            $db_user    = env('DB_USERNAME');
            $db_pass    = env('DB_PASSWORD');
            $unix_socket = env('DB_UNIX_SOCKET') ?? '/tmp/mysql.sock';
            $db_dsn     = "mysql:host=$db_host;port=$db_port;dbname=$db_name;charset=utf8mb4;";

            try {
                self::$instance = new PDO($db_dsn, $db_user, $db_pass, [
                    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                ]);

                error_log('Database connection established successfully.');
            } catch (PDOException $e) {
                die($e->getMessage());
            }
        }

        return self::$instance;
    }
}