<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create extends CI_Controller 
{
    public function __construct() {
        parent::__construct();
        $this->load->model('Daftar_model');
        $this->load->library('form_validation');

        $result = $this->db->query("SELECT id FROM identitas ORDER BY id DESC LIMIT 1")->row_array();
        $this->identitas = $result['id'];
    }
    public function index() {
        if (!$this->session->userdata('nik')) {
            redirect('auth');
        }
        
        $data['title'] = 'Buat RPS';
        $data['mata_kuliah'] = $this->Daftar_model->getMatkul();
        $data['dosen_dekan'] = $this->Daftar_model->getDosenDekan();
        $data['dosen_kaprodi'] = $this->Daftar_model->getDosenKaprodi();
        $data['dosen_sekretaris'] = $this->Daftar_model->getDosenSekretaris();
        $data['dosen_pengampu'] = $this->Daftar_model->getDosenPengampu();
        $this->load->view('templates/header', $data);
        $this->load->view('create/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambahIdentitas() {
        $data['user'] = $this->db->get_where('user', ['nik' => $this->session->userdata('nik')])->row_array();
        $userId = $data['user']['id'];

        $this->form_validation->set_rules('nomor', 'Nomor RPS', 'required');
        $this->form_validation->set_rules('nomor', 'Nomor RPS', 'required');
        $this->form_validation->set_rules('revisi', 'Revisi', 'required');
        $this->form_validation->set_rules('tanggal_susun', 'Tanggal Penyusunan', 'required');
        $this->form_validation->set_rules('tanggal_berlaku', 'Tanggal Berlaku', 'required');

        if ($this->form_validation->run() == FALSE) {
            
        } else {
            $data = [
                'mata_kuliah' => $this->input->post('mata_kuliah'),
                'nomor' => $this->input->post('nomor'),
                'tanggal_berlaku' => $this->input->post('tanggal_berlaku'),
                'tanggal_susun' => $this->input->post('tanggal_susun'),
                'revisi' => $this->input->post('revisi'),
                'dosen_dekan' => $this->input->post('dosen_dekan'),
                'dosen_kaprodi' => $this->input->post('dosen_kaprodi'),
                'dosen_sekretaris' => $this->input->post('dosen_sekretaris'),
                'dosen_pengampu' => $this->input->post('dosen_pengampu'),
                'nilai_presensi' => $this->input->post('nilai_presensi'),
                'nilai_mid' => $this->input->post('nilai_mid'),
                'nilai_akhir' => $this->input->post('nilai_akhir'),
                'nilai_tugas' => $this->input->post('nilai_tugas'),
                'user' => $userId
            ];
            $this->Daftar_model->insertIdentitas($data);
        }
        redirect('create#gu');
    }

    public function tambahGambaran() {
        $this->form_validation->set_rules('content_gambaran', 'Gambaran Umum', 'required');

        $id= $this->identitas;

        if($this->form_validation->run() == FALSE) {

        } else {
            $data = [
                'content_gambaran' => $this->input->post('content_gambaran'),
                'identitas' => $id
            ];
            $this->Daftar_model->insertGambaran($data);   
        }
        redirect('create#gu');
    }

    public function tambahCapaian() {
        $this->form_validation->set_rules('content_capaian', 'Capaian Pembelajaran', 'required');

        $id= $this->identitas;

        if($this->form_validation->run() == FALSE) {

        } else {
            $data = [
                'content_capaian' => $this->input->post('content_capaian'),
                'identitas' => $id
            ];
            $this->Daftar_model->insertCapaian($data);   
        }
        redirect('create#cp');
    }

    public function tambahPrasyarat() {
        $this->form_validation->set_rules('content_prasyarat', 'Prasyarat', 'required');

        $id= $this->identitas;

        if($this->form_validation->run() == FALSE) {

        } else {
            $data = [
                'content_prasyarat' => $this->input->post('content_prasyarat'),
                'identitas' => $id
            ];
            $this->Daftar_model->insertPrasyarat($data);   
        }
        redirect('create#p');
    }

    public function tambahUnit() {
        $this->form_validation->set_rules('unit_kemampuan', 'Kemampuan Akhir yang diharapakan', 'required');
        $this->form_validation->set_rules('unit_indikator', 'Indikator', 'required');
        $this->form_validation->set_rules('bahan_kajian', 'Bahan Kajian', 'required');
        $this->form_validation->set_rules('metode_pembelajaran', 'Metode Pembelajaran', 'required');
        $this->form_validation->set_rules('unit_waktu', 'Waktu', 'required');
        $this->form_validation->set_rules('metode_penilaian', 'Metode Penelitian', 'required');
        $this->form_validation->set_rules('bahan_ajar', 'Bahan Ajar', 'required');

        $id= $this->identitas;

        if($this->form_validation->run() == FALSE) {

        } else {
            $data = [
                'unit_kemampuan' => $this->input->post('unit_kemampuan'),
                'unit_indikator' => $this->input->post('unit_indikator'),
                'bahan_kajian' => $this->input->post('bahan_kajian'),
                'metode_pembelajaran' => $this->input->post('metode_pembelajaran'),
                'unit_waktu' => $this->input->post('unit_waktu'),
                'metode_penilaian' => $this->input->post('metode_penilaian'),
                'bahan_ajar' => $this->input->post('bahan_ajar'),
                'identitas' => $id
            ];
            $this->Daftar_model->insertUnit($data);   
        }
        redirect('create#up');
    }

    public function tambahTugas() {
        $this->form_validation->set_rules('tugas', 'Tugas/Aktivitas', 'required');
        $this->form_validation->set_rules('tugas_kemampuan', 'Kemampuan Akhir yang diharapkan', 'required');
        $this->form_validation->set_rules('tugas_waktu', 'Waktu', 'required');
        $this->form_validation->set_rules('bobot', 'Bobot', 'required');
        $this->form_validation->set_rules('kriteria_penilaian', 'Kriteria Penilaian', 'required');
        $this->form_validation->set_rules('tugas_indikator', 'Indikator', 'required');

        $id= $this->identitas;

        if($this->form_validation->run() == FALSE) {

        } else {
            $data = [
                'tugas' => $this->input->post('tugas'),
                'tugas_kemampuan' => $this->input->post('tugas_kemampuan'),
                'tugas_waktu' => $this->input->post('tugas_waktu'),
                'bobot' => $this->input->post('bobot'),
                'kriteria_penilaian' => $this->input->post('kriteria_penilaian'),
                'tugas_indikator' => $this->input->post('tugas_indikator'),
                'identitas' => $id
            ];
            $this->Daftar_model->insertTugas($data);   
        }
        redirect('create#tp');
    }

    public function tambahReferensi() {
        $this->form_validation->set_rules('content_referensi', 'Referensi', 'required');

        $id= $this->identitas;

        if($this->form_validation->run() == FALSE) {

        } else {
            $data = [
                'content_referensi' => $this->input->post('content_referensi'),
                'identitas' => $id
            ];
            $this->Daftar_model->insertReferensi($data);   
        }
        redirect('create#r');
    }

    public function tambahRencana() {
        $this->form_validation->set_rules('minggu', 'Minggu', 'required');
        $this->form_validation->set_rules('rencana_kemampuan', 'Kemampuan Akhir yang diharapakan', 'required');
        $this->form_validation->set_rules('rencana_indikator', 'Indikator', 'required');
        $this->form_validation->set_rules('topik', 'Topik', 'required');
        $this->form_validation->set_rules('aktivitas', 'Aktivitas', 'required');
        $this->form_validation->set_rules('rencana_waktu', 'Waktu', 'required');
        $this->form_validation->set_rules('penilaian', 'Penilaian', 'required');

        $id= $this->identitas;

        if($this->form_validation->run() == FALSE) {

        } else {
            $data = [
                'minggu' => $this->input->post('minggu'),
                'rencana_kemampuan' => $this->input->post('rencana_kemampuan'),
                'rencana_indikator' => $this->input->post('rencana_indikator'),
                'topik' => $this->input->post('topik'),
                'aktivitas' => $this->input->post('aktivitas'),
                'rencana_waktu' => $this->input->post('rencana_waktu'),
                'penilaian' => $this->input->post('penilaian'),
                'identitas' => $id
            ];
            $this->Daftar_model->insertRencana($data);   
        }
        redirect('create#rp');
    }
}