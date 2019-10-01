<?php
namespace src\Controleur;
use PDO;

require '../config/Config.php';
require '../config/Errors.php';

class DataBaseManager
{
    static public function getConnection(){

        $con = new PDO('mysql:host=localhost;dbname='.DB_NAME.';charset=utf8', DB_USER_NAME, DB_PASS,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        if($con){
            return $con;
        }else{
            $erreur = new Exception();
            Errors::saveErrors($erreur->getMessage());
        }
    }

    static public function selectSQL($Sql){
        $con = self::getConnection();
        $results = array();

        $request = $con->prepare($Sql);
        $request->execute();

        while(($row = $request->fetch(PDO::FETCH_OBJ)) != null){
            array_push($results, $row);
        }

        if(count($results) > 0){
            return $results;
        }else{
            $erreur = new Exception();
            Errors::saveErrors($erreur->getMessage());
        }


        sleep(60);
    }
}
