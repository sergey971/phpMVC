<?php

class Database
{
    public function db_connect()
    {
        try{
            $string = "mysql:host=127.0.0.1:3307; dbname=minima_db;";
            $db = new PDO($string, 'root', 'root');
            show($db);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
    public function read($query, $data = [])
    {

    }
    public function write($query, $data = [])
    {

    }
}