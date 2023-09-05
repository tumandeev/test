<?php

namespace App;

class Application
{
    private Router $router;
    
    public function __construct($router)
    {
        $this->router = $router;
    }

    public function run()
    {
        $url = $_SERVER['REQUEST_URI'];
        $url = explode('?', $url);
        $url = $url[0];
        $result =  $this->router->dispatch($url);

        if(!empty($result['data'])) extract($result['data']);
        
        include __DIR__ . "/../resource/view/common/index.php";
    }
}