<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller 
{
    public function __construct() {
        parent::__construct();
        $this->load->model('Daftar_model');
    }
    public function index() {
        if (!$this->session->userdata('nik')) {
            redirect('auth');
        }
    
        $data['user'] = $this->db->get_where('user', ['nik' => $this->session->userdata('nik')])->row_array();
        $data['userId'] = $data['user']['id'];
        $data['title'] = 'Daftar RPS';
        $data['identitas'] = [];
        
        $data['keyword'] = $this->input->post('keyword');

        if ($this->input->post('submit')) {
            $data['identitas'] = $this->Daftar_model->getIdentitasAfterSearch($data);
        } else {
            $data['keyword'] = [];
            $data['identitas'] = $this->Daftar_model->getIdentitas($data);
        }

        $this->load->view('templates/header', $data);
        $this->load->view('daftar/index', $data);
        $this->load->view('templates/footer');
    }    
    public function del() {
        $idi = $this->uri->segment(3);

        $this->Daftar_model->deleteAll($idi);
        $this->Daftar_model->deleteIdentitas($idi);
        redirect('daftar');
    }
}