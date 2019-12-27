<?php
    namespace App\Controllers;

use stdClass;

Class indexController{

        private $view;

        public function __construct()
        {
            $this->view = new \stdClass();
        }

        public function index(){
            $this->view->dados = Array('cavalo', 'capivara', 'capote');
            $this->render('index');
        }

        public function sobreNos(){
            $this->view->dados = Array('prisma', "somalia");
            $this->render('sobreNos');
        } 

        public function render($view){ //function para renderizar view
            $classAtual = get_class($this); // metodos para pegar o caminho dinamicamente
            $classAtual = str_replace('App\\Controllers\\', '', $classAtual);
            $classAtual = str_replace('Controller', '', $classAtual);

            require_once "../App/Views/".$classAtual."/".$view.".phtml"; //partindo de public /views
        }

    }

?>