<?php

namespace App\Controllers;

use stdClass;
use MF\Controller\action;

Class indexController extends Action{

        public function index(){
            $this->view->dados = Array('cavalo', 'capivara', 'capote');
            $this->render('index', 'layout1');
        }

        public function sobreNos(){
            $this->view->dados = Array('prisma', "somalia");
            $this->render('sobreNos', 'layout1');
        } 

    }

?>