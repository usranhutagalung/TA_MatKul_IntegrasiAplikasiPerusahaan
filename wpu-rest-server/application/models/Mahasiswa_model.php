<?php

class Mahasiswa_model extends CI_Model{
    public function getMahasiswa($id = null){
        if ($id == null) {
            return $this->db->get('mahasiswa')->result_array();
        } else {
            return $this->db->get_where('mahasiswa', ['id' => $id])->result_array();
        }
    }


}