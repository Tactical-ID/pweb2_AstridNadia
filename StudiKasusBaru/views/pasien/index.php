<?php
  //memanggil class model database
  include_once '../../config.php';
  include_once '../../controllers/PasienController.php';
  include_once '../../controllers/DokterController.php';
  require '../../index.php';

  //instansiasi class database
  $database = new database;
  $db = $database->getKoneksi();

  $pasienController = new PasienController($db);
  $pasien = $pasienController->getAllPasien(); //mengambil data dari tabel pasien

?>

<div class="px-5 py-3">
<h3><b>Data Pasien</b></h3>
<a class="btn btn-primary bi-plus-circle mb-3 mt-2" href="tambah_pasien"> Tambah Pasien</a>

<table class="table table-bordered">
    <tr>
        <th style="text-align: center;">No</th>
        <th style="text-align: center;">Nama</th>
        <th style="text-align: center;">Tanggal Lahir</th>
        <th style="text-align: center;">Jenis Kelamin</th>
        <th style="text-align: center;">Alamat</th>
        <th style="text-align: center;">No Hp</th>
        <th style="text-align: center;">Penyakit</th>
        <th style="text-align: center;">Keluhan</th>
        <th style="text-align: center;">Aksi</th>
    </tr>

    <?php
        $no=1;
        foreach ($pasien as $x) {
            ?>
        <tr>
            <td style="text-align: center;"><?php echo $no++ ?></td>
            <td><?php echo $x['nama'] ?></td>
            <td><?php echo $x['tgl_lahir'] ?></td>
            <td><?php echo $x['jenis_kelamin'] ?></td>
            <td><?php echo $x['alamat'] ?></td>
            <td><?php echo $x['no_hp'] ?></td>
            <td><?php echo $x['penyakit'] ?></td>
            <td><?php echo $x['keluhan'] ?></td>
            <td style="text-align: center;">
                <a class="btn btn-warning bi-pencil-square" href="edit_pasien?id=<?php echo $x['id']; ?>"> Edit</a>
                <a class="btn btn-danger bi-trash3" href="hapus_pasien?id=<?php echo $x['id']; ?>"
                onclick="return confirm('Apakah anda yakin akan menghapus data??')"> Hapus</a>

            </td>
        </tr>
        <?php
        }
    ?>
</table>
</div>
</div>