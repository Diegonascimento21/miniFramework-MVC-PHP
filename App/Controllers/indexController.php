<?php

namespace App\Controllers;

use stdClass;
use MF\Controller\action;
use MF\Model\Container;

use App\Connection;
use App\Models\Produto;
use App\Models\info;

Class indexController extends Action{

        public function index(){
            //$this->view->dados = dados pra view selecionada

            $produto = Container::getModel('produto'); //instancia de conexao e modelo

            $produtos = $produto->getProdutos();

            $this->view->dados = $produtos;
            

            $this->render('index', 'layout1'); //renderizar view e layout
        }

        public function sobreNos(){
            
            $info = Container::getModel('info'); 
            $infos = $info->getInfo();
            $this->view->dados = $infos;

            $this->render('sobreNos', 'layout1'); //renderizar view e layout
        } 

    }

?>