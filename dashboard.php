<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  include ('tampilan/header.php');
  include ('tampilan/sidebar.php');
  include ('tampilan/footer.php');
?>

 <!-- Main Content -->
      <div class="bg-secondary main-content ">
        <section class="section">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-stats bg-secondary">
                  <div class="card-stats-title bg-secondary">DATA KELAS -
                    <div class="dropdown d-inline bg-secondary">
                      <a class="font-weight-600 dropdown-toggle" data-toggle="dropdown" href="#" id="orders-month">XII RPL 2</a>
                      <ul class="dropdown-menu dropdown-menu-sm">
                        <li class="dropdown-title">Pilih Kelas</li>
                        <li><a href="kelas.php" class="dropdown-item">XII RPL 1</a></li>
                        <li><a href="kelas.php" class="dropdown-item active">XII RPL 2</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-stats-items">
                    <div class="card-stats-item">
                      <div class="card-stats-item-count">24</div>
                      <div class="card-stats-item-label">Siswa</div>
                    </div>
                    <div class="card-stats-item">
                      <div class="card-stats-item-count">12</div>
                      <div class="card-stats-item-label">B Lunas</div>
                    </div>
                    <div class="card-stats-item">
                      <div class="card-stats-item-count">23</div>
                      <div class="card-stats-item-label">Lunas</div>
                    </div>
                  </div>
                </div>
                <div class="card-icon shadow-secondary bg-warning">
                  <i class="fas fa-users"></i>
                </div>
                <div class="card-wrap bg-secondary">
                  <div class="card-header bg-secondary">
                    <h4>Total</h4>
                  </div>
                  <div class="card-body bg-secondary">
                    59
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-chart">
                  <canvas id="balance-chart" height="80"></canvas>
                </div>
                <div class="card-icon shadow-primary bg-warning">
                  <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="card-wrap bg-secondary">
                  <div class="card-header bg-secondary">
                    <h4>Pendapatan</h4>
                  </div>
                  <div class="card-body bg-secondary">
                    Rp 120.000
                  </div>
                </div>
              </div>
            </div>
      <footer class="main-footer">
        <div class="footer-left">
        </div>
        </div>
      </footer>
    </div>
  </div>
</body>
