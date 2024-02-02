<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Mdokter');
        $this->load->library("form_validation");
    }

	public function index()
	{
        $data['data_dokter'] = $this->Mdokter->get_all();
		$this->load->view('list_dokter', $data);
	}

    function create()
    {
        $data = array(
            'nama' => set_value('nama'),
            'spesialis' => set_value('spesialis'),
            'no_hp' => set_value('no_hp'),
            'id' => set_value('id'),
        );
        $data['action'] = site_url('dokter/create_submit');
        $this->load->view('form_dokter', $data);
    }   

    function create_submit()
    {
        $this->form_validation->set_rules("nama", "nama", "trim|required");
        if($this->form_validation->run() == FALSE )
            {
                $this->create();
            }else {
        $data = array(
            'id' => $this->input->post('id'),
            'nama' => $this->input->post('nama'),
            'spesialis' => $this->input->post('spesialis'),
            'no_hp' => $this->input->post('no_hp'),
        );
        $this->Mdokter->add($data);
        redirect('Dokter/index');
    }
    }

    function hapus($id)
    {
        $this->Mdokter->delete($id);
        redirect("Dokter/index");
    }

    function update($id)
    {
        $row = $this->Mdokter->get_by_id($id);
        if ($row)
        {
            $data = array(
                'id' => set_value('id', $row->id),
                'nama' => set_value('nama', $row->nama),
                'spesialis' => set_value('spesialis', $row->spesialis),
                'no_hp' => set_value('pengarang', $row->no_hp),
                
            );
        }
        $data['action'] = site_url('Dokter/update_submit');
        $this->load->view('form_dokter', $data);
    }

    function update_submit()
    {
        $this->form_validation->set_rules("nama", "nama", "trim|required");
        if($this->form_validation->run() == FALSE )
            {
                $this->create();
            }else {
        $data = array(
            'nama' => $this->input->post('nama'),
            'spesialis' => $this->input->post('spesialis'),
            'no_hp' => $this->input->post('no_hp'),
        
        );
        $this->Mdokter->update($this->input->post('id'), $data);
        redirect(site_url('Dokter/index'));
        } 
    }
}