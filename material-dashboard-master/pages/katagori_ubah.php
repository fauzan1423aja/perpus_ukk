<div class="card">
    <div class="card-body">
    <div class="row">
        <div class="col-12">
        <form method="post">
        <?php
            
            $id = $_GET['id'];
            if(isset($_POST['submit'])) {
                $katagori = $_POST['katagori'];
                $query = mysqli_query($koneksi, "UPDATE katagori_buku set nama_katagori='$katagori' WHERE katagori_id=$id");
                
                if($query) {
                    echo '<script>alert("Tambah Data Berhasil.");</script>';
                }else{
                    echo '<script>alert("Tambah Data Gagal.");</script>';
                }
            }
            $query = mysqli_query($koneksi, "SELECT*FROM katagori_buku where katagori_id=$id");
            $data = mysqli_fetch_array($query);
        ?>

            <div class="row">
                <div class="col-md-2">Nama Katagori</div>
                <div class="col-md-8"><input type="text" class="w-100" value="<?php echo $data['nama_katagori']; ?>" name="katagori"></div>
            </div>
            <br>
            <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
            <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
            <a href="?page=katagori" class="btn btn-danger">Kembali</a>
            </div>
            </div>
        </form>
      </div>
    </div>
</div>
      