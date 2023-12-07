<?php
  //memanggil class model database
  include_once '../../config.php';
  include_once '../../controllers/DokterController.php';
  require '../../index.php';

  //instansiasi class database
  $database = new database;
  $db = $database->getKoneksi();

  $dokterController = new DokterController($db);
  $dokter = $dokterController->getAllDokter(); //mengambil data dari tabel dokter
?>

<div class="px-5 py-3">
<h3><b>Data Dokter</b></h3>
<a class="btn btn-primary bi-plus-circle mb-3 mt-2" href="tambah_dokter"> Tambah Dokter</a>

<table border="1" class="table table-bordered">
    <tr>
        <th style="text-align: center;">No</th>
        <th style="text-align: center;">Nama</th>
        <th style="text-align: center;">Aksi</th>
    </tr>

    <?php
        $no=1;
        foreach ($dokter as $x) {
            ?>
        <tr>
            <td style="text-align: center;"><?php echo $no++ ?></td>
            <td><?php echo $x['nama_dokter'] ?></td>
            <td style="text-align: center;">
                <a class="btn btn-warning bi-pencil-square" href="edit_dokter?id_dokter=<?php echo $x['id_dokter']; ?>">Edit</a>
                <a class="btn btn-danger bi-trash3" href="hapus_dokter?id_dokter=<?php echo $x['id_dokter']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus data??')">Hapus</a>
            </td>
        </tr>
        <?php
        }
    ?>
</table>
</div>