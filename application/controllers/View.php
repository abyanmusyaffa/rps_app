<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller 
{
    public function index() {
        if (!$this->session->userdata('nik')) {
            redirect('auth');
        }
        
        $idi = $this->uri->segment(3);

        $this->load->model('Preview_model');
        $data['title'] = 'View RPS |';
        $data['identitas'] = $this->Preview_model->getPreview($idi);
        $data['gambaran_umum'] = $this->Preview_model->getGambaranUmum($idi);
        $data['capaian_pembelajaran'] = $this->Preview_model->getCapaian($idi);
        $data['prasyarat'] = $this->Preview_model->getPrasyarat($idi);
        $data['referensi'] = $this->Preview_model->getReferensi($idi);
        $data['unit_pembelajaran'] = $this->Preview_model->getUnit($idi);
        $data['tugas_penilaian'] = $this->Preview_model->getTugas($idi);
        $data['rencana_pembelajaran'] = $this->Preview_model->getRencana($idi);
        $this->load->view('view_rps/index', $data);
    }
}