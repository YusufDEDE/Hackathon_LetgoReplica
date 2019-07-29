<?php

class User extends CI_Controller {

public function __construct(){

        parent::__construct();
  			$this->load->helper('url');
  	 		$this->load->model('user_model');
        $this->load->library('session');

}

public function index()
{
$this->load->view("login.php");
}

public function register(){

  $this->load->view("register.php");
}

public function register_user(){

      $user=array(
      'kullanici_adi'=>$this->input->post('user_name'),
      'kullanici_sifre'=>$this->input->post('user_password')
      );
        print_r($user);

    $this->user_model->register_user($user);

  //$this->session->set_flashdata('success_msg', 'Kayıt başarılı bir şekilde gerçekleştirildi.');
  redirect('user/login_view');


}

public function login_view(){

$this->load->view("login.php");

}

function login_user(){
  $user_login=array(

  'user_email'=>$this->input->post('user_email'),
  'user_password'=>$this->input->post('user_password')

    );

    $data=$this->user_model->login_user($user_login['user_email'],$user_login['user_password']);
      if($data)
      {
        $urunler['uruns'] = $this->user_model->urunCek();

        $this->load->view('AnaSayfa.php', $urunler);

      }
      else{
        $this->session->set_flashdata('error_msg', 'Hatalı giriş.');
        $this->load->view("login.php");

      }


}

//urun Ekle
public function urunEkle(){
    $urun = array(
      'urun_adi' => $this->input->post('urun_adi'),
      'urun_aciklama' => $this->input->post('urun_aciklama'),
      'kullanici_id' => $this->input->post('kullanici_id'),
      'kategori_id' => $this->input->post('urun_kategori'),
      'urun_durumu' => 0
    );

    $this->session->set_flashdata('success_msg', 'Ürün başarılı bir şekilde gerçekleştirildi.');
    $this->user_model->urunAdd($urun);
    redirect('user/urun');

}





// Ana sayfa
function home(){

$urunler['uruns'] = $this->user_model->urunCek();
$this->load->view('AnaSayfa', $urunler);

}
// Urun Ekle
function urun(){

$kategori['kategoriler'] = $this->user_model->getKategori();
$this->load->view('urunler', $kategori);
}
// satilanlar

function satilanlar(){

$this->load->view('satilanlar');

}

// satınaldıklarım

function satinaldiklarim(){

$this->load->view('satinaldiklarim');
}

// Mesajlar

function mesaj(){

$this->load->view('mesaj');
}

// Taleplerim
function talepler(){

$this->load->view('talepler');
}

// Favoriler
function favoriler(){

$this->load->view('favoriler');
}

// Harita
function harita(){

$this->load->view('harita');
}



public function user_logout(){

  $this->session->sess_destroy();
  redirect('user/login_view', 'refresh');
}

}

?>
