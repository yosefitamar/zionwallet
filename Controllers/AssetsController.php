<?php

namespace Controllers;

use Classes\Render;
use Exception;

class AssetsController
{
    /**
     * @throws Exception
     */
    public function index(): void
    {
        Render::view('assets.index', ['pageTitle' => 'Assets']);
    }
}