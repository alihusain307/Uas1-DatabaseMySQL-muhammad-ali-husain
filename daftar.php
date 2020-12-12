  <!DOCTYPE html>
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
          <div class="card" style="margin: 100px 350px 0px 350px">
            <div class="card-content">
              <h3 class="center">Daftar</h3>
              <form action="#" method="POST">
                <div class="row">
                  <div class="input-field col s12">
                   <input placeholder="Masukan Username" id="usr" type="text" class="validate" name="username">
                   <label for="usr">username</label>
                 </div>
                 <div class="input-field col s12">
                   <input placeholder="Masukkan Password" id="pw" type="password" class="validate" name="password">
                   <label for="pw">Password</label>
                 </div>
                 <div class="input-field col s12">
                   <input placeholder="Masukkan Password" id="konfirm" type="password" class="validate" name="konfirmasi">
                   <label for="pw">Konfirmasi Password</label>
                 </div>
                 <div class="input-field col s6">
                   <button class="btn-small blue accent-3" name="submit" type="submit">Simpan</button>
                 </div>
               </div>
             </form>
           </div>
         </div>
       </div>
     </div>
   </div>

   <!--JavaScript at end of body for optimized loading-->
   <script type="text/javascript" src="assets/js/materialize.min.js"></script>
 </body>
 </html>
 <?php 
include "koneksi.php";

 if (isset($_POST['submit'])) {
  $username =htmlspecialchars(strtolower(stripcslashes($_POST['username'])));
  $password = mysqli_real_escape_string($koneksi, $_POST['password']);
  $konfirmasi = mysqli_real_escape_string($koneksi, $_POST['konfirmasi']);

  // $cek = mysqli_query($koneksi, "SELECT username FROM login
  //       WHERE username = '$username'");

  //   if (mysqli_num_rows($cek) === 1) {
  //       echo "<script>
  //               alert('Data Ditemukan!');
  //           </script>";
  //           return false;

  if ($password == $konfirmasi) {
    $pwd = password_hash($password, PASSWORD_DEFAULT);
    $sql = $koneksi->query("INSERT INTO login VALUES ('', '$username', '$pwd')");
    header('location: login.php');
  } else {
      echo "<script>
      alert('Data Gagal Di tambahkan');
      </script>";
  }

}
// }
?>