<div class="card">
    <div class="card-body">
    <div class="row">
        <div class="col-12">
        <form method="post">

        
        <?php

            if(isset($_POST['submit'])) {
                $katagori_id = $_POST['katagori_id'];
                $judul = $_POST['judul'];
                $penulis = $_POST['penulis'];
                $penerbit = $_POST['penerbit'];
                $tahun_terbit = $_POST['tahun_terbit'];
                $query = mysqli_query($koneksi, "INSERT INTO buku(judul,penulis,penerbit,tahun_terbit) value('$judul','$penulis','$penerbit','$tahun_terbit')");
                
                if($query) {
                    $katagori_cek_query = mysqli_query($koneksi, "SELECT buku_id FROM buku WHERE judul='$judul' AND penulis='$penulis' ");
                    $katagori_cek = mysqli_fetch_array($katagori_cek_query);
                    $katagori_id_buku = $katagori_cek['buku_id'];
                    $kategori = mysqli_query($koneksi, "INSERT INTO katagoribuku_relasi(buku_id,katagori_id) VALUES ('$katagori_id_buku','$katagori_id')");
                    echo '<script>alert("Tambah Data Berhasil.");</script>';
                }else{
                    echo '<script>alert("Tambah Data Gagal.");</script>';
                }
            }
        ?>

            <div class="row">
                <div class="col-md-2">Katagori</div>
                <div class="col-md-8">
                    <select name="katagori_id" class="w-100">
                    <?php
                    $kat = mysqli_query($koneksi, "SELECT*FROM katagori_buku");
                    while($katagori = mysqli_fetch_array($kat)) {
                        ?>
                        <option value="<?php echo $katagori ['katagori_id']; ?>"><?php echo $katagori ['nama_katagori']; ?></option>
                        <?php
                    }
                    ?>  

                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">Judul</div>
                <div class="col-md-8"><input type="text" class="w-100" name="judul"></div>
            </div>
            <div class="row">
                <div class="col-md-2">Penulis</div>
                <div class="col-md-8"><input type="text" class="w-100" name="penulis"></div>
            </div>
            <div class="row">
                <div class="col-md-2">Penerbit</div>
                <div class="col-md-8"><input type="text" class="w-100" name="penerbit"></div>
            </div>
            <div class="row">
                <div class="col-md-2">Tahun Terbit</div>
                <div class="col-md-8"><input type="number" class="w-100" name="tahun_terbit"></div>
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
      