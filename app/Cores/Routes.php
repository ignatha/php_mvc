<?php
namespace App\Cores;

class Routes {
    protected $routes = [];

    // methode GET / POST
    public function get($route, $action)
    { // $route = /, /home, /siswa/{id} dll ... $action = HomeController@index
     
        $newRoute = preg_replace('/\{([a-zA-Z0-9_]+)\}/','(?P<$1>[a-zA-Z0-9_/-]+)',$route);
        $this->routes['GET'][$newRoute] = $action;

    }

    public function post($route, $action)
    { // $route = /, /home, /siswa/{id} dll ... $action = HomeController@index
     
        $newRoute = preg_replace('/\{([a-zA-Z0-9_]+)\}/','(?P<$1>[a-zA-Z0-9_/-]+)',$route);
        $this->routes['POST'][$newRoute] = $action;

    }

    public function run()
    {
        $url = $_SERVER['REQUEST_URI'];
        $method = strtoupper($_SERVER['REQUEST_METHOD']);

        foreach ($this->routes[$method] as $route => $action) {
            $regex = "#^{$route}$#";

            if (preg_match($regex,$url,$matches)) {
                
                $params = array_filter($matches,'is_string',ARRAY_FILTER_USE_KEY);

                $this->action($action,$params);
            }
        }
    }

    public function action($action, $params)
    {
        [$controller, $method] = explode('@',$action);
        $controller = 'App\\Controllers\\'.$controller;

        if (class_exists($controller)) {
            $instance = new $controller();
            if (method_exists($instance,$method)) {
                call_user_func_array([$instance,$method],$params);
            }else {
                echo "Method {$method} tidak ditemukan";
            }            
        }else {
            echo "Controller {$controller} tidak ditemukan";
        }


    }


}