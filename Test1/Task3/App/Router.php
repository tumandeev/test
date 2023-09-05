<?php

namespace App;

class Router
{
    private string $method = 'get';
    private array $request = [];
    private $post = [];
    private $get = [];

    public function __construct()
    {
        $this->method = strtolower($_SERVER['REQUEST_METHOD']);
        $this->request = $_REQUEST;
    }

    public function get(string $url, callable|array $closure)
    {
        if(is_array($closure) || is_callable($closure)){
            $this->get[$url] = $closure;
        }
    }
    public function post(string $url, callable|array $closure)
    {
        if(is_array($closure) || is_callable($closure)){
            $this->post[$url] = $closure;
        }
    }
    
    public function dispatch($url)
    {       
        if(method_exists($this, $this->method) && !empty($this->{$this->method}[$url])){
            if(is_callable($this->{$this->method}[$url])){
                return $this->{$this->method}[$url]($this->request);
            }elseif (is_array($this->{$this->method}[$url])){
                $arr = $this->{$this->method}[$url];
                $class = $arr[0];
                $method = $arr[1];
                return (new $class)->{$method}($this->request);
            }
        }else{
            throw new \Exception('Method not allowed');
        }
    }
    
}