<?php

namespace App\Controllers;

use stdClass;
use MF\Controller\action;
use App\Connection;
use App\Models\Produto;

Class indexController extends Action{

        public function index(){
            //$this->view->dados = Array('cavalo', 'capivara', 'capote');

            //instancia de conexao e usar funcao usando metodo estatico
            $conn = Connection::getdb();

            //instanciar modelo
            $produto = new Produto($conn);

            $produtos = $produto->getProdutos();

            $this->view->dados = $produtos;
            

            $this->render('index', 'layout1'); //renderizar view e layout
        }

        public function sobreNos(){
            $this->view->dados = Array('prisma', "somalia");
            $this->render('sobreNos', 'layout1');
        } 

    }

?>