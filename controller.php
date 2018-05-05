<?php
// Cek Request
if(isset($_POST['txtnama'])&&isset($_POST['txtnim'])) {
   require_once 'fakultas.class.php';
   include_once 'hasil.php';
} else {
   // Jika nilai panjang dan lebar BELUM dikirim
   include_once 'inputmahasiswa.php';
}
?>