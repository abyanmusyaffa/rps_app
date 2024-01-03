<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Preview extends CI_Controller 
{
    public function __construct() {
        parent::__construct();
        $this->load->model('Preview_model');
        $this->load->model('Daftar_model');
    }

    public function index() {
        if (!$this->session->userdata('nik')) {
            redirect('auth');
        }
        
        $idi = $this->uri->segment(3);

        $data['title'] = 'Preview RPS';
        $data['preview'] = $this->Preview_model->getPreview($idi);
        $data['gambaran_umum'] = $this->Preview_model->getGambaranUmum($idi);
        $data['capaian_pembelajaran'] = $this->Preview_model->getCapaian($idi);
        $data['prasyarat'] = $this->Preview_model->getPrasyarat($idi);
        $data['referensi'] = $this->Preview_model->getReferensi($idi);
        $data['unit_pembelajaran'] = $this->Preview_model->getUnit($idi);
        $data['tugas_penilaian'] = $this->Preview_model->getTugas($idi);
        $data['rencana_pembelajaran'] = $this->Preview_model->getRencana($idi);
        $this->load->view('templates/header', $data);
        $this->load->view('preview/index', $data);
        $this->load->view('templates/footer');
    }

    public function editIdentitas() {
        $idi = $this->uri->segment(3);
        
        $data['preview'] = $this->Preview_model->getPreview($idi);
        
        $data['title'] = 'Edit Identitas RPS';
        $data['mata_kuliah'] = $this->Daftar_model->getMatkul();
        $data['dosen_dekan'] = $this->Daftar_model->getDosenDekan();
        $data['dosen_kaprodi'] = $this->Daftar_model->getDosenKaprodi();
        $data['dosen_sekretaris'] = $this->Daftar_model->getDosenSekretaris();
        $data['dosen_pengampu'] = $this->Daftar_model->getDosenPengampu(); 

        $this->form_validation->set_rules('nomor', 'Nomor RPS', 'required');
        $this->form_validation->set_rules('revisi', 'Revisi', 'required');
        $this->form_validation->set_rules('tanggal_susun', 'Tanggal Penyusunan', 'required');
        $this->form_validation->set_rules('tanggal_berlaku', 'Tanggal Berlaku', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data); 
            $this->load->view('edit_identitas/index', $data); 
            $this->load->view('templates/footer', ); 
        } else {
            $update_data = [
                'idi' => $this->input->post('idi'),
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
                'nilai_tugas' => $this->input->post('nilai_tugas')
            ];
            $this->Preview_model->updateIdentitas($update_data);

            if ($this->db->affected_rows() > 0) {
                redirect('preview/index/' . $this->input->post('idi') );
                $this->session->set_flashdata('message', 'berhasil');
            } else {
                $this->session->set_flashdata('message', 'gagal');
            }
        }
    }

    public function editGambaran() {
        $this->form_validation->set_rules('content_gambaran', 'Gamabaran Umum', 'required');

        if ($this->form_validation->run() == FALSE) {
            
        } else {
            $data = [
                'id' => $this->input->post('id'),
                'identitas' => $this->input->post('idi'),
                'content_gambaran' => $this->input->post('content_gambaran')
            ];
            $this->Preview_model->updateGambaran($data);
            redirect('preview/index/' . $this->input->post('idi'));
        }
    }
    public function editCapaian() {
        $this->form_validation->set_rules('content_capaian', 'Capaian Pembelajaran', 'required');

        if ($this->form_validation->run() == FALSE) {
            
        } else {
            $data = [
                'id' => $this->input->post('id'),
                'identitas' => $this->input->post('idi'),
                'content_capaian' => $this->input->post('content_capaian')
            ];
            $this->Preview_model->updateCapaian($data);
            redirect('preview/index/' . $this->input->post('idi'));
        }
    }
    public function editPrasyarat() {
        $this->form_validation->set_rules('content_prasyarat', 'Prasyarat', 'required');

        if ($this->form_validation->run() == FALSE) {
            
        } else {
            $data = [
                'id' => $this->input->post('id'),
                'identitas' => $this->input->post('idi'),
                'content_prasyarat' => $this->input->post('content_prasyarat')
            ];
            $this->Preview_model->updatePrasyarat($data);
            redirect('preview/index/' . $this->input->post('idi'));
        }
    }
    public function editReferensi() {
        $this->form_validation->set_rules('content_referensi', 'Referensi', 'required');

        if ($this->form_validation->run() == FALSE) {
            
        } else {
            $data = [
                'id' => $this->input->post('id'),
                'identitas' => $this->input->post('idi'),
                'content_referensi' => $this->input->post('content_referensi')
            ];
            $this->Preview_model->updateReferensi($data);
            redirect('preview/index/' . $this->input->post('idi'));
        }
    }
    public function editUnit() {
        $this->form_validation->set_rules('unit_kemampuan', 'Kemampuan Akhir', 'required');
        $this->form_validation->set_rules('unit_indikator', 'Indikator', 'required');
        $this->form_validation->set_rules('bahan_kajian', 'Bahan Kajian', 'required');
        $this->form_validation->set_rules('metode_pembelajaran', 'Metode Pembelajaran', 'required');
        $this->form_validation->set_rules('unit_waktu', 'Waktu', 'required');
        $this->form_validation->set_rules('metode_penilaian', 'Mrtode Penilaian', 'required');
        $this->form_validation->set_rules('bahan_ajar', 'Bahan Ajar', 'required');

        if ($this->form_validation->run() == FALSE) {
            
        } else {
            $data = [
                'id' => $this->input->post('id'),
                'unit_kemampuan' => $this->input->post('unit_kemampuan'),
                'unit_indikator' => $this->input->post('unit_indikator'),
                'bahan_kajian' => $this->input->post('bahan_kajian'),
                'metode_pembelajaran' => $this->input->post('metode_pembelajaran'),
                'unit_waktu' => $this->input->post('unit_waktu'),
                'metode_penilaian' => $this->input->post('metode_penilaian'),
                'bahan_ajar' => $this->input->post('bahan_ajar'),
                'identitas' => $this->input->post('idi'),
            ];
            $this->Preview_model->updateUnit($data);
            redirect('preview/index/' . $this->input->post('idi'));
        }
    }
    public function editTugas() {
        $this->form_validation->set_rules('tugas', 'Tugas/Aktivitas', 'required');
        $this->form_validation->set_rules('tugas_kemampuan', 'Kemampuan Akhir yang diharapkan', 'required');
        $this->form_validation->set_rules('tugas_waktu', 'Waktu', 'required');
        $this->form_validation->set_rules('bobot', 'Bobot', 'required');
        $this->form_validation->set_rules('kriteria_penilaian', 'Kriteria Penilaian', 'required');
        $this->form_validation->set_rules('tugas_indikator', 'Indikator', 'required');

        if ($this->form_validation->run() == FALSE) {
            
        } else {
            $data = [
                'id' => $this->input->post('id'),
                'tugas' => $this->input->post('tugas'),
                'tugas_kemampuan' => $this->input->post('tugas_kemampuan'),
                'tugas_waktu' => $this->input->post('tugas_waktu'),
                'bobot' => $this->input->post('bobot'),
                'kriteria_penilaian' => $this->input->post('kriteria_penilaian'),
                'tugas_indikator' => $this->input->post('tugas_indikator'),
                'identitas' => $this->input->post('idi'),
            ];
            $this->Preview_model->updateTugas($data);
            redirect('preview/index/' . $this->input->post('idi'));
        }
    }
    public function editRencana() {
        $this->form_validation->set_rules('minggu', 'Minggu', 'required');
        $this->form_validation->set_rules('rencana_kemampuan', 'Kemampuan Akhir yang diharapakan', 'required');
        $this->form_validation->set_rules('rencana_indikator', 'Indikator', 'required');
        $this->form_validation->set_rules('topik', 'Topik', 'required');
        $this->form_validation->set_rules('aktivitas', 'Aktivitas', 'required');
        $this->form_validation->set_rules('rencana_waktu', 'Waktu', 'required');
        $this->form_validation->set_rules('penilaian', 'Penilaian', 'required');

        if ($this->form_validation->run() == FALSE) {
            
        } else {
            $data = [
                'id' => $this->input->post('id'),
                'minggu' => $this->input->post('minggu'),
                'rencana_kemampuan' => $this->input->post('rencana_kemampuan'),
                'rencana_indikator' => $this->input->post('rencana_indikator'),
                'topik' => $this->input->post('topik'),
                'aktivitas' => $this->input->post('aktivitas'),
                'rencana_waktu' => $this->input->post('rencana_waktu'),
                'penilaian' => $this->input->post('penilaian'),
                'identitas' => $this->input->post('idi'),
            ];
            $this->Preview_model->updateRencana($data);
            redirect('preview/index/' . $this->input->post('idi'));
        }
    }



    public function tambahGambaran() {
        $this->form_validation->set_rules('content_gambaran', 'Gambaran Umum', 'required');

        if($this->form_validation->run() == FALSE) {

        } else {
            $data = [
                'content_gambaran' => $this->input->post('content_gambaran'),
                'identitas' => $this->input->post('idi')
            ];
            $this->Daftar_model->insertGambaran($data);
            redirect('preview/index/' . $this->input->post('idi'));   
        }
    }
    public function tambahCapaian() {
        $this->form_validation->set_rules('content_capaian', 'Capaian Pembelajaran', 'required');

        if($this->form_validation->run() == FALSE) {

        } else {
            $data = [
                'content_capaian' => $this->input->post('content_capaian'),
                'identitas' => $this->input->post('idi')
            ];
            $this->Daftar_model->insertCapaian($data);
            redirect('preview/index/' . $this->input->post('idi'));   
        }
    }
    public function tambahPrasyarat() {
        $this->form_validation->set_rules('content_prasyarat', 'Prasyarat', 'required');

        if($this->form_validation->run() == FALSE) {

        } else {
            $data = [
                'content_prasyarat' => $this->input->post('content_prasyarat'),
                'identitas' => $this->input->post('idi')
            ];
            $this->Daftar_model->insertPrasyarat($data);
            redirect('preview/index/' . $this->input->post('idi'));   
        }
    }
    public function tambahReferensi() {
        $this->form_validation->set_rules('content_referensi', 'Referensi', 'required');

        if($this->form_validation->run() == FALSE) {

        } else {
            $data = [
                'content_referensi' => $this->input->post('content_referensi'),
                'identitas' => $this->input->post('idi')
            ];
            $this->Daftar_model->insertReferensi($data);
            redirect('preview/index/' . $this->input->post('idi'));   
        }
    }
    public function tambahUnit() {
        $this->form_validation->set_rules('unit_kemampuan', 'Kemampuan Akhir', 'required');
        $this->form_validation->set_rules('unit_indikator', 'Indikator', 'required');
        $this->form_validation->set_rules('bahan_kajian', 'Bahan Kajian', 'required');
        $this->form_validation->set_rules('metode_pembelajaran', 'Metode Pembelajaran', 'required');
        $this->form_validation->set_rules('unit_waktu', 'Waktu', 'required');
        $this->form_validation->set_rules('metode_penilaian', 'Mrtode Penilaian', 'required');
        $this->form_validation->set_rules('bahan_ajar', 'Bahan Ajar', 'required');

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
                'identitas' => $this->input->post('idi')
            ];
            $this->Daftar_model->insertUnit($data);
            redirect('preview/index/' . $this->input->post('idi'));   
        }
    }
    public function tambahTugas() {
        $this->form_validation->set_rules('tugas', 'Tugas/Aktivitas', 'required');
        $this->form_validation->set_rules('tugas_kemampuan', 'Kemampuan Akhir yang diharapkan', 'required');
        $this->form_validation->set_rules('tugas_waktu', 'Waktu', 'required');
        $this->form_validation->set_rules('bobot', 'Bobot', 'required');
        $this->form_validation->set_rules('kriteria_penilaian', 'Kriteria Penilaian', 'required');
        $this->form_validation->set_rules('tugas_indikator', 'Indikator', 'required');

        if($this->form_validation->run() == FALSE) {

        } else {
            $data = [
                'tugas' => $this->input->post('tugas'),
                'tugas_kemampuan' => $this->input->post('tugas_kemampuan'),
                'tugas_waktu' => $this->input->post('tugas_waktu'),
                'bobot' => $this->input->post('bobot'),
                'kriteria_penilaian' => $this->input->post('kriteria_penilaian'),
                'tugas_indikator' => $this->input->post('tugas_indikator'),
                'identitas' => $this->input->post('idi')
            ];
            $this->Daftar_model->insertTugas($data);
            redirect('preview/index/' . $this->input->post('idi'));   
        }
    }
    public function tambahRencana() {
        $this->form_validation->set_rules('minggu', 'Minggu', 'required');
        $this->form_validation->set_rules('rencana_kemampuan', 'Kemampuan Akhir yang diharapakan', 'required');
        $this->form_validation->set_rules('rencana_indikator', 'Indikator', 'required');
        $this->form_validation->set_rules('topik', 'Topik', 'required');
        $this->form_validation->set_rules('aktivitas', 'Aktivitas', 'required');
        $this->form_validation->set_rules('rencana_waktu', 'Waktu', 'required');
        $this->form_validation->set_rules('penilaian', 'Penilaian', 'required');

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
                'identitas' => $this->input->post('idi')
            ];
            $this->Daftar_model->insertRencana($data);
            redirect('preview/index/' . $this->input->post('idi'));   
        }
    }

    public function delGU() {
        $idi = $this->uri->segment(3);
        $id = $this->uri->segment(4);

        $this->Daftar_model->deleteGU($id);
        redirect('preview/index/' . $idi );
    }
    public function delCP() {
        $idi = $this->uri->segment(3);
        $id = $this->uri->segment(4);

        $this->Daftar_model->deleteCP($id);
        redirect('preview/index/' . $idi );
    }
    public function delP() {
        $idi = $this->uri->segment(3);
        $id = $this->uri->segment(4);

        $this->Daftar_model->deleteP($id);
        redirect('preview/index/' . $idi );
    }
    public function delUP() {
        $idi = $this->uri->segment(3);
        $id = $this->uri->segment(4);

        $this->Daftar_model->deleteUP($id);
        redirect('preview/index/' . $idi );
    }
    public function delTP() {
        $idi = $this->uri->segment(3);
        $id = $this->uri->segment(4);

        $this->Daftar_model->deleteTP($id);
        redirect('preview/index/' . $idi );
    }
    public function delR() {
        $idi = $this->uri->segment(3);
        $id = $this->uri->segment(4);

        $this->Daftar_model->deleteR($id);
        redirect('preview/index/' . $idi );
    }
    public function delRP() {
        $idi = $this->uri->segment(3);
        $id = $this->uri->segment(4);

        $this->Daftar_model->deleteRP($id);
        redirect('preview/index/' . $idi );
    }
}