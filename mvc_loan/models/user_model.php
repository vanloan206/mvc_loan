<?php 
	class User_Model extends Model
	{
		public function __construct()
		{
			parent::__construct();
		}
		public function userList() {
			return $this->db->select('SELECT id, username, role FROM users');
		}

		public function userSingleList($id){
			return $this->db->select('SELECT * FROM user WHERE id = :id', [':id' => $id]);
		}

		public function create($data){
			$this->db->insert('users', array(
	            'username' => $data['username'],
	            'password' => $data['password'],
	            'role' => $data['role']
	        ));
		}

		public function update($data){
			$arrUser = [
	            'username' => $data['username'],
	            'password' => $data['password'],
	            'role' 	   => $data['role']
	        ];
	        
	        $this->db->update('users', $arrUser, "`id` = {$data['id']}");
		}

		public function delete($id){
			$sth = $this->db->prepare('DELETE FROM users WHERE id = :id');
			$sth->execute([ ':id' => $id ]);
		}
	}
?>