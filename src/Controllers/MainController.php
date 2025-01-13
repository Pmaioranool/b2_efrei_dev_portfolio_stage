<?php

namespace App\Controllers;

use App\Controllers\CoreController;
use App\Controllers\PublicationController;

class MainController extends CoreController
{
    // Page d'accueil
    public function home()
    {
        $this->render('home');
    }
}