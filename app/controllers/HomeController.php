<?php

namespace Ingos\Bankas\Controllers;

use Ingos\Bankas\App;


class HomeController
{
    public function home()
    {
        return App::view('home');
    }
}