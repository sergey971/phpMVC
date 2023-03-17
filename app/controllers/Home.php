<?php

class Home extends Controller //контроллер 
{
    function index() // метод
    {
        $DB = new Database();
        $this -> view('home');
    }

}
