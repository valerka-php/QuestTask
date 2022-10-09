<?php

namespace App\controllers;

use Src\Render;

class HomeController
{
    public function indexAction()
    {

        Render::getView('home',[]);
    }
}