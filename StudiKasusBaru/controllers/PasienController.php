<?php
  
  include_once '../../models/Pasien.php';

  class PasienController{
    private $model;
    
    public function __construct($db) {
      $this->model = new Pasien($db);
    }

    public function getAllPasien() {
      return $this->model->getAllPasien();
    }

    public function createPasien($nama, $tgl_lahir, $jenis_kelamin, $alamat, $no_hp, $penyakit, $keluhan) {
      return $this->model->createPasien($nama, $tgl_lahir, $jenis_kelamin, $alamat, $no_hp, $penyakit, $keluhan);
    }

    public function getPasienById($id) {
      return $this->model->getPasienById($id);
    }

    public function updatePasien($id,$nama, $tgl_lahir, $jenis_kelamin, $alamat, $no_hp, $penyakit, $keluhan) {
      return $this->model->updatePasien($id, $nama, $tgl_lahir, $jenis_kelamin, $alamat, $no_hp, $penyakit, $keluhan);
    }

    public function deletePasien($id) {
      return $this->model->deletePasien($id);
    }
  }
?>