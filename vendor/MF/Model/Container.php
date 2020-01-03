<?php // melhorar a relaçao dos controlladores  com os models

namespace MF\Model;

use App\Connection;

class Container {

    public static function getModel($model){ //retorna o modelo ja instaciado e conectado no bd
        $class = "\\App\\Models\\".ucfirst($model);
        $conn = Connection::getdb();

        return new $class($conn);

        //retorna o modelo ja instaciado e conectado no bd
        //instancia de conexao com bd
        //instanciade  modelo

    }
}











?>