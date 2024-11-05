<?php
      include 'koneksi.php';

      $query = "SELECT * FROM tb_siswa";
      $sql = mysqli_query($conn, $query);
      $no = 1;
?>
<!-- php -S localhost:8000 -->
<!DOCTYPE html>
<html lang="en">
      <head>
            <meta charset="UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <link rel="stylesheet" href="../css/bootstrap.min.css" />
            <script src="../js/bootstrap.bundle.min.js"></script>
            <script src="../fontawesome/js/all.js"></script>
            <title>CRUD PHP | Data Siswa</title>
            <style>
                  body { 
                        padding-top: 65px; 
                  }      
            </style>
      </head>
      <body>
            <?php 
            session_start();
            if($_SESSION['status']!="login"){
                  header("location:../index.php?pesan=belum_login");
            }
            ?>
            <nav class="navbar bg-body-tertiary fixed-top">
                <div class="container-fluid">
                    <button class="navbar-brand navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        <img src="logounpra.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">UNPRA
                    </button>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Admin</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                              <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.php">Siswa</a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link" href="dosen.php">Dosen</a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link" href="mapel.php">Mata Pelajaran</a>
                              </li>
                        </ul>
                    </div>
                    <a class="nav-link d-flex" style="padding-left: 10px;" href="logout.php"><i class="fa-solid fa-right-from-bracket"></i>&nbsp;Logout</a>
                    </div>
                </div>
            </nav>
            <div class="container">
	            <h4 style="text-align: right;">Selamat datang, <?php echo $_SESSION['username']; ?>!</h4>
 
                  <h1>Data Siswa</h1>
                  <figure>
                        <blockquote class="blockquote">
                              <p>Berisi data yang telah disimpan di database</p>
                        </blockquote>

                        <figcaption class="blockquote-footer">CRUD <cite class="Source Title">Create Read Update Delete</cite></figcaption>
                  </figure>

                  <a href="kelola.php" type="button" class="btn btn-primary mb-3">
                        <i class="fa fa-plus"></i>
                        Tambah Data
                  </a>
      
                  <div class="table-responsive">
                        <table class="table align-middle table-bordered table-hover">
                        <thead>
                              <tr>
                                    <th><center>No.</center></th>
                                    <th>NISN</th>
                                    <th>Nama Siswa</th>
                                    <th>Jenis Kelamin</th>
                                    <th><center>Foto Siswa</center></th>
                                    <th>Alamat</th>
                                    <th><center>Aksi</center></th>
                              </tr>
                        </thead>
                        <tbody>
                        <?php
                              while ($result = mysqli_fetch_assoc($sql)) {
                        ?>
                              <tr>
                                    <td>
                                    <center><?php echo $no++; ?></center>
                                    </td>
                                    <td><?php echo $result['nisn']; ?></td>
                                    <td><?php echo $result['nama_siswa']; ?></td>
                                    <td><?php echo $result['jenis_kelamin']; ?></td>
                                    <td>
                                          <img src="../img/<?php echo $result['foto_siswa']; ?>" alt="" style="width: 100px" />
                                    </td>
                                    <td><?php echo $result['alamat']; ?></td>
                                    <td>
                                          <a href="kelola.php?ubah=<?php echo $result['id_siswa']; ?>" type="button" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>
                                          <a href="proses.php?hapus=<?php echo $result['id_siswa']; ?>" type="button" class="btn btn-danger btn-sm" onClick="return confirm('Apakah anda yakin ingin menghapus data tersebut?')"><i class="fa fa-trash"></i></a>
                                    </td>
                              </tr>
                        <?php
                              }
                        ?>
 
                        </tbody>
                  </table>
            </div>

      </body>
</html>
