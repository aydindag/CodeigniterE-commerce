<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uyeler extends CI_Controller {
	
	 public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				$this->load->helper('url');
				
				if (!$this->session->userdata("admin_session"))
					redirect(base_url().'admin/login');
					
				
        }
	
	public function index()
	{
		$query=$this->db->query("SELECT * FROM uyeler ORDER BY adsoy");
		$data["veriler"]=$query->result();
		
		$this->load->view('admin\uyeler_liste',$data);
		
	}

	public function ekle()
	{
		
		$this->load->view('admin\uyeler_ekle');
		
	}
	
	public function ekle_kaydet()
	{
		//form verilerini alıyoruz
	$data=array(	
		'adsoy' => $this->input->post('adsoy'),
		'email' => $this->input->post('email'),
		'tel' => $this->input->post('tel'),
		'adres' => $this->input->post('adres'),
		'sehir' => $this->input->post('sehir'),
		'durum' => $this->input->post('durum'),
		'yetki' => $this->input->post('yetki'),
		'sifre' => $this->input->post('sifre')
	);
	$this->db->insert("uyeler",$data);
	$this->session->set_flashdata("mesaj","Üye kaydı gerçekleştirildi");
	redirect(base_url().'admin/uyeler');
	
	}
	public function duzenle($id)
	{
		$query=$this->db->query("SELECT * FROM uyeler WHERE Id= $id");
		$data["veri"]=$query->result();
		
		$this->load->view('admin\uyeler_duzenle_formu',$data);
	
	}
	public function guncelle($id)
	{
		//form verilerini alıyoruz
	$data=array(	
		'adsoy' => $this->input->post('adsoy'),
		'email' => $this->input->post('email'),
		'tel' => $this->input->post('tel'),
		'adres' => $this->input->post('adres'),
		'sehir' => $this->input->post('sehir'),
		'durum' => $this->input->post('durum'),
		'yetki' => $this->input->post('yetki'),
		'sifre' => $this->input->post('sifre')
	);
	$this->load->model('Database_Model');
	$this->Database_Model->update_data("uyeler",$data,$id);
	redirect(base_url().'admin/uyeler');
	
	}
	public function sil($id)
	{
		$this->db->query("DELETE FROM uyeler WHERE Id= $id");
		
		
		redirect(base_url().'admin/uyeler');
	
	}
}


