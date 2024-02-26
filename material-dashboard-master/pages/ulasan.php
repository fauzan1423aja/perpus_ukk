<div class="row">
        <div class="col-12">
          <a href="?page=ulasan_tambah" class="btn btn-primary ms-3" <?= ($_SESSION['user']['role'] == 'petugas' ? 'hidden' : '') ?> <?= ($_SESSION['user']['role'] == 'admin' ? 'hidden' : '') ?>>+ Tambah Data</a>
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Ulasan Buku</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>User</th>
                      <th>Buku</th>
                      <th>Ulasan</th>
                      <th>Ranting</th>
                      <th <?= ($_SESSION['user']['role'] == 'user' ? 'hidden' : '') ?>>Aksi</th>
                    </tr>
                    <?php
                    $i = 1;
                    $query = mysqli_query($koneksi, "SELECT*FROM ulasan_buku LEFT JOIN user on user.user_id = ulasan_buku.user_id LEFT JOIN buku ON buku.buku_id = ulasan_buku.buku_id");
                    while($data = mysqli_fetch_array($query)) {
                      ?> 
                      <tr>
                        <td> <div class="ps-4"><?php echo $i++; ?></td></div>
                        <td><div class="ps-4"><?php echo $data['nama_lengkap']; ?></td></div>
                        <td><div class="ps-4"><?php echo $data['judul']; ?></td></div>
                        <td><div class="ps-4"><?php echo $data['ulasan']; ?></td></div>
                        <td><div class="ps-4"><?php echo $data['rating']; ?></td></div>
                        <td><div class="ps-2">
                          <a <?= ($_SESSION['user']['role'] == 'user' ? 'hidden' : '') ?> onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?');" href="?page=ulasan_hapus&&id=<?php echo $data['ulasan_id']; ?>" class="btn btn-danger" >Hapus</a>
                          </div>
                        </td>
                      </tr>
                      <?php 
                    }
                    ?>
                  </thead>
                  
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      