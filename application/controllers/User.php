<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //login helper di application/helper & set_autoload helper
        is_logged_in();
    }
    public function index(){
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        // echo 'selamat datang ' . $data['user']['Nama'];
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');

    }

    public function edit(){
        $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');
      
    if ($this->form_validation->run() == false) {
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/edit', $data);
        $this->load->view('templates/footer');
    } 
    else 
    {
            $name = $this->input->post('name');
            $email = $this->input->post('email');

            // $upload_image = $_FILES['image'];
            // var_dump($upload_image);
            // die;

            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('user');
           
            $this->session->set_flashdata('message', 
            '<div class="alert alert-success" role="alert" style="text-align:center;">
            Your profile has been updated!</div>');
            redirect('user');
            
        }

        
    }
    
}