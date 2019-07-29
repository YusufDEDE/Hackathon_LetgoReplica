<?php
  class User_model extends CI_model{



  // Kullanıcı kayıt
  public function register_user($user){

  $this->db->insert('kullanicilar', $user);
  }

  // Urun Ekle
  public function urunAdd($urun){

  $this->db->insert('urunler', $urun);
  }

  // Favori Ekle
  public function favAdd($favori){

  $this->db->insert('favoriler', $favori);
  }

  // Urun Sat Ekle
  public function urunSat($Uruns){

  $this->db->insert('satilan', $Uruns);
  }

  // Urun satılmış olan Ekle
  public function UrunSatilmis($Urunss){

  $this->db->insert('satinalinan', $Urunss);
  }

  // Kategori Çek
  public function getKategori(){
    /*$this->db->select('*');
    $this->db->from('kategoriler');

    $query=$this->db->get();
    */

    $data = $this->db->query("CALL listele()");
    return $data->result();

  }

  public function urunCek(){

    $uruns = $this->db->query("CALL urunCek()");
    return $uruns->result();

  }

  public function satilanCek(){

  $query = $this->db->query('SELECT * FROM satilanCek');
  return $query->result();

  }




  public function login_user($name,$pass){

      $this->db->select('*');
      $this->db->from('kullanicilar');
      $this->db->where('kullanici_adi',$name);
      $this->db->where('kullanici_sifre',$pass);

      if($query=$this->db->get())
      {
          return $query->row_array();
      }
      else{
        return false;
      }




  }

}


?>
