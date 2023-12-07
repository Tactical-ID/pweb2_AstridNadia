<?php
  include_once '../../config.php';
  include_once '../../controllers/DokterController.php';

  $database = new database();
  $db = $database->getKoneksi();

  if (isset($_POST['submit'])) {
    
    $nama_dokter = $_POST['nama_dokter'];

    $dokterController = new DokterController($db);
    $result = $dokterController->createDokter($nama_dokter);
    if ($result) {
        header("location:dokter");
    } else {
        header("location:tambah.php");
    }
  }
?>
