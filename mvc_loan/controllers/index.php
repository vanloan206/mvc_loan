<?php
	/**
	* 
	*/
	class Index extends Controller
	{
		function __construct()
		{
			parent::__construct();
		}
		function index() {
			$this->view->title = 'Home';
			$this->view->render('index/index');
		}
		function details() {
			$this->view->render('index/index');
		}
	}
?>