<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}
	public function index()
	{
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();
		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();
		$this->db->from('caraousel');
		$caraousel = $this->db->get()->result_array();
		$this->db->from('konten a');
        $this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
        $this->db->join('user c', 'a.username=c.username', 'left');
        $this->db->order_by('tanggal', 'DESC');
        $konten = $this->db->get()->result_array();
		$data = array(
			'judul'		=> "Beranda | Ajii",
			'konfig'	=> $konfig,
			'caraousel'	=> $caraousel,
			'kategori'	=> $kategori,
			'res_post'	=> $this->db->from('konten')->join('kategori', 'konten.id_kategori=kategori.id_kategori')->join('user', 'konten.username=user.username')->order_by('tanggal', 'DESC')->limit(5)->get()->result_array(),
			'konten'	=> $konten
		);
		$this->template->load('layout/template_cms', 'beranda',$data);
	}
	public function galery(){
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();
		$this->db->from('galery');
		$galery = $this->db->get()->result_array();
		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();
		$data = array(
			'judul'		=> 'Detail | Aji',
			'konfig'	=> $konfig,
			'kategori'	=> $kategori,
			'res_post'	=> $this->db->from('konten')->join('kategori', 'konten.id_kategori=kategori.id_kategori')->join('user', 'konten.username=user.username')->order_by('tanggal', 'DESC')->limit(5)->get()->result_array(),
			'galery'    => $galery,
		);
		$this->template->load('layout/template_cms', 'galery',$data);
	}
	public function kategori($id)
	{
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();
		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();
		$this->db->from('caraousel');
		$caraousel = $this->db->get()->result_array();
		$this->db->from('konten a');
        $this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
        $this->db->join('user c', 'a.username=c.username', 'left');
        $this->db->where('a.id_kategori', $id);
        $konten = $this->db->get()->result_array();
		$this->db->from('kategori');
		$this->db->where('id_kategori', $id);
		$nama_kategori = $this->db->get()->row()->nama_kategori;
		$data = array(
			'judul'		=> $nama_kategori."Kategori | Ajii",
			'konfig'	=> $konfig,
			'kategori'	=> $kategori,
			'res_post'	=> $this->db->from('konten')->join('kategori', 'konten.id_kategori=kategori.id_kategori')->join('user', 'konten.username=user.username')->order_by('tanggal', 'DESC')->limit(5)->get()->result_array(),
			'konten'	=> $konten
		);
		$this->template->load('layout/template_cms', 'Kategori',$data);
	}
	public function artikel($id){
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();
		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();
		$this->db->from('konten');
        $this->db->join('kategori', 'konten.id_kategori = kategori.id_kategori');
        $this->db->join('user', 'konten.username = user.username');
        $this->db->where('slug', $id);
        $konten = $this->db->get()->row();
		// var_dump($konten);
		// die;
		$data = array(
			'judul'		=> 'Detail | Aji',
			'konfig'	=> $konfig,
			'kategori'	=> $kategori,
			'res_post'	=> $this->db->from('konten')->join('kategori', 'konten.id_kategori=kategori.id_kategori')->join('user', 'konten.username=user.username')->order_by('tanggal', 'DESC')->limit(5)->get()->result_array(),
			'konten'	=> $konten
		);
		$this->template->load('layout/template_cms', 'detail',$data);
	}
	

}
