<?php
  
  include_once '../../models/Dokter.php';

  class DokterController{
    private $model;
    
    public function __construct($db) {
      $this->model = new Dokter($db);
    }

    public function getAllDokter() {
      return $this->model->getAllDokter();
    }

    public function createDokter($nama_dokter) {
      return $this->model->createDokter($nama_dokter);
    }

    public function getDokterById($id_dokter) {
      return $this->model->getDokterById($id_dokter);
    }

    public function updateDokter($id_dokter, $nama_dokter) {
      return $this->model->updateDokter($id_dokter, $nama_dokter);
    }

    public function deleteDokter($id_dokter) {
      return $this->model->deleteDokter($id_dokter);
    }
  }
?>