<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Blog extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Blog_model');
	}

	public function index()
	{
		$data['blogs'] = $this->Blog_model->get_all_blogs();
		if ($this->input->is_ajax_request()) {
			$this->load->view('blog/index', $data);
		} else {
			$this->load->view('templates/header');
			$this->load->view('blog/index', $data);
			$this->load->view('templates/footer');
		}
	}

	public function view($id)
	{
		$data['blog'] = $this->Blog_model->get_blog($id);
		$data['other_blogs'] = $this->Blog_model->get_all_blogs();

		if ($this->input->is_ajax_request()) {
			$this->load->view('blog/detail', $data);
		} else {
			$this->load->view('templates/header');
			$this->load->view('blog/detail', $data);
			$this->load->view('templates/footer');
		}
	}

}
?>