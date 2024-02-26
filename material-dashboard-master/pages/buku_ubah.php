<div class="card">
    <div class="card-body">
    <div class="row">
        <div class="col-12">
        <form method="post">

        
        <?php
            $id = $_GET['id'];
            if(isset($_POST['submit'])) {
                $katagori_id = $_POST['katagori_id'];
                $judul = $_POST['judul'];
                $penulis = $_POST['penulis'];
                $penerbit = $_POST['penerbit'];
                $tahun_terbit = $_POST['tahun_terbit'];
                $query = mysqli_query($koneksi, "UPDATE buku SET judul='$judul', penulis='$penulis', penerbit='$penerbit', tahun_terbit='$tahun_terbit'  WHERE buku_id=$id");
                
                if($query) {
                    $katagori_cek_query = mysqli_query($koneksi, "SELECT buku_id FROM buku WHERE judul='$judul' AND penulis='$penulis' ");
                    $katagori_cek = mysqli_fetch_array($katagori_cek_query);
                    $katagori_id_buku = $katagori_cek['buku_id'];
                    $katagori_hapus = mysqli_query($koneksi, "DELETE FROM katagoribuku_relasi WHERE buku_id='$id'");
                    $kategori = mysqli_query($koneksi, "INSERT INTO katagoribuku_relasi(buku_id,katagori_id) VALUES ('$katagori_id_buku','$katagori_id')");
                    echo '<script>alert("Ubah Data Berhasil.");</script>';
                }else{
                    echo '<script>alert("Ubah  Data Gagal.");</script>';
                }
            }
            $query = mysqli_query($koneksi, "SELECT*FROM buku WHERE buku_id='$id'");
            $data = mysqli_fetch_array($query);

            $katagori_selected_query = mysqli_query($koneksi, "SELECT * FROM katagoribuku_relasi WHERE buku_id='$id'");
            $katagori_selected = mysqli_fetch_array($katagori_selected_query);
        ?>

        <div class="row">
            <div class="col-md-2">Kategori</div>
            <div class="col-md-8">
                <select name="katagori_id" class="w-100">
                    <?php
                    $kat = mysqli_query($koneksi, "SELECT * FROM katagori_buku");
                    $selectedCategoryId = $katagori_selected['katagori_id']; // Assuming this is the category ID of the book

                    while ($katagori = mysqli_fetch_array($kat)) {
                        $selected = ($katagori['katagori_id'] == $selectedCategoryId) ? 'selected' : '';
                    ?>
                        <option value="<?php echo $katagori['katagori_id']; ?>" <?php echo $selected; ?>>
                            <?php echo $katagori['nama_katagori']; ?>
                        </option>
                    <?php
                    }
                    ?>
                </select>
            </div>
        </div>
            <div class="row">
                <div class="col-md-2">Judul</div>
                <div class="col-md-8"><input type="text" class="w-100" value="<?php echo $data['judul']; ?>" name="judul"></div>
            </div>
            <div class="row">
                <div class="col-md-2">Penulis</div>
                <div class="col-md-8"><input type="text" class="w-100" value="<?php echo $data['penulis']; ?>" name="penulis"></div>
            </div>
            <div class="row">
                <div class="col-md-2">Penerbit</div>
                <div class="col-md-8"><input type="text" class="w-100" value="<?php echo $data['penerbit']; ?>" name="penerbit"></div>
            </div>
            <div class="row">
                <div class="col-md-2">Tahun Terbit</div>
                <div class="col-md-8"><input type="number" class="w-100" value="<?php echo $data['tahun_terbit']; ?>" name="tahun_terbit"></div>
            </div>
            <br>
            <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
            <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
            <a href="?page=buku" class="btn btn-danger">Kembali</a>
            </div>
            </div>
        </form>
      </div>
    </div>
</div>
      