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
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('mgt_user', ['email' => $this->session->userdata('email')])->row_array();
        
        $this->db->select('mgt_user.*, mgt_team.teamdescription, mgt_role.rolename');
        $this->db->join('mgt_team', 'mgt_user.teamid = mgt_team.teamid', 'left');
        $this->db->join('mgt_role', 'mgt_user.roleid = mgt_role.roleid', 'left');
        $data['users'] = $this->db->get('mgt_user')->result();
        $data['teams'] = $this->db->get('mgt_team')->result();
        $data['roles'] = $this->db->get('mgt_role')->result();
        // echo $this->input->post('id');
        // die;
        if($this->input->post('aksi') == "add"){
            $this->form_validation->set_rules('email', 'email', 'trim|required|is_unique[mgt_user.email]');
        } elseif ($this->input->post('aksi') == "update") {
            if ($this->input->post('old_email') != $this->input->post('email')) {
                $this->form_validation->set_rules('email', 'email', 'trim|required|is_unique[mgt_user.email]');
            } else{
                $this->form_validation->set_rules('email', 'email', 'trim|required');
            }
        }
        $this->form_validation->set_rules('name', 'name', 'trim|required');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]', [
            'matches' => 'password dont match!',
            'min_length' => 'password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Confrim Password', 'required|trim|matches[password1]');
        $this->form_validation->set_rules('roleid', 'Role', 'required');
        $this->form_validation->set_rules('teamid', 'Team', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/management_user', $data);
            $this->load->view('templates/footer');
        } else {
            
            $new_image = 'default.jpg';
            $upload_image = $_FILES['image']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
                $config['upload_path'] = './assets/img/profile';
                $config['max_size']     = '4096';

                // Generate random file name
                $config['file_name'] = uniqid();
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('image')) {
                    $new_image = $this->upload->data('file_name');
                    if ($this->input->post('aksi') == "update") {
                        $this->db->set('image', $new_image);
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                    redirect($_SERVER['HTTP_REFERER']);
                }
            }
            if ($this->input->post('aksi') == "add") {
                $this->db->insert('mgt_user', [
                    'name' => $this->input->post('name'),
                    'email' => $this->input->post('email'),
                    'image' => $new_image,
                    'teamid' => $this->input->post('teamid'),
                    'roleid' => $this->input->post('roleid'),
                    'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                    'active' => $this->input->post('active') ?? 0,
                    'createdby' => $data['user']['name'],
                    'updateby' => $data['user']['name']
                ]);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    New user Added!
                    </div>');
            } elseif ($this->input->post('aksi') == "update") {
                $data = array(
                    'name' => $this->input->post('name'),
                    'email' => $this->input->post('email'),
                    'teamid' => $this->input->post('teamid'),
                    'roleid' => $this->input->post('roleid'),
                    'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                    'active' => $this->input->post('active') ?? 0,
                    'updateby' => $data['user']['name'],
                    'updatedate' =>  date('Y-m-d H:i:s'),
                );
                $this->db->where('userid', $this->input->post('userid'));
                $this->db->update('mgt_user', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                user Updated!
                    </div>');
            }
            // redirect('admin/role');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function delete($userid)
    {
        $this->db->where('userid', $userid);
        $this->db->delete('mgt_user');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        user Deleted!
			</div>');

        redirect($_SERVER['HTTP_REFERER']);
    }
}
