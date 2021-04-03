<?php
  // memanggil file koneksi.php untuk membuat koneksi
include 'koneksi.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM kelas WHERE id_kelas='$id'";
    $result = mysqli_query($koneksi, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if(!$result){
      die ("Query Error: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);
      // apabila data tidak ada pada database maka akan dijalankan perintah ini
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='kelas.php';</script>";
       }
  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    echo "<script>alert('Masukkan data id.');window.location='kelas.php';</script>";
  }         
  ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Edit KELAS</title>
   
  </head>
<body>
 
  <?php
  
  include ('tampilan/header.php');
  include ('tampilan/sidebar.php');
  include ('tampilan/footer.php');
?>

        <div class="main-content bg-secondary">
        <section class="section">
          <div class="section-header bg-LIGHT">
            <h1>Edit Kelas <?php echo $data['nama_kelas']; ?></h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="kelas.php">Data Kelas</a></div>
              <div class="breadcrumb-item">Edit Kelas</div>
            </div>
          </div>
          <div class="row">
              <div class="col-12">
                <div class="card bg-light">
                  <div class="card-header">
                    <h4>SILAHKAN EDIT KELAS DISINI</h4>
                  </div>
                  <div class="card-body">
                    <div class="row mt-4">
                      <div class="col-12 col-lg-8 offset-lg-2">
                        <div class="wizard-steps">
                          <div class="wizard-step wizard-step-active">
                            <div class="wizard-step-icon">
                              <i class="fas fa-school"></i>
                            </div>
                    <form class="wizard-content mt-2" method="post" action="proses_editkelas.php">
                      <div class="wizard-pane">
                        <input name="id" value="<?php echo $data['id_kelas']; ?>"  hidden />
                        <div class="form-group row align-items-center">
                          <label class="col-md-4 text-md-right text-left">Nama Kelas</label>
                          <div class="col-lg-4 col-md-6">
                            <input type="text" name="nama_kelas" value="<?php echo $data['nama_kelas']; ?>" required=""/>
                          </div>
                        </div>
                        <div class="form-group row align-items-center">
                          <label class="col-md-4 text-md-right text-left">Kompetensi_Keahlian</label>
                          <div class="col-lg-4 col-md-6">
                              <input type="text" name="kompetensi_keahlian" value="<?php echo $data['kompetensi_keahlian']; ?>" required=""/>
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