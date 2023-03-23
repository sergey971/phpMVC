<?php

class Database
{
    public function db_connect()
    {
        try{
            $string = DB_TYPE . ":host=".DB_HOST."; dbname=".DB_NAME.";";
            $db = new PDO($string, DB_USER, DB_PASS);
            show($db);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
    public function read($query, $data = [])
    {
        $DB = $this -> db_connect(); // Подключение к базе данных
        $stm = $DB -> prepare($query); // Базе данных приготовиться
        
        if(count($data)==0)
        {
             $stm = $DB->query($query);
             $chek = 0;
             if($stm){
                $check = 1;
             }
        } else{
        
            $check = $stm -> execute($data);
        }

        if($check)
        {
            return $data = $stm ->fetchAll(PDO::FETCH_OBJ);
        }
        else{
            return false;
        }
    }
    public function write($query, $data = [])
    {
        $DB = $this -> db_connect(); // Подключение к базе данных
        $stm = $DB -> prepare($query); // Базе данных приготовиться
        
        if(count($data)==0)
        {
             $stm = $DB->query($query);
             $chek = 0;
             if($stm){
                $check = 1;
             }
        } else{
        
            $check = $stm -> execute($data);
        }

        if($check)
        {
            return $data = $stm ->fetchAll(PDO::FETCH_OBJ);
        }
        else{
            return false;
        }
        //1.21

    }
}
