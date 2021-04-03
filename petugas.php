<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>DATA PETUGAS</title>
    
  </head>
<body>

	<?php

  include ('tampilan/header.php');
  include ('tampilan/sidebar.php');
  include ('tampilan/footer.php');
?>

     
      
   <!-- Main Content -->
      <div class="main-content bg-secondary">
        <section class="section">
          <div class="section-header bg-light">
            <h1>DATA PETUGAS</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item">DATA PETUGAS</div>
            </div>
          </div>
            <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
          <div>
       
        <?php
        $kata_kunci="";
        if (isset($_POST['kata_kunci'])) {
            $kata_kunci=$_POST['kata_kunci'];
        }
        ?>
        <input type="text" name="kata_kunci" value="<?php echo $kata_kunci;?>" class="form-control"  placeholder="masukan kata kunci" required/>
        <button type="submit">Cari</button>
        </div>
            <div class="row">
              <div class="col-12">
                <div class="card bg-secondary text-dark">
                  <div class="card-header bg-light">
                    <h4>LIST PETUGAS</h4>
                    <div class="card-header-form">
                      <form>
                          <div class="input-group-btn">
                            <a href="tambah_petugas.php" class="btn btn-secondary"><i class="fas fa-plus"></i></a>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped">
                       <thead>
                          <tr>
                          <th>NO</th>
                          <th>username</th>
                          <th>password</th>
                          <th>nama petugas</th>
                          <th>Level</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                         <tbody>
                      <?php
                      // jalankan query untuk menampilkan semua data diurutkan berdasarkan id

                        if (isset($_POST['kata_kunci'])) {
                            $kata_kunci=trim($_POST['kata_kunci']);
                            $query="select * from petugas where id_petugas like '%".$kata_kunci."%' or username like '%".$kata_kunci."%' or password like '%".$kata_kunci."%' or nama_petugas like '%".$kata_kunci."%' or level like '%".$kata_kunci."%' order by username asc";

                        }else {
                            $query="select * from petugas order by username asc";
                        }

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
                        <tr>  
                          <td><?php echo $no; ?></td>
                          <td><?php echo $row['username']; ?></td>
                          <td><?php echo substr($row['password'], 0, 20); ?></td> 
                          <td><?php echo substr($row['nama_petugas'], 0, 20); ?></td>
                          <td><?php echo substr($row['level'], 0, 20); ?></td>    
                          <td>
                          <a href="edit_petugas.php?id=<?php echo $row['id_petugas']; ?>"class="btn btn-primary"><i class="fas fa-edit"></i></a>
                          <a href="proses_hapuspetugas.php?id=<?php echo $row['id_petugas']; ?>" class="btn btn-danger" onClick="return confirm('Anda yakin akan menghapus data ini?')"><i class="fas fa-trash"></i></a>
                          </td>
                        </tr>
                         <?php
                           $no++; //untuk nomor urut terus bertambah 1
                           }
                         ?>
                         </tbody>
                      </table>
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
</body>
</html>