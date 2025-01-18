<?php

namespace App\Controllers;

use App\Controllers\CoreController;

class MainController extends CoreController
{
    // Page d'accueil
    public function home()
    {
        $obj = $this->getTextes();
        $data = $obj['home'];
        // J'appelle la méthode render de CoreController pour afficher la vue home avec les données du json
        $this->render('home', $data);
    }

    public function material()
    {
        $obj = $this->getTextes();
        $data = $obj['material'];
        $this->render('material');
    }

    public function technologies()
    {
        $obj = $this->getTextes();
        $data = $obj['technologies'];
        $this->render('technologies');
    }

    public function projects()
    {
        $obj = $this->getTextes();
        $data = $obj['projects'];
        $this->render('projects');
    }

    public function setLanguage($matches)
    {
        // Je récupère la langue choisie par l'utilisateur
        $language = $_POST['language'];
        // Je stocke la langue dans la session
        $_SESSION['language'] = $language;
        // Je redirige l'utilisateur vers la page précédente
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }


}