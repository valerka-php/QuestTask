<?php

namespace Src;

class Render
{
    public static function getView(string $view,array $params,string $layout = 'default')
    {
        $view = '../app/views/' . $view . '.php';
        $layout = '../app/views/layouts/' . $layout .'.php';

        if (!empty($params)) {
            extract($params);
        }

        if (file_exists($view)) {
            ob_start();
            include_once $layout;
            include_once $view;
        }
        return ob_get_flush();
    }
}