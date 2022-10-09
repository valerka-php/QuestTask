<?php

namespace Src;

class Router
{
    private static string $controller;
    private static string $action;

    private static function setDefaultRoute(): void
    {
        self::$action = 'indexAction';
        self::$controller = 'HomeController';
    }

    public static function run(string $uri): void
    {
        self::setDefaultRoute();

        $route = explode('?', $uri);
        $path = explode('/',$route[0]);

        if (!empty($path[1])) {
            self::$controller = ucfirst($path[1]) . 'Controller';

        }
        if (!empty($path[2])) {
            self::$action = $path[2] . 'Action';
        }

        $class = 'App\controllers\\' . ucfirst(self::$controller);

        if (class_exists($class)) {
            $action = self::$action;
            if (method_exists($class, $action)) {
                $cObj = new $class();
                $cObj->$action();
            } else {
                echo 'error';
            }
        } else {
            echo 'error';
        }
    }
}
