<?php
include 'koneksi.php';

$query = "SELECT * FROM tb_dosen";
$sql = mysqli_query($conn, $query);
$no = 1;

?>

<!-- php -S localhost:8000 -->
<!DOCTYPE html>
<html lang="en">
      <head>
            <meta charset="UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <link rel="stylesheet" href="css/bootstrap.min.css" />
            <script src="js/bootstrap.bundle.min.js"></script>
            <script src="fontawesome/js/all.js"></script>
            <title>CRUD PHP | Data Dosen</title>
            <style>
                  body { 
                        padding-top: 65px; 
                  }      
            </style>
      </head>
      <body>
            
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
                                          <a class="nav-link" aria-current="page" href="index.php">Siswa</a>
                                    </li>
                                    <li class="nav-item">
                                          <a class="nav-link active" href="dosen.php">Dosen</a>
                                    </li>
                                    <li class="nav-item">
                                          <a class="nav-link" href="mapel.php">Mata Pelajaran</a>
                                    </li>                  
                              </ul>
                        </div>
                        <a class="nav-link d-flex" style="padding-left: 10px;" href="#"><i class="fa-solid fa-right-from-bracket"></i>&nbsp;Logout</a>
                    </div>
                </div>
            </nav>
            <div class="container">
                  <h1>Data Dosen</h1>
                  <figure>
                        <blockquote class="blockquote">
                        <p>Berisi data yang telah disimpan di database</p>
                        </blockquote>

                    <figcaption class="blockquote-footer">CRUD <cite class="Source Title">Create Read Update Delete</cite></figcaption>
                  </figure>

            <!-- Button trigger modal -->
            <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  <i class="fa fa-plus"></i> Tambah Data
            </button> -->

                  <a href="keloladosen.php" type="button" class="btn btn-primary mb-3">
                        <i class="fa fa-plus"></i>
                        Tambah Data
                  </a>
      
                  <div class="table-responsive">
                        <table class="table align-middle table-bordered table-hover">
                        <thead>
                              <tr>
                                    <th><center>No.</center></th>
                                    <th>Nama Dosen</th>
                                    <th>Homebase</th>
                                    <th>Bidang Ilmu</th>
                                    <th><center>Foto Dosen</center></th>
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
                                    <td><?php echo $result['nama_dosen']; ?></td>
                                    <td><?php echo $result['homebase']; ?></td>
                                    <td><?php echo $result['bidang_ilmu']; ?></td>
                                    <td>
                                    <img src="img/dosen/<?php echo $result['foto_dosen']; ?>" alt="" style="width: 100px" />
                                    </td>
                                    <td><?php echo $result['alamat']; ?></td>
                                    <td>
                                    <a href="keloladosen.php?ubah=<?php echo $result['id_dosen']; ?>" type="button" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>

                                    <!-- <a href="proses.php?hapus=< ?php echo $result['id_dosen']; ?>" type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a> -->
                                    <a href="prosesdosen.php?hapus=<?php echo $result['id_dosen']; ?>" type="button" class="btn btn-danger btn-sm" onClick="return confirm('Apakah anda yakin ingin menghapus data Dosen tersebut?')"><i class="fa fa-trash"></i></a>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
