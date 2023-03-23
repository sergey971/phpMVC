<?php

class Home extends Controller //контроллер 
{
    function index() // метод
    {
        $DB = new Database();
        $DB->db_connect();
        $this -> view('home');
    }

}
