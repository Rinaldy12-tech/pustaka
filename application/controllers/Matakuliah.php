<?php
class Matakuliah extends CI_Controller
{
    public function index()

    {
        $this->load->view('view-form-matakuliah');
        $this->load->library('form-validation');
    }

    public function cetak()
    {
        $data =[
            'kode' => $this->input->post('kode'),
            'nama' => $this->input->post('nama'),
            'sks' => $this->input->post('sks')
        ];

        $this->load->view('view-data-matakuliah', $data);
    }

    public function rules()
    {
        return[
        [
            'field' => 'kode',
            'label' => 'Kode',
            'rules' => 'required|max_length[16]|numeric'
        ]

        ];
    }
}