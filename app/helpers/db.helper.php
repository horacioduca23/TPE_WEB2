<?php

class DBHelper {
    function __construct() {

    }

    function connect() {
        $db = new PDO('mysql:host=localhost;' .'dbname=db_zapatilleria;charset=utf8' , 'root', '');
        return $db;
    }
}