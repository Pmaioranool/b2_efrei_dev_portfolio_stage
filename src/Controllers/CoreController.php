<?php

namespace App\Controllers;

class CoreController
{
    public function notFound()
    {
        require_once __DIR__ . '/../../templates/404.php';
    }

    protected function getTextes()
    {

        $userLanguage = $_SESSION['language'];
        $file = "../public/Assets/json/translation/$userLanguage.json";
        $json = file_get_contents($file);
        $obj = json_decode($json, true); // Décoder en tableau associatif
        return $obj;
    }

    public function render($view, $data = [])
    {
        $obj = $this->getTextes();
        $headerData = $obj['headerPage'];
        $footerData = $obj['footerPage'];
        extract($headerData);
        extract($footerData);
        extract($data);

        $viewFile = __DIR__ . '/../../templates/' . $view . '.php';
        if (file_exists($viewFile)) {
            require_once __DIR__ . '/../../templates/Partials/header.php';
            require_once $viewFile;
            require_once __DIR__ . '/../../templates/Partials/footer.php';
        } else {
            echo "View not found: $view";
        }
    }
}