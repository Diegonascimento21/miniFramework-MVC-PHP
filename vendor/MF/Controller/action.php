<?php 
//classe para separar requisitos nao funcionais dos funcionais.
namespace MF\Controller;

abstract class Action{

    protected $view;

    public function __construct()
    {
            $this->view = new \stdClass();
    }

    protected function render($view, $layout){ //function para renderizar o layout
        $this->view->page = $view;

        if(file_exists(require_once "../App/Views/".$layout.".phtml")){ //verificando se o layout existe 
            require_once "../App/Views/".$layout.".phtml";              //fazendo o include
        } else {
            $this->Content();
        }

    }

    protected function Content(){
        $classAtual = get_class($this); // metodos para pegar o caminho dinamicamente
        $classAtual = str_replace('App\\Controllers\\', '', $classAtual);
        $classAtual = str_replace('Controller', '', $classAtual);

        require_once "../App/Views/".$classAtual."/".$this->view->page.".phtml"; //partindo de public /views
    }

}
?>