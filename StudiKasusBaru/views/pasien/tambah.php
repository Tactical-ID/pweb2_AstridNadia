<?php
    require '../../index.php';
?>

<div class="px-5 py-3">
<h3><b>Tambah Data Pasien</b></h3>
<form action="simpan_tambahpas" method="post">
  <div class="col-md-8 mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input name="nama"type="text" class="form-control" id="">
  </div>
  <div class="col-md-8 mb-3">
    <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
    <input name="tgl_lahir" type="date" class="form-control" id="">
  </div>
  <div class="col-md-8 mb-3">
    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
        <select name="jenis_kelamin" class="form-select" aria-label="tgl_lahir">
            <option selected> -- pilih --</option>
            <option value="laki-laki">Laki-laki</option>
            <option value="perempuan">Perempuan</option>
        </select>
  </div>
  <div class="col-md-8 mb-3">
    <label for="alamat" class="form-floating">Alamat</label>
        <textarea name="alamat" class="form-control" id=""></textarea>
  </div>
  <div class="col-md-8 mb-3">
    <label for="no_hp" class="form-label">No Hp</label>
    <input name="no_hp" type="text" class="form-control" id="">
  </div>
  <div class="col-md-8 mb-3">
    <label for="penyakit" class="form-label">Penyakit</label>
    <input name="penyakit" type="text" class="form-control" id="">
  </div>
  <div class="col-md-8 mb-3">
    <label for="keluhan" class="form-label">Keluhan</label>
    <input name="keluhan" type="text" class="form-control" id="">
  </div>
  <div>
  <input class="btn btn-success bi mb-3 mt-2" type="submit" value="Simpan" name="submit" onclick="showAlert()">
  </div>
</form>

<script>
    function showAlert() {
      alert ("Data Pasien berhasil ditambahkan")
    }
  </script>
</div>