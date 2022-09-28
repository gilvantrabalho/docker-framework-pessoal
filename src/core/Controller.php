<?php

class Controller
{
    public function view($name, $params = [])
    {
        extract($params);
        require "views/{$name}.php";
    }
}
