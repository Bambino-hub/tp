<?php

namespace App\core;

class Request
{
    private string $uri;
    public Response $response;

    public function __construct(Response $response)
    {
        $this->response = $response;
    }
    /**
     * Cette fonction nous permet de recuperer la méthod get ou post
     *
     * @return void
     */
    public function getMethod()
    {
        return strtolower($_SERVER["REQUEST_METHOD"]);
    }

    /**
     * cette fonction nous `permet de recuperer les paramètres d'url
     *
     * @return void
     */
    public function getParams()
    {
        $path = $_GET['url'] ?? '/';
        return $path;
    }

    /**
     * cette fonction nous permet de recuperer l'uro
     *
     * @return void
     */
    public function getUri()
    {
        // on recupère l'uri
        $this->uri = $_SERVER['REQUEST_URI'];

        // on commence par faire netoyage d'url
        // on verifie l'uri n'est pas un slash ou se termine par un slash et n'est pas vide 
        if (!empty($this->uri) && $this->uri != '/' && $this->uri[-1] === "/") {
            $this->uri = substr($this->uri, 0, -1);

            // on fait une redirection permanante
            $this->response->setStatus(301);
            header('Location:' . $this->uri);
        }
    }
}
