<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends MX_Controller
{

	public function index()
	{
		$dashboard['i'] = $this->Admin_model->count_interest();
		$dashboard['c'] = $this->Admin_model->count_category();
		$dashboard['s'] = $this->Admin_model->count_subcategory();
		$this->load->view('admin_common/head');
		$this->load->view('admin_common/header');
		$this->load->view('admin_common/sidebar');
		$this->load->view('dashboard', $dashboard);
		$this->load->view('admin_common/footer');
	}
	public function add_country()
	{
		$country['c'] = $this->Admin_model->get_country();
		if (isset($_POST) && !empty($_POST)) {
			$c = count($this->db->get_where('country', $this->input->post())->result_array());
			if ($c) {
				// $this->session->set_userdata('msg','Already Exists');
			} else {
				$this->Admin_model->add_country($_POST);
			}
			redirect('admin/add_country');
		}
		$this->load->view('admin_common/head');
		$this->load->view('admin_common/header');
		$this->load->view('admin_common/sidebar');
		$this->load->view('add_country', $country);
		$this->load->view('admin_common/footer');
	}
	public function fetch_state()
	{
		if (isset($_POST) && !empty($_POST)) {
			$d = $this->Admin_model->fetch_state($_POST['country_id']);
			// echo $d;
			foreach ($d as $details) {
				echo '<option value="' . $details['id'] . '">' . $details['name'] . '</option>';
			}
		}
	}
	public function add_state()
	{
		$state['c'] = $this->Admin_model->get_country();
		$state['s'] = $this->Admin_model->get_state();
		if (isset($_POST) && !empty($_POST)) {
			$s = count($this->db->get_where('state', $this->input->post())->result_array());
			if ($s) {
				// $this->session->set_userdata('msg','Already Exists');
			} else {
				$this->Admin_model->add_state($_POST);
			}
			redirect('admin/add_state');
		}
		$this->load->view('admin_common/head');
		$this->load->view('admin_common/header');
		$this->load->view('admin_common/sidebar');
		$this->load->view('add_state', $state);
		$this->load->view('admin_common/footer');
	}
	public function fetch_city()
	{
		if (isset($_POST) && !empty($_POST)) {
			$d = $this->Admin_model->fetch_city($_POST['state_id']);
			// echo $d;
			foreach ($d as $details) {
				echo '<option value="' . $details['id'] . '">' . $details['name'] . '</option>';
			}
		}
	}
	public function add_city()
	{
		$city['c'] = $this->Admin_model->get_country();
		$city['ci'] = $this->Admin_model->get_city();
		if (isset($_POST) && !empty($_POST)) {
			$ci = count($this->db->get_where('city', $this->input->post())->result_array());
			if ($ci) {
				// $this->session->set_userdata('msg','Already Exists');
			} else {
				$this->Admin_model->add_city($_POST);
			}
			redirect('admin/add_city');
		}
		$this->load->view('admin_common/head');
		$this->load->view('admin_common/header');
		$this->load->view('admin_common/sidebar');
		$this->load->view('add_city', $city);
		$this->load->view('admin_common/footer');
	}
	public function add_interest()
	{
		$interest['i'] = $this->Admin_model->get_interest();
		if (isset($_POST) && !empty($_POST)) {
			if (isset($_FILES) && !empty($_FILES)) {
				// print_r($this->input->post('title'));
				// exit();
				$i = count($this->db->get_where('interest', array('title' => $this->input->post('title')))->result_array());
				if ($i) {
					// $this->session->set_userdata('msg','Already Exists');
				} else {
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
					if ($query1) {
						redirect('admin/add_interest');
					}
				}
			}
		}
		$this->load->view('admin_common/head');
		$this->load->view('admin_common/header');
		$this->load->view('admin_common/sidebar');
		$this->load->view('add_interest', $interest);
		$this->load->view('admin_common/footer');
	}
	public function fetch_category()
	{
		if (isset($_POST) && !empty($_POST)) {
			$d = $this->Admin_model->fetch_category($_POST['interest_id']);
			// echo $d;
			foreach ($d as $details) {
				echo '<option value="' . $details['id'] . '">' . $details['title'] . '</option>';
			}
		}
	}
	public function add_category()
	{
		$category['i'] = $this->Admin_model->get_interest();
		$category['c'] = $this->Admin_model->get_category();
		if (isset($_POST) && !empty($_POST)) {
			if (isset($_FILES) && !empty($_FILES)) {
				$cat = count($this->db->get_where('category', array('title' => $this->input->post('title'), 'interest_id' => $this->input->post('interest_id')))->result_array());
				if ($cat) {
					// $this->session->set_userdata('msg','Already Exists');
				} else {
					$var = date('dMY') . rand(1111, 9999);
					$config['upload_path']          = './admin_assets/category_logo/';
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
					if ($query2) {
						redirect('admin/add_category');
					}
				}
			}
		}
		$this->load->view('admin_common/head');
		$this->load->view('admin_common/header');
		$this->load->view('admin_common/sidebar');
		$this->load->view('add_category', $category);
		$this->load->view('admin_common/footer');
	}
	public function fetch_subcategory()
	{
		if (isset($_POST) && !empty($_POST)) {
			$d = $this->Admin_model->fetch_subcategory($_POST['category_id']);
			// echo $d;
			foreach ($d as $details) {
				echo '<option value="' . $details['id'] . '">' . $details['title'] . '</option>';
			}
		}
	}
	public function add_subcategory()
	{
		$subcategory['i'] = $this->Admin_model->get_interest();
		$subcategory['sub'] = $this->Admin_model->get_subcategory();
		if (isset($_POST) && !empty($_POST)) {
			$subcat = count($this->db->get_where('subcategory', array('interest_id' => $this->input->post('interest_id'), 'category_id' => $this->input->post('category_id'), 'title' => $this->input->post('title')))->result_array());
			if ($subcat) {
				// $this->session->set_userdata('msg','Already Exists');
			} else {
				$this->Admin_model->add_subcategory($_POST);
				redirect('admin/add_subcategory');
			}
		}
		$this->load->view('admin_common/head');
		$this->load->view('admin_common/header');
		$this->load->view('admin_common/sidebar');
		$this->load->view('add_subcategory', $subcategory);
		$this->load->view('admin_common/footer');
	}
	public function add_socialmedia()
	{
		$social['soc'] = $this->Admin_model->get_socialmedia();

		if (isset($_POST) && !empty($_POST)) {
			if (isset($_FILES) && !empty($_FILES)) {
				// print_r($_POST);
				// print_r($social['soc']);
				// exit();
				$so = count($this->db->get_where('socialmedia', array('name' => $this->input->post('name')))->result_array());
				if ($so) {
					// $this->session->set_userdata('msg','Already Exists');
				} else {
					$var = date('dMY') . rand(1111, 9999);
					$config['upload_path']          = './admin_assets/social/';
					$config['allowed_types']        = 'jpg|jpeg|png|JPG|JPEG|PNG';
					$config['file_name']            = $var;
					$this->load->library('upload');
					$this->upload->initialize($config);
					if (!$this->upload->do_upload('icon')) {
						print_r($this->upload->display_errors());
					}
					$w = $this->upload->data();
					$_POST['icon'] = $w['file_name'];
					$query3 = $this->Admin_model->add_socialmedia($_POST);
					if ($query3) {
						redirect('admin/add_socialmedia');
					}
				}
			}
		}
		// print_r($social['soc']);
		$this->load->view('admin_common/head');
		$this->load->view('admin_common/header');
		$this->load->view('admin_common/sidebar');
		$this->load->view('add_socialmedia', $social);
		$this->load->view('admin_common/footer');
	}
	public function add_community()
	{
		$community['c'] = $this->Admin_model->get_country();
		$community['i'] = $this->Admin_model->get_interest();
		$community['com'] = $this->Admin_model->get_community();
		// print_r($community['com']);
		// exit();
		if (isset($_POST) && !empty($_POST)) {
			$co = count($this->db->get_where('community', array('title' => $this->input->post('title')))->result_array());
			if ($co) {
				// $this->session->set_userdata('msg','Already Exists');
			} else {
				$this->Admin_model->add_community($_POST);
				redirect('admin/add_community');
			}
		}
		$this->load->view('admin_common/head');
		$this->load->view('admin_common/header');
		$this->load->view('admin_common/sidebar');
		$this->load->view('add_community', $community);
		$this->load->view('admin_common/footer');
	}
	public function add_group()
	{
		$group['gr'] = $this->Admin_model->get_group();
		$group['comm'] = $this->db->get_where('community')->result_array();
		// $group['soc'] = $this->db->get_where('socialmedia')->result_array();
		if (isset($_POST) && !empty($_POST)) {
			$grp = count($this->db->get_where('group', array('name' => $this->input->post('name')))->result_array());
			if ($grp) {
				// $this->session->set_userdata('msg','Already Exists');
			} else {
				$wa = array(
					'name' => $_POST['name'],
					'community_id' => $_POST['community_id'],
					'url' => $_POST['w_url'],
					'description' => $_POST['w_description'],
					'type' => $_POST['w_type'],
					'fees' => $_POST['w_fees'],
					'status' => $_POST['w_status']
				);
				$fb = array(
					'name' => $_POST['name'],
					'community_id' => $_POST['community_id'],
					'url' => $_POST['f_url'],
					'description' => $_POST['f_description'],
					'type' => $_POST['f_type'],
					'fees' => $_POST['f_fees'],
					'status' => $_POST['f_status']
				);
				$ld = array(
					'name' => $_POST['name'],
					'community_id' => $_POST['community_id'],
					'url' => $_POST['l_url'],
					'description' => $_POST['l_description'],
					'type' => $_POST['l_type'],
					'fees' => $_POST['l_fees'],
					'status' => $_POST['l_status']
				);
				$tg = array(
					'name' => $_POST['name'],
					'community_id' => $_POST['community_id'],
					'url' => $_POST['t_url'],
					'description' => $_POST['t_description'],
					'type' => $_POST['t_type'],
					'fees' => $_POST['t_fees'],
					'status' => $_POST['t_status']
				);
				$this->Admin_model->add_whatsapp_group($wa);
				$this->Admin_model->add_facebook_group($fb);
				$this->Admin_model->add_linkdin_group($ld);
				$this->Admin_model->add_telegram_group($tg);
				redirect('admin/add_group');
			}
		}
		$this->load->view('admin_common/head');
		$this->load->view('admin_common/header');
		$this->load->view('admin_common/sidebar');
		$this->load->view('add_group', $group);
		$this->load->view('admin_common/footer');
	}
	public function individual_list()
	{
		$ind['in'] = $this->Admin_model->get_individual_list();
		$this->load->view('admin_common/head');
		$this->load->view('admin_common/header');
		$this->load->view('admin_common/sidebar');
		$this->load->view('individual_list',$ind);
		$this->load->view('admin_common/footer');
	}
	public function company_list()
	{
		$com['co'] = $this->Admin_model->get_company_list();
		$this->load->view('admin_common/head');
		$this->load->view('admin_common/header');
		$this->load->view('admin_common/sidebar');
		$this->load->view('company_list',$com);
		$this->load->view('admin_common/footer');
	}
}
