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
            <!-- Bootstrap -->
            <link rel="stylesheet" href="css/bootstrap.min.css" />
            <script src="js/bootstrap.bundle.min.js"></script>
            <!-- fontawesome -->
            <script src="fontawesome/js/all.js"></script>
            <title>CRUD PHP | Data Siswa</title>
            <style>
                  body { 
                        padding-top: 65px; 
                  }      
            </style>
            <style>
                  
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
                                          <a class="nav-link active" aria-current="page" href="index.php">Siswa</a>
                                    </li>
                                    <li class="nav-item">
                                          <a class="nav-link" href="">Guru</a>
                                    </li>
                                    <li class="nav-item">
                                          <a class="nav-link" href="mapel.php">Mata Pelajaran</a>
                                    </li>
                                    
                              </ul>
                              <a class="nav-link d-flex" href="#">Logout</a>
                              
                        </div>
                  </div>
            </nav> -->
            
            <div class="container">
                  <h1>Data Siswa</h1>
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
                                    <img src="img/<?php echo $result['foto_siswa']; ?>" alt="" style="width: 100px" />
                                    </td>
                                    <td><?php echo $result['alamat']; ?></td>
                                    <td>
                                    <a href="kelola.php?ubah=<?php echo $result['id_siswa']; ?>" type="button" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>

                                    <!-- <a href="proses.php?hapus=< ?php echo $result['id_siswa']; ?>" type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a> -->
                                    <a href="proses.php?hapus=<?php echo $result['id_siswa']; ?>" type="button" class="btn btn-danger btn-sm" onClick="return confirm('Apakah anda yakin ingin menghapus data tersebut?')"><i class="fa fa-trash"></i></a>
                                    </td>
                              </tr>
                        <?php
                              }
                        ?>

                              <!-- <tr>
                              <td><center>1.</center></td>
                              <td>112233</td>
                              <td>Aji Kurniawan</td>
                              <td>Laki-laki</td>
                              <td>
                                    <img src="img/1.jpg" alt="" style="width: 100px" />
                              </td>
                              <td>Prabumulih</td>
                              <td>
                                    <a href="kelola.php?ubah=1" type="button" class="btn btn-success btn-sm"><i class="fa fa-pencil-alt"></i></a>
                                    <a href="proses.php?hapus=1" type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                              </td> -->

                        <!--   <td>
                            <a href="kelola.php" type="button" class="btn btn-sm btn-success mb-3"><i class="fa fa-pencil-alt"></i> Ubah</a>
                            <button type="button" class="btn btn-danger btn-sm mb-3"><i class="fa fa-trash"></i> Hapus</button>
                          </td> -->
                              <!-- </tr>
                              <tr>
                                    <td><center>2.</center></td>
                                    <td>122233</td>
                                    <td>Indah Mayasari</td>
                                    <td>Perempuan</td>
                                    <td>
                                        <img src="img/2.jpg" alt="" style="width: 100px" />
                                    </td>
                                    <td>Prabumulih Timur</td>
                                    <td>
                                          <a href="kelola.php?ubah=1" type="button" class="btn btn-success btn-sm"><i class="fa fa-pencil-alt"></i></a>
                                          <a href="proses.php?hapus=1" type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                    </td> -->
                                    <!-- <td>
                                          <a href="kelola.php" type="button" class="btn btn-sm btn-success mb-3"><i class="fa fa-pencil-alt"></i> Ubah</a>
                                          <button type="button" class="btn btn-danger btn-sm mb-3"><i class="fa fa-trash"></i> Hapus</button>
                                    </td> -->
                              <!-- </tr> -->
                        </tbody>
                        </table>
                  </div>

      </body>
</html>


