<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MX_Controller {

	public function index()
	{
		$this->load->view('admin_common/head');
		$this->load->view('admin_common/header');
		$this->load->view('admin_common/sidebar');
		$this->load->view('dashboard');
		$this->load->view('admin_common/footer');
	}
	public function add_country()
	{
		$country['c'] = $this->Admin_model->get_country();
		if(isset($_POST) && !empty($_POST)){
			$this->Admin_model->add_country($_POST);
			redirect('admin/add_country');
		}
		$this->load->view('admin_common/head');
		$this->load->view('admin_common/header');
		$this->load->view('admin_common/sidebar');
		$this->load->view('add_country',$country);
		$this->load->view('admin_common/footer');
	}
	public function fetch_state()
	{
		if(isset($_POST) && !empty($_POST)){
			$d = $this->Admin_model->fetch_state($_POST['country_id']);
			// echo $d;
			foreach($d as $details){
				echo '<option value="'.$details['id'].'">'.$details['name'].'</option>';
			}
		}
	}
	public function add_state()
	{
		$state['c'] = $this->Admin_model->get_country();
		$state['s'] = $this->Admin_model->get_state();
		if(isset($_POST) && !empty($_POST)){
			$this->Admin_model->add_state($_POST);
			redirect('admin/add_state');
		}
		$this->load->view('admin_common/head');
		$this->load->view('admin_common/header');
		$this->load->view('admin_common/sidebar');
		$this->load->view('add_state',$state);
		$this->load->view('admin_common/footer');
	}
	public function add_city()
	{
		$city['c'] = $this->Admin_model->get_country();
		$city['ci'] = $this->Admin_model->get_city();
		if(isset($_POST) && !empty($_POST)){
			$this->Admin_model->add_city($_POST);
			redirect('admin/add_city');
		}
		$this->load->view('admin_common/head');
		$this->load->view('admin_common/header');
		$this->load->view('admin_common/sidebar');
		$this->load->view('add_city',$city);
		$this->load->view('admin_common/footer');
	}
	public function add_interest()
	{
		$interest['i'] = $this->Admin_model->get_interest();
		if(isset($_POST) && !empty($_POST)){
			if (isset($_FILES) && !empty($_FILES)) {
				$var = date('dMY') . rand(1111, 9999);
				$config['upload_path']          = './admin_assets/interest_logo/';
				$config['allowed_types']        = 'jpg|jpeg|png|JPG|JPEG|PNG';
				$config['file_name']            = $var;
				$this->load->library('upload');
				$this->upload->initialize($config);
				if (!$this->upload->do_upload('logo')) {
					print_r($this->upload->display_errors());
				}
				$w = $this->upload->data();
				$_POST['logo'] = $w['file_name'];
				$query1 = $this->Admin_model->add_interest($_POST);
				if($query1){
					redirect('admin/add_interest');
				}
			}
		}
		$this->load->view('admin_common/head');
		$this->load->view('admin_common/header');
		$this->load->view('admin_common/sidebar');
		$this->load->view('add_interest',$interest);
		$this->load->view('admin_common/footer');
	}
	public function add_category()
	{
		$category['i'] = $this->Admin_model->get_interest();
		$category['c'] = $this->Admin_model->get_category();
		if(isset($_POST) && !empty($_POST)){
			if (isset($_FILES) && !empty($_FILES)) {
				$var = date('dMY') . rand(1111, 9999);
				$config['upload_path']          = './admin_assets/category/';
				$config['allowed_types']        = 'jpg|jpeg|png|JPG|JPEG|PNG';
				$config['file_name']            = $var;
				$this->load->library('upload');
				$this->upload->initialize($config);
				if (!$this->upload->do_upload('logo')) {
					print_r($this->upload->display_errors());
				}
				$w = $this->upload->data();
				$_POST['logo'] = $w['file_name'];
				$query2 = $this->Admin_model->add_category($_POST);
				if($query2){
					redirect('admin/add_category');
				}
			}
		}
		$this->load->view('admin_common/head');
		$this->load->view('admin_common/header');
		$this->load->view('admin_common/sidebar');
		$this->load->view('add_category',$category);
		$this->load->view('admin_common/footer');
	}

}
