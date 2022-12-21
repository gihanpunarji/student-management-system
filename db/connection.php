<?php

class Database {
    public static $connection;

    public static function setupConnection () {
        if(!isset(Database::$connection)) {
            Database::$connection = new mysqli("locahost", "root", "Gamage0212#1122", 'student_management_system', "3306");
        } 
    }

}

?>