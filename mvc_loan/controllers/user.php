<?php 
	class User extends Controller
	{
		public function __construct() {
			parent::__construct();
			Session::init();
			$logged = Session::get('loggedIn');
			$role = Session::get('role');

			if($logged == false || $role != 'owner') {
				Session::destroy();
				header('location: '.URL.'/login');
				exit();
			}
		}

		public function index() {
			$this->view->title = 'Users';
			$this->view->userList = $this->model->userList();
			$this->view->render('user/index');
		}

		public function create(){

			$data = [];
			$data['username'] = $_POST['username'];
			$data['password'] = md5($_POST['password']);
			$data['role'] = $_POST['role'];

			$this->model->create($data);
			header('location: '.URL.'/user');
		}

		public function edit($id){

			$this->view->title = 'Edit User';
			$this->view->user = $this->model->userSingleList($id);
			$this->view->render('user/edit');
		}

		public function update($id){
			$arrUser = $this->model->userSingleList($id);

			$data = [];
			$data['id'] = $id;
			$data['username'] = $_POST['username'];

			if($_POST['password'] == ''){
				$data['password'] = $arrUser['password'];
			}else{
				$data['password'] = md5($_POST['password']);
			}
			
			$data['role'] = $_POST['role'];

			$this->model->update($data);
			header('location: '.URL.'/user');
		}

		public function delete($id){
			$this->model->delete($id);
			header('location: '.URL.'/user');
		}
	}
?>