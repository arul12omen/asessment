<?php
class MUser extends CI_Model
{
    public $table = 'user';

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
        echo $this->db->last_query();
    }

    // meccocokan username dan password di tabel
    function get_validasi($user, $pass)
    {
      $this->db->where('username', $user);
      $this->db->where('password', $pass);
      $total = $this->db->count_all_results($this->table); //mengambil jumlah sesuai query
      // SELECT COUNT(*) FROM user WHERE username = $user and password = $pass
      // echo $this->db->last_query(); exit;
      if ($total > 0){
        return true;
      } else {
        return false;
      }
    }
}