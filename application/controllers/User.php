<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller

{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        date_default_timezone_set('Asia/Jakarta');
    }
    public function index()
    {

        // if($this->session->userdata('roleid') == 1){
        //     redirect('admin');
        // }
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('mgt_user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template_user/header', $data);
        $this->load->view('template_user/sidebar', $data);
        $this->load->view('template_user/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('template_user/footer');
    }

    public function profile()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('mgt_user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('template_user/header', $data);
        $this->load->view('template_user/sidebar', $data);
        $this->load->view('template_user/topbar', $data);
        $this->load->view('user/profile', $data);
        $this->load->view('template_user/footer');
    }
    public function application_list()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('mgt_user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('template_user/header', $data);
        $this->load->view('template_user/sidebar', $data);
        $this->load->view('template_user/topbar', $data);
        $this->load->view('user/application_list', $data);
        $this->load->view('template_user/footer');
    }
    public function inventory_list()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('mgt_user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('template_user/header', $data);
        $this->load->view('template_user/sidebar', $data);
        $this->load->view('template_user/topbar', $data);
        $this->load->view('user/inventory_list', $data);
        $this->load->view('template_user/footer');
    }
    public function Knowledge_management()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('mgt_user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('template_user/header', $data);
        $this->load->view('template_user/sidebar', $data);
        $this->load->view('template_user/topbar', $data);
        $this->load->view('user/knowledge_management', $data);
        $this->load->view('template_user/footer');
    }
    public function certificate_ssl()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('mgt_user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('template_user/header', $data);
        $this->load->view('template_user/sidebar', $data);
        $this->load->view('template_user/topbar', $data);
        $this->load->view('user/certificate_ssl', $data);
        $this->load->view('template_user/footer');
    }
}
