<?php
 include_once('helper.php');
 include_once('pengaturan.php');
 include_once(platformSlashes($_SERVER["DOCUMENT_ROOT"].'/kasuskriminal/vendor/autoload.php'));
 session_start();
 $kon = mysqli_connect("localhost", "root", "", "petakrim") or die('Koneksi Tidak Dapat Dibuat!');
?>