<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'User Login';
        $this->load->view('templates/auth_header', $data);
        $this->load->view('auth/login');
        $this->load->view('templates/auth_footer');
    }
    
    public function regis()
    {
        $data['title'] = 'User Registration';
        $this->load->view('templates/auth_header', $data);
        $this->load->view('auth/regis');
        $this->load->view('templates/auth_footer');

    }
}