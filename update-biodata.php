<?php 
session_start();
if (!isset($_SESSION['password'])) {
    header('location: login.php ');
    exit;
}
include 'koneksi.php';

$id = $_POST['id'];
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


$sql= $koneksi->query("UPDATE biodata SET 
    nim ='$nim', 
    nama_lengkap='$nama_lengkap', 
    agama='$agama', 
    jenis_kelamin='$jenis_kelamin', 
    jurusan='$jurusan', 
    nama_ayah='$ayah', 
    nama_ibu='$ibu', 
    alamat_rumah='$alamat', 
    asal_sekolah='$as_sek', 
    no_hp='$telepon', 
    no_hp_ortu='$telepon_ortu'
     WHERE id = '$id'");

if (!$sql) {
    header('Location : edit.php');
}

header('Location: biodata.php');
 ?>