<?php

namespace App\Controllers;

use App\Controllers\CoreController;

class MainController extends CoreController
{
    // Page d'accueil
    public function home()
    {
        $file = '../public/Assets/json/langues/home.json';
        $json = file_get_contents($file);
        $data = json_decode($json, true); // Décoder en tableau associatif
        // J'appelle la méthode render de CoreController pour afficher la vue home avec les données du json
        $this->render('home', $data);
    }

    public function material()
    {
        $this->render('material');
    }

    public function technologies()
    {
        $this->render('technologies');
    }

    public function projects()
    {
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