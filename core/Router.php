<?php

namespace App\core;

use App\controllers\__44Controller;

class Router
{
    // on crée une variable qui va contenir nos routes
    private $routes = [];


    public Request $request;
    public Response $response;
    public __44Controller $controller;
    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
        $this->controller = new __44Controller();
    }

    /**
     * cette fonction permet d'appeler une route en get
     *
     * @param string $path
     * @param [type] $callable
     * @return void
     */
    public function get(string $path, $callable)
    {
        $this->routes['get'][$path] = $callable;
    }

    /**
     * cette function permet d'appeler une route en post
     *
     * @param string $path
     * @param [type] $callable
     * @return void
     */
    public function post(string $path, $callable)
    {
        $this->routes['post'][$path] = $callable;
    }

    /**
     * cette fonction est chargée de faire des redirection et faire le traitement d'url
     * 
     *
     * @return void
     */
    public function resolve()
    {
        //on redirige l'uri sans sans le slash de fin
        $this->request->getUri();

        // on recupère le $path et la méthod 
        $path = $this->request->getParams();
        $method = $this->request->getMethod();

        // on recupère le $callable stocké dans le tableau des routes 
        $callable = $this->routes[$method][$path] ?? false;
        if ($callable === false) {
            $this->response->setStatus(404);
            $this->controller->error();
        }

        // echo '<pre>';
        // var_dump($callable);
        // echo '</pre>';
        // die;
        // call_user_func($callable);
    }
}
