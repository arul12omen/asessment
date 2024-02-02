<?php

class Mdokter extends CI_Model
{
    public $table = 'dokter';


    //get all data
    function get_all()
    {
        return $this->db->get($this->table)->result();
    }

    //add data
    function add($data)
    {
        $this->db->insert($this->table, $data);
    }

    // delete
    function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->table);
    }

    //get by id
    function get_by_id($id){
        $this->db->where('id', $id);
        return $this->db->get($this->table)->row();
    }


    //update
    function update($id, $data)
    {  
        $this->db->where('id', $id);
        $this->db->update($this->table, $data);
    }
}