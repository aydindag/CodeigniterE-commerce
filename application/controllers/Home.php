<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	  public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				$this->load->model('Database_Model');
				$this->load->helper('url');
					
        }
	
	public function index()
	{	
		$query=$this->db->query("SELECT COUNT(Id) AS say FROM sepet"); // Sepete eklediğimizde sepet
		$data["sepet"]=$query->result();								// id sayısını sayar
	
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi"); // 
		$data["kategoriler"]=$query->result();								// kategorileri çekiyoruz
		
		$query=$this->db->query("SELECT * FROM urunler WHERE grubu='kampanya'");
		$data["kampanya"]=$query->result();
		
		$query=$this->db->query("SELECT * FROM urunler ORDER BY Id DESC LIMIT 4");
		$data["yeni"]=$query->result();	
		
		$query=$this->db->query("SELECT * FROM urunler ORDER BY RAND() LIMIT 6");
		$data["random"]=$query->result();
		
		
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		
		$data["sayfa"]="";
		$data["menu"]="anasayfa";
		
		$this->load->view('_header',$data);
		$this->load->view('_slider');
		$this->load->view('_sidebar');
		$this->load->view('_content');
		$this->load->view('_footer');
	}
	public function hakkimizda()
	{
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]=$query->result();	
		
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Hakkimizda || ";  //meta tagı sekme tarafında gozukmesi için
		$data["menu"]="hakkimizda";
		
		$this->load->view('_header',$data);
		$this->load->view('_sidebar');
		$this->load->view('hakkimizda');
		$this->load->view('_footer');
	}
	public function iletisim()
	{	
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]=$query->result();
		
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="İletisim || ";
		$data["menu"]="iletisim";
		
		$this->load->view('_header',$data);
		$this->load->view('_sidebar');
		$this->load->view('iletisim');
		$this->load->view('_footer');
	}
	public function bize_yazin()
	{	
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]=$query->result();
		
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Bize Yazın || ";
		$data["menu"]="bize_yazin";
		
		$this->load->view('_header',$data);
		$this->load->view('_sidebar');
		$this->load->view('bize_yazin',$data);
		$this->load->view('_footer');
	}
	public function mesaj_kaydet()
	{
		//form verilerini alıyoruz
	$data=array(	
		'adsoy' => $this->input->post('adsoy'),
		'email' => $this->input->post('eposta'),
		'tel' => $this->input->post('tel'),
		'mesaj' => $this->input->post('mesaj'),
		'ip' => $_SERVER['REMOTE_ADDR']  //php get ip
	);
	$this->db->insert("mesajlar",$data);
	$this->session->set_flashdata("mesaj","Mesajınız başarıyla gönderildi <br>En kısa
	sürede sizinle iletişime geçilecektir");
	redirect(base_url().'home/bize_yazin');
	
	}
	public function login_ol()
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Uye Login || ";
		$data["menu"]="uye";
		
		$this->load->view('_header',$data);	
		$this->load->view('login_ol',$data);
		$this->load->view('_footer');
		
	}
	
	public function login()
	{
		 $email= $this->input->post("email");
		 $sifre= $this->input->post("sifre");
		
		//zararlı kodlardan temizleme
		echo $email= $this->security->xss_clean($email);
		echo $sifre= $this->security->xss_clean($sifre);
		//exit();
		
		$this->load->model('Database_Model');
		$result=$this->Database_Model->login("uyeler",$email,$sifre);
		
		if($result)
		{	
		     //kullanici var ise bilgileri diziye aktariliyor
			 $sess_array = array (
			 'id' => $result[0]->Id,
			 'yetki' => $result[0]->yetki,
			 'email' => $result[0]->email,
			 'adsoy' => $result[0]->adsoy,
			 'resim' => $result[0]->resim
			 );
			 print_r($sess_array);
			 //echo "login oldu";
			 //exit();
			 
			 $this->session->set_userdata("uye_session",$sess_array);
			 redirect(base_url());
		}
		else
		{	
			$this->session->set_flashdata("mesaj","Kullanıcı adı veya şifre hatalı!!");
			//echo "Hata var" 
			redirect(base_url().'home/login_ol');
		}
	}
	public function urundetay($id)
	{
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]=$query->result();
		$data["menu"]="urun";
		$data["sayfa"]=null;
		
		$data["veri"]=$this->Database_Model->get_urun($id);
		
		$query=$this->db->query("SELECT * FROM urunler_resim WHERE urun_id=$id");
		$data["resimler"]=$query->result();
		
		$this->load->view('_header',$data);
		$this->load->view('_sidebar');
		$this->load->view('urun_detay',$data);
		$this->load->view('_footer');
		
	}
	public function siparisler($durum)
	{
		$query=$this->db->query("SELECT * FROM siparis WHERE siparisdurumu='$durum'");
		$data["veriler"]=$query->result();
	
		
		$this->load->view('siparisler_listesi',$data);
		
		
	}
	
	
}
