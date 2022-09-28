<?php

namespace Src\Core;

use Exception;

class Core
{

    public function run()
    {
        try {

            $url = "/";
            $currentController = "HomeController"; // Controller padrão
            $currentAction = "index"; // Action padrão
            $params = [];

            if (isset($_GET['url']))
                $url .= $_GET['url'];

            if (!empty($url) && $url != "/") {
                $url = explode("/", $url);

                array_shift($url); // Retira primeiro item do array
                $currentController = ucfirst($url[0]) . "Controller";

                array_shift($url);
                if (isset($url[0]) && !empty($url)) {
                    $currentAction = $url[0];
                    array_shift($url);
                }

                if (count($url) > 0) $params = $url;
            }

            $controller = new $currentController();
            call_user_func_array([
                $controller,
                $currentAction
            ], $params);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
