<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Application extends CI_Controller
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
        $data['applications'] = $this->db->get('mgt_application')->result();
        if ($this->input->post('aksi') == "add") {
            $this->form_validation->set_rules('applicationname', 'application name', 'trim|required|is_unique[mgt_application.applicationname]');
            $this->form_validation->set_rules('applicationid', 'application id', 'trim|required|is_unique[mgt_application.applicationid]');
        } elseif ($this->input->post('aksi') == "update") {
            if ($this->input->post('old_applicationname') != $this->input->post('applicationname')) {
                $this->form_validation->set_rules('applicationname', 'application name', 'trim|required|is_unique[mgt_application.applicationname]');
                $this->form_validation->set_rules('applicationid', 'application id', 'trim|required|is_unique[mgt_application.applicationid]');
            } else {
                $this->form_validation->set_rules('applicationname', 'application name', 'trim|required');
                $this->form_validation->set_rules('applicationid', 'application id', 'trim|required');
            }
        }

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/management_application', $data);
            $this->load->view('templates/footer');
        } else {
            if ($this->input->post('aksi') == "add") {
                $this->db->insert('mgt_application', [
                    'applicationname' => $this->input->post('applicationname'),
                    'active' => $this->input->post('active') ?? 0,
                    'createdby' => $data['user']['name'],
                    'updateby' => $data['user']['name']
                ]);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    New application Added!
                    </div>');
            } elseif ($this->input->post('aksi') == "update") {
                $data = array(
                    'applicationname' => $this->input->post('applicationname'),
                    'active' => $this->input->post('active') ?? 0,
                    'updateby' => $data['user']['name'],
                    'updatedate' =>  date('Y-m-d H:i:s'),
                );
                $this->db->where('applicationid', $this->input->post('applicationid'));
                $this->db->update('mgt_application', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                application Updated!
                    </div>');
            }
            // redirect('admin/role');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function delete($applicationid)
    {
        $this->db->where('applicationid', $applicationid);
        $this->db->delete('mgt_application');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        application Deleted!
			</div>');

        redirect($_SERVER['HTTP_REFERER']);
    }
}
