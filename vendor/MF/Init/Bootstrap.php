<?php //classe de inicialização/ não tem ligação com o framework.

namespace MF\Init;

abstract class Bootstrap{

    private $routes;

    protected abstract function InitRoutes();

	//construct para no momento que instaciar executar o init routes
	public function __construct() 
	{
		$this->initRoutes();
		$this->run($this->getUrl());
	}

	//get e set pra pegar a rota
	public function getRoutes(){
		return $this->routes;
	}

	public function setRoutes(array $routes){
		$this->routes = $routes;
	}

    public function run($url){ //redirecionando a rota pra cada controller certo
		foreach ($this->getRoutes() as $key => $route) {
			
			if($url == $route['route']){
				$class = "App\\Controllers\\".ucfirst($route['controller']);
				$controller = new $class;
				$action = $route['action'];
				$controller->$action();

			}
		}
		
	}
	//pega a url que esta sendo passada
	public function getUrl() {
		return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	}
}
?>