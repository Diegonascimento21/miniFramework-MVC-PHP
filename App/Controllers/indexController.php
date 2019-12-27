<?php
    namespace App\Controllers;

    Class indexController{
        public function index(){
            $dados = Array('cavalo', 'capivara', 'capote');
            require_once "../App/views/index/index.phtml"; //partindo de public //views
        }
        public function sobreNos(){
            $dados = Array('prisma', "somalia");
            require_once "../App/Views/index/sobreNos.phtml"; //partindo de public // views
        } 
    }

?>