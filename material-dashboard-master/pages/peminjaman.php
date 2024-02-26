<div class="row">
        <div class="col-12">
          <a href="?page=peminjaman_tambah" class="btn btn-primary ms-3"><i class="fa fa-plus"></i> Tambah Peminjaman</a>
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Peminjaman Buku</h6>
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
                      <th>Tanggal Peminjaman</th>
                      <th>Tanggal Pengembalian</th>
                      <th>Status Peminjaman</th>
                      <th>Aksi</th>
                    </tr>
                    <?php
                    $i = 1;
                    $query = mysqli_query($koneksi, "SELECT*FROM Peminjaman LEFT JOIN user on user.user_id = peminjaman.user_id LEFT JOIN buku ON buku.buku_id = peminjaman.buku_id WHERE peminjaman.user_id=" . $_SESSION['user']['user_id']);
                    while($data = mysqli_fetch_array($query)) {
                      ?> 
                      <tr>
                        <td> <div class="ps-4"><?php echo $i++; ?></td></div>
                        <td><div class="ps-4"><?php echo $data['nama_lengkap']; ?></td></div>
                        <td><div class="ps-4"><?php echo $data['judul']; ?></td></div>
                        <td><div class="ps-4"><?php echo $data['tanggal_peminjaman']; ?></td></div>
                        <td><div class="ps-4"><?php echo $data['tanggal_pengembalian']; ?></td></div>
                        <td><div class="ps-4"><?php echo $data['status_peminjaman']; ?></td></div>
                        <td><div class="ps-2">
                            <?php
                            if($data['status_peminjaman'] != 'Dikembalikan') {
                            ?>
                          <a href="?page=peminjaman_ubah&&id=<?php echo $data['peminjaman_id']; ?>" class="btn btn-info" >Ubah</a>
                          <a onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?');" href="?page=Peminjaman_hapus&&id=<?php echo $data['peminjaman_id']; ?>" class="btn btn-danger" >Hapus</a>
                            <?php
                                }
                            ?>
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
      