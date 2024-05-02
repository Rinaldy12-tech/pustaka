
<?php

class Matakuliah extends CI_Controller 
{
    Public function index()
    {
        $this->load->view('view-form-matakuliah');
        $this->load->helper('url');
    }

    Public function cetak()
    {
       $this->form_validation->set_rules('kode', 'nama', 'required|min_length[3]', [
            'required' => 'Kode Matakuliah Harus Diisi',
            'min_lenght' => 'Kode terlalu pendek'
        ]);

        if ($this->form_validation->run() != true) {
            $this->load->view('view-form-matakuliah');
        } else {
            
        $data = [
            'kode' => $this->input->post('kode'),
            'nama' => $this->input->post('nama'),
            'sks'  => $this->input->post('sks')
        ];
        
        $this->load->view('view-data-matakuliah', $data);
        }
    }
}
?>
