<?php

namespace App\Controllers;

use App\Controllers\CoreController;

class MainController extends CoreController
{
    // Page d'accueil
    public function home()
    {
        $obj = $this->getTextes();
        $data = $obj['homePage'];
        // J'appelle la méthode render de CoreController pour afficher la vue home avec les données du json
        $this->render('home', $data);
    }

    public function material()
    {
        $obj = $this->getTextes();
        $data = $obj['materialPage'];
        $this->render('material', $data);
    }

    public function technologies()
    {
        $obj = $this->getTextes();
        $data = $obj['technologiesPage'];
        $this->render('technologies', $data);
    }

    public function projects()
    {
        $obj = $this->getTextes();
        $data = $obj['projectsPage'];
        $this->render('projects/projects', $data);
    }

    public function project($matches)
    {
        $id = $matches['id'];
        $obj = $this->getTextes();
        $objImportant = $obj['projectsPage']['importantText'];
        $objProjects = $obj['projectsPage']['projects'][$id] ?? null;
        $data = [
            'title' => $objProjects['title'] ?? null,
            'description' => $objProjects['description'] ?? null,
            'time' => $objProjects['time'] ?? null,
            'timeText' => $objImportant['timeText'],
            'technologies' => $objProjects['technologies'] ?? null,
            'link' => $objProjects['link'] ?? null,
            'backText' => $objImportant['backText'],
            'technologiesText' => $objImportant['technologiesText']
        ];

        if ($data) {
            $this->render('projects/project', $data);
        } else {
            // Handle project not found
            $this->notFound();
        }
    }

    public function setLanguage()
    {
        // Je récupère la langue choisie par l'utilisateur
        $language = $_POST['language'];
        // Je stocke la langue dans la session
        $_SESSION['language'] = $language;
        // Je redirige l'utilisateur vers la page précédente
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }


}