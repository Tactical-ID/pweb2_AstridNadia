<?php
  include_once '../../config.php';
  include_once '../../controllers/PasienController.php';

  $database = new database();
  $db = $database->getKoneksi();

  if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $penyakit = $_POST['penyakit'];
    $keluhan = $_POST['keluhan'];


    $pasienController = new PasienController($db);
    $result = $pasienController->createPasien($nama, $tgl_lahir, $jenis_kelamin, $alamat, $no_hp, $penyakit,$keluhan);
    if ($result) {
        header("location:pasien");
    } else {
        header("location:tambah_pasien");
    }
  }
?>