<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Knowledge extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('Knowledge_model');
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('mgt_user', ['email' => $this->session->userdata('email')])->row_array();

        $this->db->select('knowledge.*, mgt_application.applicationname');
        $this->db->join('mgt_application', 'knowledge.applicationid = mgt_application.applicationid', 'left');
        $data['knowledges'] = $this->db->get('knowledge')->result();
        $data['applications'] = $this->db->get('mgt_application')->result();
        $this->form_validation->set_rules('version', 'Version', 'required|callback_check_unique');
        $this->form_validation->set_rules('applicationid', 'Application ID', 'required|callback_check_unique');
        $this->form_validation->set_rules('docs', 'Docs', 'required|trim');
        $this->form_validation->set_rules('notes', 'Notes', 'required|trim');
        
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/management_knowledge', $data);
            $this->load->view('templates/footer');
        } else {
            if ($this->input->post('aksi') == "add") {
                $this->db->insert('knowledge', [
                    'applicationid' => $this->input->post('applicationid'),
                    'version' => $this->input->post('version'),
                    'docs' => $this->input->post('docs'),
                    'notes' => $this->input->post('notes'),
                    'createdby' => $data['user']['name'],
                    'updateby' => $data['user']['name']
                ]);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    New knowledge Added!
                    </div>');
            } elseif ($this->input->post('aksi') == "update") {
                $data = array(
                    'applicationid' => $this->input->post('applicationid'),
                    'docs' => $this->input->post('docs'),
                    'notes' => $this->input->post('notes'),
                    'updateby' => $data['user']['name'],
                    'updatedate' =>  date('Y-m-d H:i:s'),
                );
                $this->db->where('knowledgeid', $this->input->post('knowledgeid'));
                $this->db->update('knowledge', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                knowledge Updated!
                    </div>');
            }
            // redirect('admin/role');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function delete($knowledgeid)
    {
        $this->db->where('knowledgeid', $knowledgeid);
        $this->db->delete('knowledge');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        knowledge Deleted!
			</div>');

        redirect($_SERVER['HTTP_REFERER']);
    }

    function check_unique($value)
    {
        // Mengambil nilai dari applicationid dan version
        $applicationid = $this->input->post('applicationid');
        $version = $this->input->post('version');

        // Menggunakan model atau mekanisme lain untuk memeriksa keunikan
        // Misalnya, jika menggunakan model, panggil fungsi model untuk memeriksa keunikan

        // Contoh dengan model:
        $isUnique = $this->Knowledge_model->isUniqueApplicationOrVersion($applicationid, $version);

        if (!$isUnique) {
            $this->form_validation->set_message('check_unique', 'Either Application ID or Version must be unique.');
            return false;
        }

        return true;
    }
}
