<?php
include 'koneksi.php';

$query = "SELECT * FROM tb_mapel";
$sql = mysqli_query($conn, $query);
$no = 1;

?>

<!-- php -S localhost:8000 -->
<!DOCTYPE html>
<html lang="en">
      <head>
            <meta charset="UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <!-- Bootstrap -->
            <link rel="stylesheet" href="css/bootstrap.min.css" />
            <script src="js/bootstrap.bundle.min.js"></script>
            <!-- fontawesome -->
            <script src="fontawesome/js/all.js"></script>
            <title>CRUD PHP | Data Mapel</title>
            <style>
                  body { 
                        padding-top: 65px; 
                  }      
            </style>
      </head>
      <body>
            <!-- <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top ">
                  <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                              <img src="logounpra.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">UNPRA
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                              <ul class="navbar-nav mx-auto">
                                    <li class="nav-item">
                                          <a class="nav-link" href="index.php">Siswa</a>
                                    </li>
                                    <li class="nav-item">
                                          <a class="nav-link" href="#">Guru</a>
                                    </li>
                                    <li class="nav-item">
                                          <a class="nav-link active" aria-current="page" href="mapel.php">Mata pelajaran</a>
                                    </li>
                                    
                                    
                              </ul>
                              <a class="nav-link d-flex" href="#">Logout</a>
                              
                        </div>
                  </div>
            </nav> -->
            <nav class="navbar bg-body-tertiary fixed-top">
                <div class="container-fluid">
                    <!-- <a class="navbar-brand" href="#"> -->
                        <!-- <img src="logounpra.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">UNPRA -->
                    <!-- </a> -->
                    <!-- <a class="navbar-brand" href="#">Offcanvas navbar</a> -->
                    <button class="navbar-brand navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <img src="logounpra.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">UNPRA
                    </button>
                    <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                  </button> -->
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Admin</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                    <div class="offcanvas-body">
                        
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                    <li class="nav-item">
                                          <a class="nav-link" href="index.php">Siswa</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" href="dosen.php">Dosen</a>
                                    </li>
                                    <li class="nav-item">
                                          <a class="nav-link active" aria-current="page" href="mapel.php">Mata Pelajaran</a>
                                    </li>
                                    
                        </ul>
                    </div>
                    <a class="nav-link d-flex" style="padding-left: 10px;" href="#"><i class="fa-solid fa-right-from-bracket"></i>&nbsp;Logout</a>
                    
                    </div>
                </div>
            </nav>

            <div class="container">
                  <h1>Data Mata Pelajaran</h1>
                  <figure>
                        <blockquote class="blockquote">
                        <p>Berisi data yang telah disimpan di database</p>
                        </blockquote>

                    <figcaption class="blockquote-footer">CRUD <cite class="Source Title">Create Read Update Delete</cite></figcaption>
                  </figure>

                  <a href="kelolamapel.php" type="button" class="btn btn-primary mb-3">
                        <i class="fa fa-plus"></i>
                        Tambah Data
                  </a>
      
                  <div class="table-responsive">
                        <table class="table align-middle table-bordered table-hover">
                        <thead>
                              <tr>
                                    <th><center>No.</center></th>
                                    <th>Nama Mata Pelajaran</th>
                                    <th>Deskripsi</th>
                                    <th>Jumlah Jam</th>
                                    <th>Kelas</th>
                                    <th><center>Cover Buku</center></th>
                                    <th><center>Keterangan</center></th>
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
                              <td><?php echo $result['nama_mapel']; ?></td>
                              <td><?php echo $result['deskripsi']; ?></td>
                              <td><?php echo $result['jumlah_jam']; ?> Jam</td>
                              <td>Kelas <?php echo $result['kelas']; ?></td>
                              <td>
                              <img src="img/mapel/<?php echo $result['cover_buku']; ?>" alt="" style="width: 100px" />
                              </td>
                              <td><?php echo $result['keterangan']; ?></td>
                              <td>
                                    <a href="kelolamapel.php?ubah=<?php echo $result['id_mapel']; ?>" type="button" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>

                                    <!-- <a href="proses.php?hapus=< ?php echo $result['id_mapel']; ?>" type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a> -->
                                    <a href="prosesmapel.php?hapus=<?php echo $result['id_mapel']; ?>" type="button" class="btn btn-danger btn-sm" onClick="return confirm('Apakah anda yakin ingin menghapus data Mapel tersebut?')"><i class="fa fa-trash"></i></a>
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
