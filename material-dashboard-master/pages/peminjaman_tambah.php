<div class="card">
    <div class="card-body">
    <div class="row">
        <div class="col-12">
        <form method="post">

        
        <?php

            if(isset($_POST['submit'])) {
                $buku_id = $_POST['buku_id'];
                $user_id = $_SESSION['user']['user_id'];
                $tanggal_peminjaman = $_POST['tanggal_peminjaman'];
                $tanggal_pengembalian = $_POST['tanggal_pengembalian'];
                $status_peminjaman = $_POST['status_peminjaman'];
                $query = mysqli_query($koneksi, "INSERT INTO peminjaman(buku_id,user_id,tanggal_peminjaman,tanggal_pengembalian,status_peminjaman) values ('$buku_id','$user_id','$tanggal_peminjaman','$tanggal_pengembalian','$status_peminjaman') ");
                
                if($query) {
                    echo '<script>alert("Tambah Data Berhasil.");</script>';
                }else{
                    echo '<script>alert("Tambah Data Gagal.");</script>';
                }
            }
        ?>

            <div class="row">
                <div class="col-md-2">Buku</div>
                <div class="col-md-8">
                    <select name="buku_id" class="w-100">
                    <?php
                    $buk = mysqli_query($koneksi, "SELECT*FROM buku");
                    while($buku = mysqli_fetch_array($buk)) {
                        ?>
                        <option value="<?php echo $buku ['buku_id']; ?>"><?php echo $buku ['judul']; ?></option>
                        <?php
                    }
                    ?>  

                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">Tanggal Peminjaman</div>
                <div class="col-md-8"><input type="date" class="w-100" name="tanggal_peminjaman"></div>
            </div>
            <div class="row">
                <div class="col-md-2">Tanggal Pengembalian</div>
                <div class="col-md-8"><input type="date" name="tanggal_pengembalian" class="w-100">
            </div>
            <div class="row">
                <div class="col-md-2">Status Peminjaman</div>
                <div class="col-md-8 ms-1"style='width: 1066px;'>
                <select name="status_peminjaman" class="w-100"  >
                <option value="Terpinjam">Terpinjam</option>
                <option value="Dikembalikan">Dikembalikan</option>
                </select>
                </div>
                </div>
            <br>
            <div class="row mt-3">
            <div class="col-md-2"></div>
            <div class="col-md-8">
            <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
            <a href="?page=peminjaman" class="btn btn-danger">Kembali</a>
            </div>
            </div>
        </form>
      </div>
    </div>
</div>
      