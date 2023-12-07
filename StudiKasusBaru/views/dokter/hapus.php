<?php
  include_once '../../config.php';
  include_once '../../controllers/DokterController.php';

  $database = new database();
  $db = $database->getKoneksi();

  if (isset($_GET['id_dokter'])) {
    $id_dokter = $_GET['id_dokter'];

    $dokterController = new dokterController($db);
    $result = $dokterController->deleteDokter($id_dokter);

    if ($result) {
        header("location:dokter");
    } else {
        echo "Gagal menghapus data";
    }
  }
?>