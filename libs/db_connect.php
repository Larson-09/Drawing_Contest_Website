<?php 
    $servername = "51.11.247.250:3306";
    $db_name = "concours_dessins";
    $username = "user";
    $password = "userpass";
    
    function db_connect(){

        try
        {
            $db = new PDO("mysql:host=$servername;dbname=$db_name;charset=utf8", $username, $password);
        }

        catch (Exception $e)
        {
                die('Erreur : ' . $e->getMessage());
        }
        return $db;
    }

?>