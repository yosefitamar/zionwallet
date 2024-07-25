<?php

namespace Controllers;

use Classes\Database;
use Classes\Render;
use Exception;

class HomeController
{
    /**
     * @throws Exception
     */
    public function index(): void
    {
        Render::view('home.index', ['pageTitle' => 'Home']);
    }
}