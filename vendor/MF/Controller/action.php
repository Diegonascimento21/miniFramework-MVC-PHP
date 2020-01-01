<?php 
//classe para separar requisitos nao funcionais dos funcionais.
namespace MF\Controller;

abstract class Action{

    protected $view;

    public function __construct()
    {
            $this->view = new \stdClass();
    }

    protected function render($view){ //function para renderizar view
        $classAtual = get_class($this); // metodos para pegar o caminho dinamicamente
        $classAtual = str_replace('App\\Controllers\\', '', $classAtual);
        $classAtual = str_replace('Controller', '', $classAtual);

        require_once "../App/Views/".$classAtual."/".$view.".phtml"; //partindo de public /views
    }


}
?>