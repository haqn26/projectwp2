<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_model
{

    // fungsi simpan data register
    public function simpan_register($data)
    {

        return $this->db->insert("tbl_users", $data);
    }
}
