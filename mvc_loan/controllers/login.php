<?php 
	class Login extends Controller
	{
		function __construct() {
			parent::__construct();
		}
		function index() {
			$this->view->title = 'Login';
			$this->view->render('login/index', 1);
		}
		function run() {
			$this->model->run();
		}
	}
?>