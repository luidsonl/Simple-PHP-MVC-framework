<?php

namespace app\core;
use app\core\Controller;


class Application{

	public static string $ROOT_DIR;

	public string $layout = 'main';
	public string $userClass;
	public Router $router;
	public Request $request;
	public Response $response;
	public Session $session;
	public static Application $app;
	public Controller $controller;
	public Database $db;
	public View $view;

	public function __construct($rootPath, array $config){
		$this->userClass = $config['userClass'];
		self::$ROOT_DIR = $rootPath;
		self::$app = $this;
		$this->request = new Request();
		$this->response = new Response();
		$this->session = new Session();
		$this->router = new Router($this->request, $this->response);
		$this->view = new View();
		
		$this->db = new Database($config['db']);
		
		$primaryValue = $this->session->get('user');
		if($primaryValue){
			$userClass = new $this->userClass;
			$primaryKey = $userClass->primaryKey();
			$this->user = $userClass->findOne([$primaryKey => $primaryValue]);
		}else{
			$this ->user = null;
		}
		

	}

	public function setController(Controller $controller): void{
		$this->controller = $controller;
	}

	public function getController(): Controller{
		return $this->controller;
	}

	public function run(){
		try{
			echo $this->router->resolve();
		}catch(\Exception $e){
			$this->response->setStatusCode($e->getCode());
			echo $this->router->renderView('_error', [
				'exception' => $e
			]);
		}
	}

	public function login(DbModel $user){
		$this->user = $user;
		$primaryKey = $user->primaryKey();
		$primaryValue = $user->{$primaryKey};
		$this->session->set('user', $primaryValue);
		return true;
	}

	public function logout(){
		$this->user = null;
		$this->session->remove('user');
	}

	public static function isGuest(){
		return !self::$app->user;
	}

}



?>