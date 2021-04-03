<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Tambah Siswa</title>
   
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
            <h1>Tambah Siswa</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="siswa.php">Data Siswa</a></div>
              <div class="breadcrumb-item">Tambah Siswa</div>
            </div>
          </div>
          <div class="row">
              <div class="col-12">
                <div class="card bg-light">
                  <div class="card-header">
                    <h4>SILAHKAN TAMBAH SISWA DISINI</h4>
                  </div>
                  <div class="card-body">
                    <div class="row mt-4">
                      <div class="col-12 col-lg-8 offset-lg-2">
                        <div class="wizard-steps">
                          <div class="wizard-step wizard-step-active">
                            <div class="wizard-step-icon">
                              <i class="fas fa-school"></i>
                            </div>

                    <form class="wizard-content mt-2" method="post" action="proses_tambahsiswa.php">
                      <div class="wizard-pane">
                        <div class="form-group row align-items-center">
                          <label class="col-md-4 text-md-right text-left">NISN</label>
                          <div class="col-lg-4 col-md-6">
                            <input type="text" name="nisn" class="form-control">
                          </div>
                        </div>
                        <div class="form-group row align-items-center">
                          <label class="col-md-4 text-md-right text-left">NIS</label>
                          <div class="col-lg-4 col-md-6">
                            <input type="text" name="nis" class="form-control">
                          </div>
                        </div>
                          <div class="form-group row align-items-center">
                          <label class="col-md-4 text-md-right text-left">Nama Siswa</label>
                          <div class="col-lg-4 col-md-6">
                            <input type="text" name="nama" class="form-control">
                          </div>
                        </div>
                          <div class="form-group row align-items-center">
                          <label class="col-md-4 text-md-right text-left">Kelas</label>
                          <div class="col-lg-4 col-md-6">
                            <select name="id_kelas">
                         <option value="not_option"> Silahkan Pilih Kelas</option>
                          <?php
                              // jalankan query untuk menampilkan semua data diurutkan berdasarkan id
                              $query = "SELECT * FROM kelas ORDER BY nama_kelas ASC";
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
                         <option value="<?php echo $row['id_kelas']; ?>"><?php echo $row['nama_kelas']; ?></option>
                         <?php
                                $no++; //untuk nomor urut terus bertambah 1
                              }
                              ?>
                         </select>
                                  
                              </div>
                            </div>
                          <div class="form-group row align-items-center">
                          <label class="col-md-4 text-md-right text-left">Alamat</label>
                          <div class="col-lg-4 col-md-6">
                            <input type="text" name="alamat" class="form-control">
                          </div>
                        </div>
                          <div class="form-group row align-items-center">
                          <label class="col-md-4 text-md-right text-left">No Telp</label>
                          <div class="col-lg-4 col-md-6">
                            <input type="text" name="no_telp" class="form-control">
                          </div>
                        </div>
                        <div class="form-group row align-items-center">
                          <label class="col-md-4 text-md-right text-left">Tahun Masuk</label>
                          <div class="col-lg-4 col-md-6">
                            <select name="id_spp">
                         <option value="not_option"> Silahkan Pilih Tahun Masuk</option>
                          <?php
                              // jalankan query untuk menampilkan semua data diurutkan berdasarkan id
                              $query = "SELECT * FROM spp ORDER BY tahun ASC";
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
                         <option value="<?php echo $row['id_spp']; ?>"><?php echo $row['tahun']; ?></option>
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