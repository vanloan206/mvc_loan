<?php 
	class Err extends Controller {

		function __construct()
		{
			parent::__construct();
		}
		function index() {
			$this->view->title = '404 Error';
			$this->view->msg = 'This page doesnt exits';
			$this->view->render('err/index');
		}
	}
?>