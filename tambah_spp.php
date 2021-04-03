<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Tambah SPP</title>
   
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
            <h1>Tambah SPP</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="spp.php">Data SPP</a></div>
              <div class="breadcrumb-item">Tambah SPP</div>
            </div>
          </div>

          <div class="section-body">
            
              <div class="col-12">
                <div class="card bg-light">
                  <div class="card-header bg-light">
                    <h4>SILAHKAN TAMBAH SPP DISINI</h4>
                  </div>
                  <div class="card-body">
                    <div class="row mt-4">
                      <div class="col-12 col-lg-8 offset-lg-2">
                        <div class="wizard-steps">
                          <div class="wizard-step wizard-step-active">
                            <div class="wizard-step-icon">
                              <i class="fas fa-money-check-alt"></i>
                            </div>

                    <form class="wizard-content mt-2" method="post" action="proses_tambahspp.php">
                      <div class="wizard-pane">
                        <div class="form-group row align-items-center">
                          <label class="col-md-4 text-md-right text-left">Tahun</label>
                          <div class="col-lg-4 col-md-6">
                            <input type="text" name="tahun" class="form-control">
                          </div>
                        </div>
                        <div class="form-group row align-items-center">
                          <label class="col-md-4 text-md-right text-left">Nominal</label>
                          <div class="col-lg-4 col-md-6">
                            <input type="text" name="nominal" class="form-control">
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-md-4"></div>
                          <div class="col-lg-4 col-md-6 text-right">
                            <button type="submit" class="btn btn-icon icon-right btn-primary">SELESAI <i class="fas fa-arrow-right"></i></button>
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