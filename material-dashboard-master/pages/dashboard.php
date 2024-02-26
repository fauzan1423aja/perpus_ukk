<div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">weekend</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">  
                Jumlah Buku</p>
                <h4 class="mb-0">
                <?php
                    echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM buku"));
                  ?>  
                </h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">person</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">
                Jumlah katagori</p>
                <h4 class="mb-0">
                <?php
                    echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM katagori_buku"));
                  ?>  
                </h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">person</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">  
                Jumlah Ulasan</p>
                <h4 class="mb-0"><?php
                    echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM ulasan_buku"));
                  ?>  </h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">weekend</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">
                Jumlah User</p>
                <h4 class="mb-0">
                <?php
                    echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM user"));
                  ?>  
                </h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
            </div>
          </div>
        </div>
      </div>
      <br>
      <div class="card">
        <div class="card-body">
          <table class="table table-bordered">
            <tr>
              <td width="200">Nama</td>
              <td with="1">:</td>
              <td><?php echo $_SESSION['user']['nama_lengkap']; ?></td>
            </tr>
            <tr>
              <td width="200">Role</td>
              <td width="1">:</td>
              <td><?php echo $_SESSION['user']['role']; ?></td>
            </tr>
            <tr>
              <td width="200">Tanggal Login</td>
              <td width="1">:</td>
              <td><?php echo date('d-m-y');?></td>
            </tr>
          </table>
        </div>
      </div>