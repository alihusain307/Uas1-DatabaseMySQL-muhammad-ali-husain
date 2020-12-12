<?php 
session_start();
if (!isset($_SESSION['password'])) {
    header('location: login.php ');
    exit;
}
include 'koneksi.php';

$nim = $_POST['nim'];
$nama_lengkap = $_POST['nama_lengkap'];
$agama = $_POST['agama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$jurusan = $_POST['jurusan'];
$ayah = $_POST['ayah'];
$ibu = $_POST['ibu'];
$alamat = $_POST['alamat'];
$as_sek = $_POST['as_sek'];
$telepon = $_POST['telepon'];
$telepon_ortu = $_POST['telepon_ortu'];

        $sql = $koneksi->query("INSERT INTO biodata VALUES ('', '$nim', '$nama_lengkap', '$agama', '$jenis_kelamin', '$jurusan', '$ayah', '$ibu', '$alamat', '$as_sek', '$telepon', '$telepon_ortu')");
        header('Location: biodata.php');
 ?>