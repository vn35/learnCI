<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/home_admin');
	}
	
	public function insert() {
		$this->load->view('admin/insert_user');
	}

	public function addUser() {
		$this->load->model('usermodel');

		  $config['upload_path']          = './upload/';
          $config['allowed_types']        = 'gif|jpg|png';
		  $config['max_size']             = 1000000;
          $config['max_width']            = 1024;
          $config['max_height']           = 768;

          $this->load->library('upload', $config);
          		$user = array(
				'name' => $_POST['name'],
				'mobile' => $_POST['mobile'],
				'age' => $_POST['age']
				
			);
                if ( ! $this->upload->do_upload('image')){
                        $error = array('error' => $this->upload->display_errors());
                        $this->load->view('insert_user', $error);
                }
                else {
                        $data = array('upload_data' => $this->upload->data());
                      $user['image'] = $data['upload_data']['file_name'];
                }
        $this->usermodel->addUser($user);
	/*	$all = $this->usermodel->getAllUser();*/

		redirect('user/show');
	}
	
	public function show() {
		$this->load->model('usermodel');
		$show_user= $this->usermodel->getAllUser();
		$data['show_user'] = $show_user;
		$this->load->view('admin/show_user', $data);	
	}
	
	public function delete($idUser = 0) {
		$this->load->model('usermodel');
		/*$delete =*/ $this->usermodel->delete($idUser);
		/*$this->load->view('show_user', $delete);*/
		redirect('user/show');

	}
	
	public function edit($id) {
		$this->load->model('usermodel');
		$user = $this->usermodel->getUser($id);
		$data['user'] = $user[0];
		$this->load->view('admin/edit_user', $data);
	}

	
	public function editUser($id) {
		$this->load->model('usermodel');

		$data = array(
               'name' => $_POST['name'],
               'mobile' => $_POST['mobile'],
               'age' => $_POST['age']
            );
		$user = $this->usermodel->update($id, $data);

		redirect('user/show');
	}

/*	public function do_upload()
        {
                $config['upload_path']          = './upload/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('image'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        $this->load->view('upload_success', $data);
                }

}*/
 }
?>