<?php

namespace App\Controllers;

class CoreController
{
    public function notFound()
    {
        require_once __DIR__ . '/../../templates/404.php';
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