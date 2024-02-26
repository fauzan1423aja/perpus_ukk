<div class="row">
        <div class="col-12">
          <a href="cetak.php" target="_blank" class="btn btn-primary ms-3"><i class="fa fa-print"></i> Print Data</a>
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Laporan Peminjaman
                  <a class="btn btn-info btn-sm me-3" target="_blank" href="cetak.php?print=terpinjam" style="float: right;">Print Terpinjam</a>
                  <a class="btn btn-info btn-sm me-3" target="_blank" href="cetak.php?print=dikembalikan" style="float: right;">Print Dikembalikan</a>
                </h6>
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
                    </tr>
                    <?php
                    $i = 1;
                    $query = mysqli_query($koneksi, "SELECT*FROM Peminjaman LEFT JOIN user on user.user_id = peminjaman.user_id LEFT JOIN buku ON buku.buku_id = peminjaman.buku_id");
                    while($data = mysqli_fetch_array($query)) {
                      ?> 
                      <tr>
                        <td> <div class="ps-4"><?php echo $i++; ?></td></div>
                        <td><div class="ps-4"><?php echo $data['nama_lengkap']; ?></td></div>
                        <td><div class="ps-4"><?php echo $data['judul']; ?></td></div>
                        <td><div class="ps-4"><?php echo $data['tanggal_peminjaman']; ?></td></div>
                        <td><div class="ps-4"><?php echo $data['tanggal_pengembalian']; ?></td></div>
                        <td><div class="ps-4"><?php echo $data['status_peminjaman']; ?></td></div>
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
      