<?php

class Home //контроллер 
{
    function index() // метод
    {
        $this -> view('home');
    }

    function view($view)
    {
        if(file_exists("../app/views/". $view .".php"))     
        {
            include "../app/views/". $view .".php";
        }
        else{
            include "../app/views/404.php";
        }
    }
}