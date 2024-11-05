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
  </head>

  <body>
    <!-- <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top ">
        <div class="container-fluid">
              <a class="navbar-brand" href="#">
                <img src="img/logounpra.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">UNPRA
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
                                <a class="nav-link" href="#">Dosen</a>
                          </li>
                          <li class="nav-item">
                                <a class="nav-link" href="#">Mata Kuliah</a>
                          </li>
                          <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown link
                                </a>
                                <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="#">Action</a></li>
                                      <li><a class="dropdown-item" href="#">Another action</a></li>
                                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                          </li> 
                          
                    </ul>
                    <a class="nav-link d-flex" href="#"><i class="fa-solid fa-right-from-bracket"></i>&nbsp;Logout</a>
              </div>
        </div>
  </nav> -->
  <nav class="navbar bg-body-tertiary fixed-top">
                <div class="container-fluid">
                    <!-- <a class="navbar-brand" href="#">
                        <img src="logounpra.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">UNPRA
                    </a> -->
                    <!-- <a class="navbar-brand" href="#">Offcanvas navbar</a> -->
                    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button> -->
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
                        <!-- <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                            </a>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        </ul> -->
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                    <li class="nav-item">
                                          <a class="nav-link active" aria-current="page" href="index.php">Siswa</a>
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

    <form method="POST" action="prosesdosen.php">
    <div class="mb-3 row">
      <label for="nama_dosen" class="col-sm-2 col-form-label">Nama Dosen</label>
      <div class="col-sm-10">
        <input type="text" name="nama_dosen" class="form-control" id="nama_dosen" placeholder="Ex: Rico" />
      </div>
    </div>
    <div class="mb-3 row">
      <label for="homebase" class="col-sm-2 col-form-label">Homebase</label>
      <div class="col-sm-10">
        <input type="text" name="homebase" class="form-control" id="homebase" placeholder="Ex: Alexander" />
      </div>
    </div>
    <div class="mb-3 row">
      <label for="bidang_ilmu" class="col-sm-2 col-form-label">Bidang Ilmu</label>
      <div class="col-sm-10">
        <input type="text" name="bidang_ilmu" class="form-control" id="bidang_ilmu" placeholder="Ex: Alexander" />
      </div>
    </div>
    <!-- <div class="mb-3 row">
      <label for="jkel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
      <div class="col-sm-10">
        <select name="jenis_kelamin" id="jkel" class="form-select">
        <option selected>Jenis Kelamin</option>
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
        </select>
      </div>
    </div> -->
    <div class="mb-3 row">
      <label for="foto_dosen" class="col-sm-2 col-form-label">Foto Dosen</label>
      <div class="col-sm-10">
        <input type="file" name="foto_dosen" class="form-control" id="foto_dosen" />
      </div>
    </div>
    <div class="mb-3 row">
      <label for="alamat" class="col-sm-2 col-formlabel">Alamat</label>
      <div class="col-sm-10">
        <textarea name="alamat" class="form-control" id="alamat" rows="3" placeholder="Ex: Jln. Sudirman..."></textarea>
      </div>
    </div>
      
      <div class="mb-3 row mt-4">
        <div class="col">

          <?php if (isset($_GET['ubah'])) { ?>
            <button type="submit" name="aksi" value="edit" class="btn btn-primary"><i class="fa fa-save" aria-hidden="true"></i> Simpan Perubahan</button>
          <?php
            } else {
          ?>
          <button type="submit" name="aksi" value="add" class="btn btn-primary"><i class="fa fa-save" aria-hidden="true"></i> Tambahkan</button>
          <?php } ?>

          <a href="dosen.php" type="button" class="btn btn-danger"><i class="fa fa-reply" aria-hidden="true"></i> Batal</a>
        </div>
      </div>
    </form>
    </div>
  </body>
</html>
