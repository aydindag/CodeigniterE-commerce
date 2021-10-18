<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uye extends CI_Controller {
	
	 public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				$this->load->model('Database_Model');
				$this->load->helper('url');
				
				if (!$this->session->userdata("uye_session"))
					redirect(base_url().'home/login_ol');
					
				
        }
	
	public function index()
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		
		$query=$this->db->query("SELECT * FROM uyeler WHERE Id=".$this->session->uye_session["id"]);
		$data["uye"]=$query->result();
		
		$data["sayfa"]="Üye Paneli";
		$data["menu"]="uye";
		

		$this->load->view('hesabim',$data);
		
	}

	public function cikis()
	{
		
		$this->session->unset_userdata("uye_session");
		redirect(base_url());
		
	}
	
	public function hesabim()
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Üye Hesabı ||";
		$data["menu"]="uye";
		
		$query=$this->db->query("SELECT * FROM uyeler WHERE Id=".$this->session->uye_session["id"]);
		$data["uye"]=$query->result();
		
		$this->load->view('_header',$data);
		$this->load->view('_uyesidebar');
		$this->load->view('hesabim',$data);
		$this->load->view('_footer');
	}
	
	public function uye_guncelle()
	{
		//form verilerini alıyoruz
	$data=array(	
		'adsoy' => $this->input->post('adsoy'),
		'tel' => $this->input->post('tel'),
		'adres' => $this->input->post('adres'),
		'sehir' => $this->input->post('sehir'),
		'email' => $this->input->post('email'),
		'sifre' => $this->input->post('sifre')
	);
	$id=$this->session->uye_session["id"];
	
	$this->Database_Model->update_data("uyeler",$data,$id);
	$this->session->set_flashdata("mesaj","Üye bilgileriniz güncellendi");
	redirect(base_url().'uye/hesabim');
	
	}
	public function sepete_ekle()
	{
		//form verilerini alıyoruz
	$data=array(	
		'urun_id' => $this->input->post('urunid'),
		'adet' => $this->input->post('miktar'),
		'musteri_id' => $this->session->uye_session["id"]	
	);
	//print_r($data);   // ürün ekleniyormu kontrolü
	//exit();
	//aynı ürün eklendi ise kontrol edilip o ürünün miktar kısmı artırılması yeterli
	//onuda inert yerine update ile select sql ile karşılaştırma yapıp varas ürün ordaki miktarı ekleyip yapılması lazım
	
	$this->db->insert("sepet",$data);
	
	$this->session->set_flashdata("mesaj","<p align='center'>Ürün Sepete Eklendi </p>");
	redirect(base_url().'home/urundetay/'.$this->input->post('urunid'));
	
	}
	public function sepetim()
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Sepetim ||";
		$data["menu"]="sepetim";
		
		$id=$this->session->uye_session["id"];
		$data["veriler"]= $this->Database_Model->sepet_urunler($id);
		
		$this->load->view('_header',$data);
		$this->load->view('_uyesidebar');
		$this->load->view('sepet',$data);
		$this->load->view('_footer');
	}
	public function sepetsil($id)
	{
		$this->db->query("DELETE FROM sepet WHERE Id= $id");
		$this->session->set_flashdata("mesaj","<p align='center'>Ürün Sepetten Silindi </p>");		
		redirect(base_url().'uye/sepetim');
	
	}
	public function satinal()
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Satın Alma ||";
		$data["menu"]="uye";
		
		$data["toplam"]=$this->input->post('toplam');
		$id=$this->session->uye_session["id"]; //oturum açan kişinin id si

		$query=$this->db->query("SELECT * FROM uyeler WHERE Id= $id");
		$data["uye"]=$query->result();
		
		$this->load->view('_header',$data);
		$this->load->view('_uyesidebar');
		$this->load->view('satinalma',$data);
		$this->load->view('_footer');
	}
	
	public function siparis_tamamla()
	{	//gerçek bir projede kredi kartı bilgilerini al
		//bankaya gönder-olumlu dönüş olursa aşağıdaki işlemlere devam et
		
		//Onay geldikten sonra form verilerini alıyoruz
	$data=array(	
		'adsoy' => $this->input->post('adsoy'),
		'musteri_id' => $this->session->uye_session["id"],
		'adres' => $this->input->post('adres'),
		'sehir' => $this->input->post('sehir'),
		'tel' => $this->input->post('tel'),
		'tutar' => $this->input->post('tutar'),
		'IP' => $_SERVER['REMOTE_ADDR']
	);
	
	//verileri siparis tablosuna ekleriz
	$this->db->insert("siparis",$data);
	$siparis_id = $this->db->insert_id();  // insert komutu girilen kaydın ıd'sini alır
	
	//sepetteki ürünleri siparis urunlerine ekle
	$id=$this->session->uye_session["id"];
	
	//sepetteki ürünleri siparis_ürünler tablosuna aktarılır
	$veriler = $this->Database_Model->sepet_urunler($id);
	foreach ($veriler as $rs)
	{
		$data=array(
		'adi' => $rs->urunadi,
		'fiyat' => $rs->satfiyat,
		'musteri_id' => $id,
		'urun_id' => $rs->urun_id,
		'siparis_id' => $siparis_id,
		'adet' => $rs->adet,
		'tutar' => $rs->adet *$rs->satfiyat
		
		);
		$this->db->insert("siparis_urunler",$data); 
		
	//eklenen ürün adedi ürünler tablosundaki stok tan düşürülmeli
		
	}
	
	//müşteri sepetini boşalt
	$this->db->query("DELETE FROM sepet WHERE musteri_id=$id");
	
	//siparis alındıgına dair üye ye email bilgisi gönder
	
	redirect(base_url().'uye/islemson');
	
	}
	public function islemson()
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="İşlem Tamamlandı ||";
		$data["menu"]="satinalma";
		
		//siparis tamamlandığına dair email
	
		$this->load->view('_header',$data);
		$this->load->view('_uyesidebar');
		$this->load->view('islemson',$data);
		$this->load->view('_footer');
	}
	public function siparisler()
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Siparislerim ||";
		$data["menu"]="uye";

		$query=$this->db->query("SELECT * FROM siparis WHERE musteri_id=".$this->session->uye_session["id"]);
		$data["veriler"]=$query->result();
	
		$this->load->view('_header',$data);
		$this->load->view('_uyesidebar');
		$this->load->view('siparislerim',$data);
		$this->load->view('_footer');
	}
	public function siparisdetay($siparis_id)
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Siparis Detayı ||";
		$data["menu"]="uye";
		
		$id=$this->session->uye_session["id"];
		$query=$this->db->query("SELECT * FROM siparis_urunler  WHERE siparis_id=$siparis_id");
		$data["veriler"]=$query->result();
	
		$this->load->view('_header',$data);
		$this->load->view('_uyesidebar');
		$this->load->view('siparis_detay',$data);
		$this->load->view('_footer');
	}
	
	
}


