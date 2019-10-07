<?php
    function connect(){
        try {
            $db= new PDO('mysql:host=localhost;dbname=veloloc;charset=utf8','root','');
            //var_dump($db);
            return $db;
        } catch (Exception $e) {
            die('Erreur : '.$e->getMessage());
        }
    }
?>