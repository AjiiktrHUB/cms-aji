<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galery extends CI_Controller {
	public function __construct(){
		parent::__construct();
        if($this->session->userdata('level')==NULL){
            redirect('auth');
        }
	}
	public function index()
	{
        $this->db->from('galery');
        $galery = $this->db->get()->result_array();
		$data = array(
			'judul_halaman'      => 'galery',
            'galery'          =>  $galery
		);  
		$this->template->load('layout/template_admin', 'admin/galery_index',$data);
	}
    
    public function simpan(){
        $namafoto = date('YmdHis').'.jpg';
        $config['upload_path']          ='assets/upload/galery/';
        $config['max_size'] = 2048 * 1024; //3 * 1024 * 1024; //3Mb; 0=unlimited
        $config['file_name']            = $namafoto;
        $config['allowed_types']         ='*';
        $this->load->library('upload', $config);

        if($_FILES['foto']['size'] >= 2048 * 1024){
            $this->session->set_flashdata('alert', '
                <div class="alert alert-danger alert-dismissible" role="alert">
                Ukuran foto terlalu besar, upload ulang foto dengan ukuran yang kurang dari 2048 KB.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                    ');
            redirect('admin/galery');  
        }  else if(!$this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
        } else{
            $data = array('upload_data' => $this->upload->data());
        }   
        $data = array(
            'nama'         =>   $this->input->post('nama'),
            'foto'          =>   $namafoto
        );
        $this->db->insert('galery', $data);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-success"><strong>Success!</strong> Berhasil Menambahkan galery!.</div>
        ');
        redirect('admin/galery');
    }
   
    public function delete_data($id){
        $filename=FCPATH.'/assets/upload/galery/'.$id;
        if(file_exists($filename)){
                unlink(FCPATH.'/assets/upload/galery/'.$id);
            }
        $where = array(
            'foto' => $id
        );
        $this->db->delete('galery',$where);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-success"><strong>Success!</strong> Berhasil Menghapus galery!.</div>
        ');
        redirect('admin/galery');
    }
   
}
