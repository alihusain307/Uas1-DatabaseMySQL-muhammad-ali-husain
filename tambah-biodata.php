<?php 
session_start();
if (!isset($_SESSION['password'])) {
    header('location: login.php ');
    exit;
}

 ?><!DOCTYPE html>
<html>
<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
   <div class="container">
      <div class="row">
         <div class="col s12 m12">
            <form action="insert-biodata.php" method="POST" enctype="multipart/form-data">
               <div class="card">
                  <div class="card-content" style="margin-bottom: 1px;">
                     <div class="row">
                        <div class="input-field col s6">
                           <input placeholder="Masukkan Nama Lengkap" id="nama_lengkap" type="text" class="validate" name="nama_lengkap">
                           <label for="nama_lengkap">Nama Depan</label>
                        </div>
                        <div class="input-field col s6">
                           <input placeholder="Masukkan NIM" id="nim" type="text" class="validate" name="nim">
                           <label for="nim">NIM</label>
                        </div>
                     </div>
                     <div class="row" style="margin-bottom: 45px;">
                        <div class="col s12">
                           <label for="agama">Agama</label>
                           <select class="browser-default" name="agama" id="agama">
                              <option value="" disabled selected>Choose your option</option>
                              <?php $agama = array('Islam', 'Protestan', 'Khatolik', 'Hindu', 'Budha', 'Konghuchu'); ?>
                              <?php foreach ($agama as $key) : ?>
                                 <option value="<?= $key; ?>"><?= $key; ?></option>
                              <?php endforeach ?>
                           </select>
                        </div>
                     </div>
                     <div class="row" style="margin-bottom: 25px;">
                        <div class="col s12">
                           <label>Jenis Kelamin</label><br>
                           <p>
                              <label for="laki-laki">
                                 <input name="jenis_kelamin" value="L" type="radio" id="laki-laki" />
                                 <span>Laki-laki</span>
                              </label>
                           </p>
                           <p>
                              <label for="perempuan">
                                 <input name="jenis_kelamin" value="P" type="radio" id="perempuan" />
                                 <span>Perempuan</span>
                              </label>
                           </p>
                        </div>  
                     </div>
                     <div class="row">
                        <div class="col s12">
                           <label for="jurusan">jurusan</label>
                           <select class="browser-default" name="jurusan" id="jurusan">
                              <option value="" disabled selected>Choose your option</option>
                              <?php $jurusan = array('Manajemen Informatik dan Komputer', 'Administrasi Perkantoran', 'Akuntansi Perkantoran', 'IT Support'); ?>
                              <?php foreach ($jurusan as $as) : ?>
                                 <option value="<?= $as; ?>"><?= $as; ?></option>
                              <?php endforeach ?>
                           </select>
                        </div>
                     </div>
                     <div class="row">
                        <div class="input-field col s6">
                           <input placeholder="Masukkan Nama Ayah" id="ayah" type="text" class="validate" name="ayah">
                           <label for="ayah">Nama Ayah</label>
                        </div>
                        <div class="row">
                           <div class="input-field col s6">
                              <input placeholder="Masukkan Nama Ibu" id="ibu" type="text" class="validate" name="ibu">
                              <label for="ibu">Nama Ibu</label>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="input-field col s12">
                           <label for="alamat">Alamat Rumah</label>
                           <textarea id="alamat" class="materialize-textarea validate" placeholder="Masukkan alamat lengkap" name="alamat"></textarea>
                        </div>
                     </div>
                     <div class="row">
                        <div class="input-field col s6">
                           <input placeholder="Masukkan Asal Sekolah" id="as_sek" type="text" class="validate" name="as_sek">
                           <label for="as_sek">Asal Sekolah</label>
                        </div>
                     </div>
                     <div class="row">
                        <div class="input-field col s6">
                           <input placeholder="Masukkan No Telepon" id="telepon" type="number" class="validate" name="telepon">
                           <label for="telepon">Nomor Telepon</label>
                        </div>
                     </div>
                     <div class="row" style="margin-bottom: 1px;">
                        <div class="input-field col s6">
                           <input placeholder="Masukkan No Telepon" id="telepon_ortu" type="number" class="validate" name="telepon_ortu">
                           <label for="telepon_ortu">No Telepon Orang Tua</label>
                        </div>
                     </div>
                  </div>
                  <div class="card-action">
                     <button class="btn-small blue accent-3" type="submit">Simpan</button> 
                     <button class="btn-small red accent-3" type="button">Batal</button> 
                     <a href="index.php" class="btn-small blue-grey lighten-5 black-text">Kembali</a>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>      

   <!--JavaScript at end of body for optimized loading-->
   <script type="text/javascript" src="assets/js/materialize.min.js"></script>
   <script>
      $('#alamat').val('New Text');
      M.textareaAutoResize($('#alamat'));
   </script>
</body>
</html>