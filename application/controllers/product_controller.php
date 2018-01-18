<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class product_controller extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/home_admin');
	}
	
	public function insert() {
		$this->load->view('admin/insert_user');
	}

	public function addUser() {
		$this->load->model('productmodel');
		$all = $this->productmodel->getAllUser();
		$user = array(
				'name' => $_POST['name'],
				'mobile' => $_POST['mobile'],
				'age' => $_POST['age']
			);
		$this->productmodel->addUser($user);

		redirect('user/show');

	}
	
	public function show() {
		$this->load->model('productmodel');
		$show_user= $this->productmodel->getAllUser();
		$data['show_user'] = $show_user;
		$this->load->view('admin/show_user', $data);	
	}
	
	public function delete($idUser = 0) {
		$this->load->model('productmodel');
		/*$delete =*/ $this->productmodel->delete($idUser);
		/*$this->load->view('show_user', $delete);*/
		redirect('user/show');

	}
	
	public function edit($id) {
		$this->load->model('productmodel');
		$user = $this->productmodel->getUser($id);
		$data['user'] = $user[0];
		$this->load->view('admin/edit_user', $data);
	}

	
	public function editUser($id) {
		$this->load->model('productmodel');

		$data = array(
               'name' => $_POST['name'],
               'mobile' => $_POST['mobile'],
               'age' => $_POST['age']
            );
		$user = $this->productmodel->update($id, $data);

		redirect('user/show');
	}

}
