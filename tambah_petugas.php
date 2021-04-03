<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Tambah Petugas</title>
   
  </head>
<body>
  <?php
  include ('tampilan/header.php');
  include ('tampilan/sidebar.php');
  include ('tampilan/footer.php');
?>
  
        <div class="main-content bg-secondary">
        <section class="section">
          <div class="section-header bg-light">
            <h1>Tambah Petugas</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="petugas.php">Data Petugas</a></div>
              <div class="breadcrumb-item">Tambah Kelas</div>
            </div>
          </div>
          <div class="row">
              <div class="col-12">
                <div class="card bg-light">
                  <div class="card-header">
                    <h4>SILAHKAN TAMBAH PETUGAS DISINI</h4>
                  </div>
                  <div class="card-body">
                    <div class="row mt-4">
                      <div class="col-12 col-lg-8 offset-lg-2">
                        <div class="wizard-steps">
                          <div class="wizard-step wizard-step-active">
                            <div class="wizard-step-icon">
                              <i class="fas fa-school"></i>
                            </div>

                    <form class="wizard-content mt-2" method="post" action="proses_tambahpetugas.php">
                      <div class="wizard-pane">
                        <div class="form-group row align-items-center">
                          <label class="col-md-4 text-md-right text-left">usename</label>
                          <div class="col-lg-4 col-md-6">
                            <input type="text" name="username" class="form-control">
                          </div>
                        </div>
                        <div class="form-group row align-items-center">
                          <label class="col-md-4 text-md-right text-left">password</label>
                          <div class="col-lg-4 col-md-6">
                            <input type="text" name="password" class="form-control">
                          </div>
                        </div>
                          <div class="form-group row align-items-center">
                          <label class="col-md-4 text-md-right text-left">nama petugas</label>
                          <div class="col-lg-4 col-md-6">
                            <input type="text" name="nama_petugas" class="form-control">
                          </div>
                        </div>
                          <div class="form-group row align-items-center">
                          <label class="col-md-4 text-md-right text-left">level</label>
                          <div class="col-lg-4 col-md-6">
                            <select name="id_petugas">
                         <option value="not_option"> Silahkan Pilih Level</option>
                          <?php
                              // jalankan query untuk menampilkan semua data diurutkan berdasarkan id
                              $query = "SELECT * FROM petugas ORDER BY level ASC";
                              $result = mysqli_query($koneksi, $query);
                              //mengecek apakah ada error ketika menjalankan query
                              if(!$result){
                                die ("Query Error: ".mysqli_errno($koneksi).
                                   " - ".mysqli_error($koneksi));
                              }

                              //buat perulangan untuk element tabel dari data mahasiswa
                              $no = 1; //variabel untuk membuat nomor urut
                              // hasil query akan disimpan dalam variabel $data dalam bentuk array
                              // kemudian dicetak dengan perulangan while
                              while($row = mysqli_fetch_assoc($result))
                              {
                              ?>
                         <option value="<?php echo $row['id_petugas']; ?>"><?php echo $row['level']; ?></option>
                         <?php
                                $no++; //untuk nomor urut terus bertambah 1
                              }
                              ?>
                         </select>
                                  
                              </div>
                            </div>
                        <div class="form-group row">
                          <div class="col-md-4"></div>
                          <div class="col-lg-4 col-md-6 text-right">
                            <button type="submit" class="btn btn-icon icon-right btn-primary">SELESAI<i class="fas fa-arrow-right"></i></button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
        </div>
      </footer>
    </div>
    </div>