<?php

namespace App\controllers;

abstract class Controller
{
    public function renderView(string $viewPath, $adta = [], $template = 'default')
    {
        // on extrait les données
        extract($adta);

        // on demarre le buffer de sortie
        ob_start();

        // on envoies les informations a notre vue
        require_once VIEW_ROOT . $viewPath . '.php';

        $content = ob_get_clean();

        require_once VIEW_ROOT . $template . '.php';
    }
}
