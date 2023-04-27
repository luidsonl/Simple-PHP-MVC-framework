<?php
namespace app\controllers;
use app\core\Controller;
use app\core\Request;
use app\core\Application;
use app\models\User;

class AuthController extends Controller{

	public function login(){
		$this->setLayout('auth');
		return $this->render('login');
	}

	public function register(Request $request){

		$user = new User();

		if ($request->isPost()){
			$user->loadData($request->getBody());

			if ($user->validate() && $user->save()){
				Application::$app->session->setFlash('success', 'Thanks for registering');
				Application::$app->response->redirect('/');
				exit;
			}

			/*
			echo '<pre>';
			var_dump($user->errors);
			echo '</pre>';
			exit();
			*/

			return $this->render('register', [
				'model' => $user
			]);
		}

		$this->setLayout('auth');

		return $this->render('register',[
			'model' => $user
		]);
	}
}

?>