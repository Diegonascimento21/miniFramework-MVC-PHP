<?php

namespace App;

class Connection{

    public function getdb(){
        try{

            $conn = new PDO(
                "mysql:host=localhost;dbname=mvc;charset=utf8",
                "root",
                ""
            );

            return $conn;

        } catch () {

        }
    }

}


?>