<?php
  
  class Dokter {
    private $koneksi;

    public function __construct($db) {
        $this->koneksi = $db;
    }

    public function getAllDokter(){
        $query = "SELECT *FROM dokter";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function createDokter($nama_dokter){
      $query = "INSERT INTO dokter (nama_dokter) VALUES ('$nama_dokter')";
      
      $result = mysqli_query($this->koneksi, $query);
      if ($result){
        return true;
      } else {
        return false;
      }
    }

    public function getDokterById($id_dokter) {
      $query = "SELECT * FROM dokter where id_dokter='$id_dokter'";
      $result = mysqli_query($this->koneksi, $query);
      return mysqli_fetch_assoc($result);
    }
  
    public function updateDokter($id_dokter, $nama_dokter) {
      $query = "UPDATE dokter set nama_dokter='$nama_dokter' where id_dokter='$id_dokter'";

      $result = mysqli_query($this->koneksi, $query);
      if ($result){
        return true;
      } else {
        return false;
      }
    }

    public function deleteDokter($id_dokter) {
      $query ="DELETE FROM dokter WHERE id_dokter=$id_dokter";
      $result = mysqli_query($this->koneksi, $query);
      if ($result) {
        return true;
      } else {
        return false;
      }
    }
  }
?>