<?php
  include_once '../../config.php';
  include_once '../../controllers/PasienController.php';
  require '../../index.php';

  $database = new database();
  $db = $database->getKoneksi();

  if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $pasienController = new PasienController($db);
    $pasienData = $pasienController->getPasienById($id);

    if ($pasienData) {
        if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $tgl_lahir = $_POST['tgl_lahir'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $alamat = $_POST['alamat'];
            $no_hp = $_POST['no_hp'];
            $penyakit = $_POST['penyakit'];
            $keluhan = $_POST['keluhan'];

            $result = $pasienController->updatePasien($id, $nama, $tgl_lahir, $jenis_kelamin, $alamat, $no_hp, $penyakit, $keluhan);
            if ($result) {
                header("location:pasien");
            } else {
                header("location:edit.php");
            }
        } 
    } else {
        echo "Pasien tidak ditemukan";
    }
  }
?>
<div class="px-5 py-3">
<h3><b></b></h3>
<?php
  if ($pasienData) {
?>
<form action="" method="post">
  <div class="col-md-8 mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input name="nama"type="text" class="form-control" id="" value="<?php echo $pasienData['nama']?>">
  </div>
  <div class="col-md-8 mb-3">
    <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
    <input name="tgl_lahir" type="date" class="form-control" id="" value="<?php echo $pasienData['tgl_lahir']?>">
  </div>
  <div class="col-md-8 mb-3">
    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
        <select name="jenis_kelamin" class="form-select" aria-label="tgl_lahir">
            <option selected> -- pilih --</option>
            <option value="laki-laki"<?php echo ($pasienData['jenis_kelamin'] == 'laki-laki') ? 'selected' : ''; ?>>Laki-laki</option>
            <option value="perempuan" <?php echo ($pasienData['jenis_kelamin'] == 'perempuan') ? 'selected' : ''; ?>>Perempuan</option>
        </select>
  </div>
  <div class="col-md-8 mb-3">
    <label for="alamat" class="form-floating">Alamat</label>
    <input name="alamat" type="text" class="form-control" id="" value="<?php echo $pasienData['alamat']?>">
  </div>
  <div class="col-md-8 mb-3">
    <label for="no_hp" class="form-label">No Hp</label>
    <input name="no_hp" type="text" class="form-control" id="" value="<?php echo $pasienData['no_hp']?>">
  </div>
  <div class="col-md-8 mb-3">
    <label for="penyakit" class="form-label">Penyakit</label>
    <input name="penyakit" type="text" class="form-control" id="" value="<?php echo $pasienData['penyakit']?>">
  </div>
  <div class="col-md-8 mb-3">
    <label for="keluhan" class="form-label">Keluhan</label>
    <input name="keluhan" type="text" class="form-control" id="" value="<?php echo $pasienData['keluhan']?>">
  </div>
  <div>
  <input class="btn btn-success mb-3 mt-2" type="submit" value="Simpan" name="submit" onclick="showAlert()">
  </div>
</form>
<?php
  }
?>
</div>
<script>
    function showAlert() {
      alert ("Data Pasien berhasil diperbarui")
    }
  </script>
</div>