<?php

class Home extends Controller //контроллер 
{
    function index() // метод
    {
        $this -> view('home');
    }

}
