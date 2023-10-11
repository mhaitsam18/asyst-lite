<?php

class Knowledge_model extends CI_Model
{
    public function isUniqueApplicationOrVersion($applicationid, $version)
    {
        // Lakukan pengecekan keunikan berdasarkan parameter yang diberikan
        // Gunakan logika dan perintah SQL yang sesuai dengan struktur database Anda

        // Contoh menggunakan Active Record (CI Query Builder)
        $this->db->where('applicationid', $applicationid);
        $this->db->where('version', $version);
        $query = $this->db->get('knowledge');

        if ($query->num_rows() > 0) {
            // Jika ada record yang cocok, berarti tidak unik
            return false;
        } else {
            // Jika tidak ada record yang cocok, berarti unik
            return true;
        }
    }
}
