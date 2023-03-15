<?php

class App
{
    private $controller = "home";
    private $method = "index";
    private $params = [];
    public function __construct()
    {
        $url = $this -> splitURL();
        if(file_exists("../app/controllers/". strtolower($url[0]) .".php"));
    }
    // функция-разделить URL
    private function splitURL()
        {
            return explode ("/", trim($_GET['url'], "/"));
            // 29 минут ровно закончил
        }

}