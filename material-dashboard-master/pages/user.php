
<div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">User</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th>No</th> 
                      <th>Username</th> 
                      <th>Email</th>
                      <th>Nama Lengkap</th>
                      <th>Alamat</th>
                      <th>Role</th>
                      <th <?= ($_SESSION['user']['role'] == 'petugas' ? 'hidden' : '') ?> >Aksi</th>
                    </tr>
                  </thead>
                    <?php
                    $i = 1;
                    $query = mysqli_query($koneksi, "SELECT*FROM user ");
                    while($data = mysqli_fetch_array($query)) {
                      ?> 
                        <tr>
                        <td> <div class="ps-4"><?php echo $i++; ?></td></div>
                        <td><div class="ps-4"><?php echo $data['username']; ?></td></div>
                        <td><div class="ps-4"><?php echo $data['email']; ?></td></div>
                        <td><div class="ps-4"><?php echo $data['nama_lengkap']; ?></td></div>
                        <td><div class="ps-4"><?php echo $data['alamat']; ?></td></div>
                        <td><div class="ps-4"><?php echo $data['role']; ?></td></div>
                        <td><div class="ps-2">
                          <a href="?page=user_ubah&&id=<?php echo $data['user_id']; ?>" class="btn btn-info" <?= ($_SESSION['user']['role'] == 'petugas' ? 'hidden' : '') ?>>Ubah</a>
                        <?php
                        }
                        ?>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      