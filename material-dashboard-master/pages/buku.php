
<div class="row">
        <div class="col-12">
          <a href="?page=buku_tambah" class="btn btn-primary ms-3">+ Tambah Data</a>
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Buku</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th>No</th> 
                      <th>Katagori</th> 
                      <th>Judul</th>
                      <th>Penulis</th>
                      <th>Penerbit</th>
                      <th>Tahun Terbit</th>
                      <th>Aksi</th>
                    </tr>
                    <?php
                    $i = 1;
                    $query = mysqli_query($koneksi, "SELECT*FROM buku ");
                    while($data = mysqli_fetch_array($query)) {
                      ?> 
                      <tr>
                        <td> <div class="ps-4"><?php echo $i++; ?></td></div>
                        <?php
                        $id_buku = $data['buku_id'];
                        $kategori_query = mysqli_query($koneksi, "SELECT * FROM katagoribuku_relasi INNER JOIN katagori_buku ON katagoribuku_relasi.katagori_id=katagori_buku.katagori_id WHERE buku_id='$id_buku' ");
                        $katagori = mysqli_fetch_array($kategori_query);
                        ?>
                        <td><div class="ps-4"><?php echo (empty($katagori['nama_katagori']) ? '' : $katagori['nama_katagori']); ?></td></div>
                        <td><div class="ps-4"><?php echo $data['judul']; ?></td></div>
                        <td><div class="ps-4"><?php echo $data['penulis']; ?></td></div>
                        <td><div class="ps-4"><?php echo $data['penerbit']; ?></td></div>
                        <td><div class="ps-4"><?php echo $data['tahun_terbit']; ?></td></div>
                        <td><div class="ps-2">
                          <a href="?page=buku_ubah&id=<?php echo $data['buku_id']; ?>" class="btn btn-info" >Ubah</a>
                          <a onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?');" href="?page=buku_hapus&id=<?php echo $data['buku_id']; ?>" class="btn btn-danger" >Hapus</a>
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
      