<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
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

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function management_user()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('mgt_user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/management_user', $data);
        // $this->load->view('admin/user_form', $data);
        $this->load->view('templates/footer');
    }
    
    public function management_menu()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('mgt_user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/management_menu', $data);
        // $this->load->view('admin/user_form', $data);
        $this->load->view('templates/footer');
    }

    public function management_aplikasi()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('mgt_user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/management_aplikasi', $data);
        $this->load->view('templates/footer');
    }

    public function management_role()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('mgt_user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/management_role', $data);
        $this->load->view('templates/footer');
    }

    public function management_team()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('mgt_user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/management_team', $data);
        $this->load->view('templates/footer');
    }

    public function application_list()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('mgt_user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/application_list', $data);
        $this->load->view('templates/footer');
    }

    public function inventory_list()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('mgt_user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/inventory_list', $data);
        $this->load->view('templates/footer');
    }

    public function profile()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('mgt_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['teams'] = $this->db->get('mgt_team')->result();
        $data['roles'] = $this->db->get('mgt_role')->result();
        // echo $this->input->post('id');
        // die;
        if ($this->input->post('aksi') == "profile") {
            if ($this->input->post('old_email') != $this->input->post('email')) {
                $this->form_validation->set_rules('email', 'email', 'trim|required|is_unique[mgt_user.email]');
            } else {
                $this->form_validation->set_rules('email', 'email', 'trim|required');
            }
            $this->form_validation->set_rules('name', 'name', 'trim|required');
            $this->form_validation->set_rules('roleid', 'Role', 'required');
            $this->form_validation->set_rules('teamid', 'Team', 'required');
        } elseif ($this->input->post('aksi') == "password") {
            $this->form_validation->set_rules('password', 'Password', 'required');
            if (!password_verify($this->input->post('password'), $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                redirect($_SERVER['HTTP_REFERER']);
            }
            $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]', [
                'matches' => 'password dont match!',
                'min_length' => 'password too short!'
            ]);
            $this->form_validation->set_rules('password2', 'Confrim Password', 'required|trim|matches[password1]');
        }
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/profile', $data);
            // $this->load->view('admin/user_form', $data);
            $this->load->view('templates/footer');
        } else {

            $new_image = 'default.jpg';
            $upload_image = $_FILES['image']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|svg';
                $config['upload_path'] = './assets/img/profile';
                $config['max_size']     = '4096';

                // Generate random file name
                $config['file_name'] = uniqid();
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('image')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                    redirect($_SERVER['HTTP_REFERER']);
                }
            }
            if ($this->input->post('aksi') == "password") {
                $data = array(
                    'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                );
                $this->db->where('userid', $this->input->post('userid'));
                $this->db->update('mgt_user', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Password updated!
                    </div>');
            } elseif ($this->input->post('aksi') == "profile") {
                $data = array(
                    'name' => $this->input->post('name'),
                    'email' => $this->input->post('email'),
                    'teamid' => $this->input->post('teamid'),
                    'roleid' => $this->input->post('roleid'),
                    // 'active' => $this->input->post('active') ?? 1,
                    'updateby' => $data['user']['name'],
                    'updatedate' =>  date('Y-m-d H:i:s'),
                );
                $this->db->where('userid', $this->input->post('userid'));
                $this->db->update('mgt_user', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Profile Updated!
                    </div>');
            }
            redirect($_SERVER['HTTP_REFERER']);
        }
    }
}
