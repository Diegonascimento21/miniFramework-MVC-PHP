<?php

namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap {

	//confuguração pra onde deverá ir cada rota
	protected function initRoutes(){

		$routes['home'] = Array(
			'route' => '/',
			'controller' => 'indexController',
			'action' => 'index'
		);

		$routes['sobre_nós'] = Array (
			'route' => '/sobre_nos',
			'controller' => 'indexController',
			'action' => 'sobreNos'
		);

		$this->setRoutes($routes);
	}

}

?>