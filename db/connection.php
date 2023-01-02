<?php

class Database {
    public static $connection;

    public static function setupConnection () {
        if(!isset(Database::$connection)) {
            Database::$connection = new mysqli("localhost", "gihan", "Gamage0212#1122", 'student-management-system');
        } 
    }

    public static function search ($q) {
        Database::setupConnection();
        $query = Database::$connection->query($q);
        return $query;
    }

    public static function iud ($q) {
        Database::setupConnection();
        Database::$connection->query($q);
    }

}

?>