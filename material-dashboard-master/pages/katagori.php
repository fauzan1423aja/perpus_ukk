
<div class="row">
        <div class="col-12">
          <a href="?page=katagori_tambah" class="btn btn-primary ms-3">+ Tambah Data</a>
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Katagori Buku</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Katagori</th>
                      <th>Aksi</th>
                    </tr>
                    <?php
                    $i = 1;
                    $query = mysqli_query($koneksi, "SELECT*FROM katagori_buku");
                    while($data = mysqli_fetch_array($query)) {
                      ?> 
                      <tr>
                        <td> <div class="ps-4"><?php echo $i++; ?></td></div>
                        <td><div class="ps-4"><?php echo $data['nama_katagori']; ?></td></div>
                        <td><div class="ps-2">
                          <a href="?page=katagori_ubah&&id=<?php echo $data['katagori_id']; ?>" class="btn btn-info" >Ubah</a>
                          <a onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?');" href="?page=katagori_hapus&&id=<?php echo $data['katagori_id']; ?>" class="btn btn-danger" >Hapus</a>
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
      