<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller 
{
    public function index() {
        if (!$this->session->userdata('nik')) {
            redirect('auth');
        }

        $this->load->model('Daftar_model');
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['nik' => $this->session->userdata('nik')])->row_array();
        $data['userId'] = $data['user']['id'];
        $data['identitas'] = $this->Daftar_model->getIdentitasForDashboard($data); 
        $this->load->view('templates/header', $data);
        $this->load->view('dashboard/index', $data);
        $this->load->view('templates/footer');
    }
}