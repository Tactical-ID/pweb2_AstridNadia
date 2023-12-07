<?php
  
  class Pasien {
    private $koneksi;

    public function __construct($db) {
        $this->koneksi = $db;
    }

    public function getAllPasien(){
        $query = "SELECT *FROM pasien";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function createPasien($nama, $tgl_lahir, $jenis_kelamin, $alamat, $no_hp, $penyakit, $keluhan){
      $query = "INSERT INTO pasien (nama, tgl_lahir, jenis_kelamin, alamat, no_hp, penyakit, keluhan) 
      VALUES ('$nama', '$tgl_lahir', '$jenis_kelamin','$alamat', '$no_hp', '$penyakit', '$keluhan')";
      
      $result = mysqli_query($this->koneksi, $query);
      if ($result){
        return true;
      } else {
        return false;
      }
    }

    public function getPasienById($id) {
      $query = "SELECT *FROM pasien where id=$id";
      $result = mysqli_query($this->koneksi, $query);
      return mysqli_fetch_assoc($result);
    }
    
    public function updatePasien($id, $nama, $tgl_lahir, $jenis_kelamin, $alamat, $no_hp, $penyakit, $keluhan) {
      $query = "UPDATE pasien set nama='$nama', tgl_lahir='$tgl_lahir', jenis_kelamin='$jenis_kelamin', alamat='$alamat', no_hp='$no_hp',
      penyakit='$penyakit', keluhan='$keluhan' where id='$id'";

      $result = mysqli_query($this->koneksi, $query);
      if ($result){
        return true;
      } else {
        return false;
      }
    }

    public function deletePasien($id) {
      $query ="DELETE FROM pasien WHERE id=$id";
      $result = mysqli_query($this->koneksi, $query);
      if ($result) {
        return true;
      } else {
        return false;
      }
    }
  }
?>