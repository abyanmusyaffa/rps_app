<?php 

class Preview_model extends CI_Model
{
    public function getPreview($idi) {
        return $this->db->query("SELECT idn.*, mk.*, d1.*, d2.*, d3.*, d4.*, idn.id idi, mk.id idm, d1.id idd, d2.id idk, d3.id ids, d4.id idp, d1.nama_dosen dekan, d2.nama_dosen kaprodi, d3.nama_dosen sekretaris, d4.nama_dosen pengampu, d1.nik_dosen nik_dekan, d2.nik_dosen nik_kaprodi, d3.nik_dosen nik_sekretaris, d4.nik_dosen nik_pengampu 
        FROM identitas idn
        JOIN mata_kuliah mk ON idn.mata_kuliah = mk.id
        JOIN dosen d1 ON idn.dosen_dekan = d1.id
        JOIN dosen d2 ON idn.dosen_kaprodi = d2.id
        JOIN dosen d3 ON idn.dosen_sekretaris = d3.id
        JOIN dosen d4 ON idn.dosen_pengampu = d4.id
        WHERE idn.id = '$idi'")->row_array();
    }

    public function getGambaranUmum($idi) {
        return $this->db->get_where('gambaran_umum', ['identitas' => $idi])->result_array();
    }
    public function getCapaian($idi) {
        return $this->db->get_where('capaian_pembelajaran', ['identitas' => $idi])->result_array();
    }
    public function getPrasyarat($idi) {
        return $this->db->get_where('prasyarat', ['identitas' => $idi])->result_array();
    }
    public function getReferensi($idi) {
        return $this->db->get_where('referensi', ['identitas' => $idi])->result_array();
    }
    public function getUnit($idi) {
        return $this->db->get_where('unit_pembelajaran', ['identitas' => $idi])->result_array();
    }
    public function getTugas($idi) {
        return $this->db->get_where('tugas_penilaian', ['identitas' => $idi])->result_array();
    }
    public function getRencana($idi) {
        return $this->db->get_where('rencana_pembelajaran', ['identitas' => $idi])->result_array();
    }

    public function updateIdentitas($update_data) {
        $idi = $this->db->escape($update_data['idi']);
        $mata_kuliah = $this->db->escape($update_data['mata_kuliah']);
        $nomor = $this->db->escape($update_data['nomor']);
        $tanggal_berlaku = $this->db->escape($update_data['tanggal_berlaku']);
        $tanggal_susun = $this->db->escape($update_data['tanggal_susun']);
        $revisi = $this->db->escape($update_data['revisi']);
        $dosen_dekan = $this->db->escape($update_data['dosen_dekan']);
        $dosen_kaprodi = $this->db->escape($update_data['dosen_kaprodi']);
        $dosen_sekretaris = $this->db->escape($update_data['dosen_sekretaris']);
        $dosen_pengampu = $this->db->escape($update_data['dosen_pengampu']);
        $nilai_presensi = $this->db->escape($update_data['nilai_presensi']);
        $nilai_mid = $this->db->escape($update_data['nilai_mid']);
        $nilai_akhir = $this->db->escape($update_data['nilai_akhir']);
        $nilai_tugas = $this->db->escape($update_data['nilai_tugas']);

        $query = "UPDATE identitas
                SET mata_kuliah = $mata_kuliah, 
                    nomor = $nomor,
                    tanggal_berlaku = $tanggal_berlaku,
                    tanggal_susun = $tanggal_susun,
                    revisi = $revisi,
                    dosen_dekan = $dosen_dekan,
                    dosen_kaprodi = $dosen_kaprodi,
                    dosen_sekretaris = $dosen_sekretaris,
                    dosen_pengampu = $dosen_pengampu,
                    nilai_presensi = $nilai_presensi,
                    nilai_mid = $nilai_mid,
                    nilai_akhir = $nilai_akhir,
                    nilai_tugas = $nilai_tugas
                WHERE id = $idi;";
        return $this->db->query($query);
    }

    public function updateGambaran($data) {
        $id = $this->db->escape($data['id']);
        $content = $this->db->escape($data['content_gambaran']);
        $identitas = $this->db->escape($data['identitas']);

        $query = "UPDATE gambaran_umum
                SET content_gambaran = $content,
                    identitas = $identitas
                WHERE id = $id";
        return $this->db->query($query);
    }

    public function updateCapaian($data) {
        $id = $this->db->escape($data['id']);
        $content = $this->db->escape($data['content_capaian']);
        $identitas = $this->db->escape($data['identitas']);

        $query = "UPDATE capaian_pembelajaran
                SET content_capaian = $content,
                    identitas = $identitas
                WHERE id = $id";
        return $this->db->query($query);
    }

    public function updatePrasyarat($data) {
        $id = $this->db->escape($data['id']);
        $content = $this->db->escape($data['content_prasyarat']);
        $identitas = $this->db->escape($data['identitas']);

        $query = "UPDATE prasyarat
                SET content_prasyarat = $content,
                    identitas = $identitas
                WHERE id = $id";
        return $this->db->query($query);
    }

    public function updateReferensi($data) {
        $id = $this->db->escape($data['id']);
        $content = $this->db->escape($data['content_referensi']);
        $identitas = $this->db->escape($data['identitas']);

        $query = "UPDATE referensi
                SET content_referensi = $content,
                    identitas = $identitas
                WHERE id = $id";
        return $this->db->query($query);
    }

    public function updateUnit($data) {
        $id = $this->db->escape($data['id']);
        $unit_kemampuan = $this->db->escape($data['unit_kemampuan']);
        $unit_indikator = $this->db->escape($data['unit_indikator']);
        $bahan_kajian = $this->db->escape($data['bahan_kajian']);
        $metode_pembelajaran = $this->db->escape($data['metode_pembelajaran']);
        $unit_waktu = $this->db->escape($data['unit_waktu']);
        $metode_penilaian = $this->db->escape($data['metode_penilaian']);
        $bahan_ajar = $this->db->escape($data['bahan_ajar']);
        $identitas = $this->db->escape($data['identitas']);

        $query = "UPDATE unit_pembelajaran
                SET unit_kemampuan = $unit_kemampuan,
                    unit_indikator = $unit_indikator,
                    bahan_kajian = $bahan_kajian,
                    metode_pembelajaran = $metode_pembelajaran,
                    unit_waktu = $unit_waktu,
                    metode_penilaian = $metode_penilaian,
                    bahan_ajar = $bahan_ajar,
                    identitas = $identitas
                WHERE id = $id";
        return $this->db->query($query);
    }

    public function updateTugas($data) {
        $id = $this->db->escape($data['id']);
        $tugas = $this->db->escape($data['tugas']);
        $tugas_kemampuan = $this->db->escape($data['tugas_kemampuan']);
        $tugas_waktu = $this->db->escape($data['tugas_waktu']);
        $bobot = $this->db->escape($data['bobot']);
        $kriteria_penilaian = $this->db->escape($data['kriteria_penilaian']);
        $tugas_indikator = $this->db->escape($data['tugas_indikator']);
        $identitas = $this->db->escape($data['identitas']);

        $query = "UPDATE tugas_penilaian
                SET tugas = $tugas,
                    tugas_kemampuan = $tugas_kemampuan,
                    tugas_waktu = $tugas_waktu,
                    bobot = $bobot,
                    kriteria_penilaian = $kriteria_penilaian,
                    tugas_indikator = $tugas_indikator,
                    identitas = $identitas
                WHERE id = $id";
        return $this->db->query($query);
    }

    public function updateRencana($data) {
        $id = $this->db->escape($data['id']);
        $minggu = $this->db->escape($data['minggu']);
        $rencana_kemampuan = $this->db->escape($data['rencana_kemampuan']);
        $rencana_indikator = $this->db->escape($data['rencana_indikator']);
        $topik = $this->db->escape($data['topik']);
        $aktivitas = $this->db->escape($data['aktivitas']);
        $rencana_waktu = $this->db->escape($data['rencana_waktu']);
        $penilaian = $this->db->escape($data['penilaian']);
        $identitas = $this->db->escape($data['identitas']);

        $query = "UPDATE rencana_pembelajaran
                SET minggu = $minggu,
                    rencana_kemampuan = $rencana_kemampuan,
                    rencana_indikator = $rencana_indikator,
                    topik = $topik,
                    aktivitas = $aktivitas,
                    rencana_waktu = $rencana_waktu,
                    penilaian = $penilaian,
                    identitas = $identitas
                WHERE id = $id";
        return $this->db->query($query);
    }
}
