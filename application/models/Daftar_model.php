<?php 

class Daftar_model extends CI_Model
{
    public function getIdentitas($data) {
        $userId = $this->db->escape($data['userId']);
        return $this->db->query("SELECT idn.*, mk.*, idn.id idi
        FROM identitas idn
        JOIN mata_kuliah mk ON idn.mata_kuliah = mk.id
        WHERE user = $userId ")->result_array();
    }

    public function getIdentitasAfterSearch($data) {
        $keyword = $this->db->escape_like_str($data['keyword']);
        $userId = $this->db->escape($data['userId']);
    
        return $this->db->query("SELECT idn.*, mk.*, idn.id idi
            FROM identitas idn
            JOIN mata_kuliah mk ON idn.mata_kuliah = mk.id
            WHERE user = $userId AND 
                (nama_mata_kuliah LIKE '%$keyword%' OR 
                kode LIKE '%$keyword%' OR
                program_studi LIKE '%$keyword%' OR
                semester LIKE '%$keyword%' OR
                bobot_sks LIKE '%$keyword%')")->result_array();
    }    

    public function getIdentitasForDashboard($data) {
        $userId = $this->db->escape($data['userId']);
        return $this->db->query("SELECT idn.*, mk.*, idn.id idi
        FROM identitas idn
        JOIN mata_kuliah mk ON idn.mata_kuliah = mk.id
        WHERE user = $userId
        ORDER BY idn.id DESC
        LIMIT 5")->result_array();
    }

    public function getMatkul() {
        return $this->db->get('mata_kuliah')->result_array();
    }

    public function getDosenDekan() {
        return $this->db->get_where('dosen', ['jabatan' => 'dekan'])->result_array();
    }
    public function getDosenKaprodi() {
        return $this->db->get_where('dosen', ['jabatan' => 'kaprodi'])->result_array();
    }
    public function getDosenSekretaris() {
        return $this->db->get_where('dosen', ['jabatan' => 'sekretaris'])->result_array();
    }
    public function getDosenPengampu() {
        return $this->db->get_where('dosen', ['jabatan' => 'pengampu'])->result_array();
    }

    public function insertIdentitas($data) {
        $this->db->insert('identitas', $data);
    }
    public function insertGambaran($data) {
        $this->db->insert('gambaran_umum', $data);
    }
    public function insertCapaian($data) {
        $this->db->insert('capaian_pembelajaran', $data);
    }
    public function insertPrasyarat($data) {
        $this->db->insert('prasyarat', $data);
    }
    public function insertUnit($data) {
        $this->db->insert('unit_pembelajaran', $data);
    }
    public function insertTugas($data) {
        $this->db->insert('tugas_penilaian', $data);
    }
    public function insertReferensi($data) {
        $this->db->insert('referensi', $data);
    }
    public function insertRencana($data) {
        $this->db->insert('rencana_pembelajaran', $data);
    }

    public function deleteAll($idi) {
        $tables = [
            'gambaran_umum',
            'capaian_pembelajaran',
            'prasyarat',
            'referensi',
            'unit_pembelajaran',
            'tugas_penilaian',
            'rencana_pembelajaran'
        ];
    
        foreach ($tables as $t) {
            $this->db->delete($t, ['identitas' => $idi]);
        }
    }
    public function deleteIdentitas($idi) {
        $this->db->delete('identitas', ['id' => $idi]);
    }
    public function deleteGU($id) {
        $this->db->delete('gambaran_umum', ['id' => $id]);
    }
    public function deleteCP($id) {
        $this->db->delete('capaian_pembelajaran', ['id' => $id]);
    }
    public function deleteP($id) {
        $this->db->delete('prasyarat', ['id' => $id]);
    }
    public function deleteUP($id) {
        $this->db->delete('unit_pembelajaran', ['id' => $id]);
    }
    public function deleteTP($id) {
        $this->db->delete('tugas_penilaian', ['id' => $id]);
    }
    public function deleteR($id) {
        $this->db->delete('referensi', ['id' => $id]);
    }
    public function deleteRP($id) {
        $this->db->delete('rencana_pembelajaran', ['id' => $id]);
    }
}