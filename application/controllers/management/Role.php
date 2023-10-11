<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Role extends CI_Controller
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
        $data['roles'] = $this->db->get('mgt_role')->result();
        $data['menus'] = $this->db->get('mgt_menu')->result();
        if ($this->input->post('aksi') == "add") {
            $this->form_validation->set_rules('rolename', 'role name', 'trim|required|is_unique[mgt_role.rolename]');
        } elseif ($this->input->post('aksi') == "update") {
            if ($this->input->post('old_rolename') != $this->input->post('rolename')) {
                $this->form_validation->set_rules('rolename', 'role name', 'trim|required|is_unique[mgt_role.rolename]');
            } else {
                $this->form_validation->set_rules('rolename', 'role name', 'trim|required');
            }
        }
        $this->form_validation->set_rules('roledescription', 'role description', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/management_role', $data);
            $this->load->view('templates/footer');
        } else {
            if ($this->input->post('aksi') == "add") {
                $this->db->insert('mgt_role', [
                    'rolename' => $this->input->post('rolename'),
                    'roledescription' => $this->input->post('roledescription'),
                    'active' => $this->input->post('active') ?? 0,
                    'createdby' => $data['user']['name'],
                    'updateby' => $data['user']['name']
                ]);
                $roleid = $this->db->insert_id();
                $menuid = $this->input->post('menuid');
                $access = $this->input->post('access');
                $create = $this->input->post('create');
                $edit = $this->input->post('edit');
                $delete = $this->input->post('delete');
                foreach ($menuid as $key => $value) {
                    $this->db->insert('mgt_role_menu', [
                        'roleid' => $roleid,
                        'menuid' => $value,
                        'access' => $access[$value] ?? 0,
                        'create' => $create[$value] ?? 0,
                        'edit' => $edit[$value] ?? 0,
                        'delete' => $delete[$value] ?? 0,
                        'createdby' => $data['user']['name'],
                        'updateby' => $data['user']['name']
                    ]);
                }
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    New role Added!
                    </div>');
            } elseif ($this->input->post('aksi') == "update") {
                $data = array(
                    'rolename' => $this->input->post('rolename'),
                    'roledescription' => $this->input->post('roledescription'),
                    'active' => $this->input->post('active') ?? 0,
                    'updateby' => $data['user']['name'],
                    'updatedate' =>  date('Y-m-d H:i:s'),
                );
                $this->db->where('roleid', $this->input->post('roleid'));
                $this->db->update('mgt_role', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                role Updated!
                    </div>');
            }
            // redirect('admin/role');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function delete($roleid)
    {
        $this->db->where('roleid', $roleid);
        $this->db->delete('mgt_role');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        role Deleted!
			</div>');

        redirect($_SERVER['HTTP_REFERER']);
    }
}
