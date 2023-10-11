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
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('mgt_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menus'] = $this->db->get('mgt_menu')->result();
        if ($this->input->post('aksi') == "add") {
            $this->form_validation->set_rules('menuname', 'menu name', 'trim|required|is_unique[mgt_menu.menuname]');
        } elseif ($this->input->post('aksi') == "update") {
            if ($this->input->post('old_menuname') != $this->input->post('menuname')) {
                $this->form_validation->set_rules('menuname', 'menu name', 'trim|required|is_unique[mgt_menu.menuname]');
            } else {
                $this->form_validation->set_rules('menuname', 'menu name', 'trim|required');
            }
        }

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/management_menu', $data);
            $this->load->view('templates/footer');
        } else {
            if ($this->input->post('aksi') == "add") {
                $this->db->insert('mgt_menu', [
                    'menuname' => $this->input->post('menuname'),
                    'active' => $this->input->post('active') ?? 0,
                    'createdby' => $data['user']['name'],
                    'updateby' => $data['user']['name']
                ]);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    New menu Added!
                    </div>');
            } elseif ($this->input->post('aksi') == "update") {
                $data = array(
                    'menuname' => $this->input->post('menuname'),
                    'active' => $this->input->post('active') ?? 0,
                    'updateby' => $data['user']['name'],
                    'updatedate' =>  date('Y-m-d H:i:s'),
                );
                $this->db->where('menuid', $this->input->post('menuid'));
                $this->db->update('mgt_menu', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                menu Updated!
                    </div>');
            }
            // redirect('admin/role');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function delete($menuid)
    {
        $this->db->where('menuid', $menuid);
        $this->db->delete('mgt_menu');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Menu Deleted!
			</div>');

        redirect($_SERVER['HTTP_REFERER']);
    }


}