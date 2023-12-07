<?php
  class HomeController{
    public function home() {
        header("location:http://localhost/pweb2/StudiKasus/index.php");
    }
    public function pasien() {
        header("location:http://localhost/pweb2/StudiKasus/views/pasien/index.php");
    }
    public function dokter() {
        header("location:http://localhost/pweb2/StudiKasus/views/dokter/index.php");
    }
  }
?>