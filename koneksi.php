<?php
class Koneksi{
  private $server="localhost";
  private $username="id6072652_dev1";
  private $password = "Dzaky0987654321";
  private $db = "id6072652_mahasiswa";
  private $hubungan;

  function ambilKoneksi(){
    $hubungan= new mysqli($this ->server, $this->username,
    $this->password, $this->db);
    return $hubungan;
  }
}
 ?>
