<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
    }

    public function index()
    {
        $data['blogs'] = $this->Admin_model->get_all_blogs();
        $this->load->view('admin/list', $data);
    }

    public function create()
    {
        $this->load->library('form_validation');
        log_message('debug', 'Create form data: ' . json_encode($this->input->post()));

        // Set validation rules
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('short_content', 'Short Content', 'required');
        $this->form_validation->set_rules('content', 'Content', 'required');
        $this->form_validation->set_rules('author', 'Author', 'required');
        $this->form_validation->set_rules('category', 'Category', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/edit');
        } else {
            $this->handleFormSubmission();
        }
    }

    public function edit($id)
    {
        $this->load->library('form_validation');
        log_message('debug', 'Create form data: ' . json_encode($this->input->post()));

        // Set validation rules
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('short_content', 'Short Content', 'required');
        $this->form_validation->set_rules('content', 'Content', 'required');
        $this->form_validation->set_rules('author', 'Author', 'required');
        $this->form_validation->set_rules('category', 'Category', 'required');

        if ($this->form_validation->run() == false) {
            $data['blog'] = $this->Admin_model->get_blog($id);

            if (empty($data['blog'])) {
                show_404();
            }

            $this->load->view('admin/edit', $data);
        } else {
            $this->handleFormSubmission($id);
        }
    }

    private function handleFormSubmission($id = null)
    {
        // Image upload configuration
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = 2048; // 2MB max size
        $config['encrypt_name'] = TRUE; // Encrypt the uploaded file name

        $this->load->library('upload', $config);

        $image_name = null;
        if ($this->upload->do_upload('image')) {
            $upload_data = $this->upload->data();
            $image_name = $upload_data['file_name'];
        }

        // Prepare blog entry data
        $data = array(
            'title' => $this->input->post('title'),
            'short_content' => $this->input->post('short_content'),
            'content' => $this->input->post('content'),
            'author' => $this->input->post('author'),
            'category' => $this->input->post('category'),
            'meta_title' => $this->input->post('meta_title'),
            'meta_keywords' => $this->input->post('meta_keywords'),
            'meta_description' => $this->input->post('meta_description'),
        );

        // If a new image was uploaded, include its name in the data
        if ($image_name) {
            $data['image'] = $image_name;
        }

        // Determine whether to insert or update the record
        if ($id === null) {
            $this->Admin_model->insert_blog($data);
        } else {
            $this->Admin_model->update_blog($id, $data);
        }

        redirect('admin');
    }

    public function delete($id)
    {
        $this->Admin_model->delete_blog($id);
        redirect('admin');
    }
}
?>