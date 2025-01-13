<?php

// On va imaginer qu'il y a un dossier App puis un dossier controller dedans et on va ranger cette classe (CatalogController) dedans
namespace App\Controllers; // Maintenant jai rangé CatalogController dans le dossier imaginaire App\Controllers

class CoreController
{
    public function notFound()
    {
        echo "404 - Page not found";
        // require_once __DIR__ . '/../../templates/404.php';
    }

    public function render($view, $data = [])
    {

        extract($data);

        $viewFile = __DIR__ . '/../../Templates/' . $view . '.php';
        if (file_exists($viewFile)) {
            require_once __DIR__ . '/../../Templates/Partials/header.php';
            require_once $viewFile;
            require_once __DIR__ . '/../../Templates/Partials/footer.php';
        } else {
            echo "View not found: $view";
        }
    }
}