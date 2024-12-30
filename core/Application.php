<?php

namespace App\core;

class Application
{
    public Router $router;
    public Request $request;
    public Response $response;

    public function __construct()
    {
        $this->response = new Response();
        $this->request = new Request($this->response);
        $this->router = new Router($this->request, $this->response);
    }

    public function run()
    {
        $this->router->resolve();
        die;
        $path = $this->request->getUri();
        echo '<pre>';
        var_dump($path);
        echo '</pre>';
        echo "It's work";
    }
}
