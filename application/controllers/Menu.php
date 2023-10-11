<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        date_default_timezone_set('Asia/Jakarta');
    }
    public function index()
    {
        $data['title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('mgt_user', ['email' => $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get('mgt_menu')->result_array();

        $this->form_validation->set_rules('menuname', 'Menu', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('mgt_menu', ['menuname' => $this->input->post('menuname')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New Menu Add</div>');
            redirect('menu');
        }
    }
}
