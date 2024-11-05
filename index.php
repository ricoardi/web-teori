<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="../login.css" />
</head>
<body>
  <div class="login-page">
    <div class="form">
      <?php 
        if(isset($_GET['pesan'])){
          if($_GET['pesan'] == "gagal"){
            echo "Login gagal! username dan password salah!";
          }else if($_GET['pesan'] == "logout"){
            echo "Anda telah berhasil logout";
          }else if($_GET['pesan'] == "belum_login"){
            echo "Anda harus login untuk mengakses halaman admin";
          }
        }
      ?>
      <br>
      <form class="login-form" method="post" action="cek_login.php">
        <input type="text" name="username" placeholder="Masukkan username">
        <input type="password" name="password" placeholder="Masukkan password">
        <button type="submit" value="LOGIN">login</button>
      </form>
    </div>
  </div>

</body>
</html>