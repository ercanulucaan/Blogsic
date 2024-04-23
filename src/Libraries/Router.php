<?php

namespace App\Libraries;

class Router
{

    protected $routes = [];
    protected $params = [];
    protected $defaultController = 'HomeController';
    protected $defaultMethod = 'index';

    public function addRoute($route, $controller)
    {
        $this->routes[$route] = $controller;
    }

    public function dispatch($url)
    {
        $urlParts = explode('?', $url);
        $urlWithoutParams = $urlParts[0];
        $query = isset($urlParts[1]) ? $urlParts[1] : '';

        parse_str($query, $_GET);

        $found = false;
        foreach ($this->routes as $route => $controller) {
            if ($this->matchRoute($route, $urlWithoutParams)) {
                $found = true;
                $this->callControllerAction($controller);
                break;
            }
        }

        if (!$found) {
            $this->callControllerAction('BaseController@errorView');
        }
    }




    protected function matchRoute($route, $url)
    {
        $routeParts = explode('/', $route);
        $urlParts = explode('/', $url);

        if (count($routeParts) !== count($urlParts)) {
            return false;
        }

        $params = [];
        foreach ($routeParts as $key => $part) {
            if ($part === $urlParts[$key]) {
                continue;
            } elseif (strpos($part, ':') === 0) {
                $paramName = substr($part, 1);
                if ($paramName === 'any') {
                    $paramValue = $urlParts[$key];
                    // :any parametresi için belirli karakterleri kontrol et
                    if (preg_match('/^[a-zA-Z0-9~%.:_\-,\?=]+$/', $paramValue) && $paramValue !== '') {
                        $params[$paramName] = $paramValue;
                    } else {
                        // :any parametresine izin verilmeyen karakterler girilmiş, uyarı ver.
                        echo "Hata: :any parametresine izin verilmeyen karakterler içeriyor.";
                        return false;
                    }
                } elseif ($paramName === 'id') {
                    if (is_numeric($urlParts[$key])) {
                        $params[$paramName] = $urlParts[$key];
                    } else {
                        // :id parametresine sayısal olmayan bir değer girilmiş, uyarı ver.
                        echo "Hata: :id parametresi sayısal olmayan bir değer içermemelidir.";
                        return false;
                    }
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }

        $this->params = $params;
        return true;
    }





    protected function callControllerAction($controllerName)
    {
        $controllerParts = explode('@', $controllerName);
        $controllerClass = 'App\\Controllers\\' . $controllerParts[0];
        $method = $controllerParts[1];

        if (class_exists($controllerClass)) {
            $controller = new $controllerClass();
            if (method_exists($controller, $method)) {
                call_user_func_array([$controller, $method], $this->params);
            } else {
                $this->callControllerAction('BaseController@errorView');
            }
        } else {
            $this->callControllerAction('BaseController@errorView');
        }
    }
}
