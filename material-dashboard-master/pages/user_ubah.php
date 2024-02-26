<div class="card">
    <div class="card-body">
    <div class="row">
        <div class="col-12">
        <form method="post">

        
        <?php
            $id = $_GET['id'];
            if(isset($_POST['submit'])) {
                $username = $_POST['username'];
                $email = $_POST['email'];
                $nama_lengkap = $_POST['nama_lengkap'];
                $alamat = $_POST['alamat'];
                $role = $_POST['role'];
                $query = mysqli_query($koneksi, "UPDATE user set username='$username', email='$email', nama_lengkap='$nama_lengkap' , alamat='$alamat' , role='$role' WHERE user_id=$id");
                
                if($query) {
                    echo '<script>alert("Ubah Data Berhasil.");</script>';
                }else{
                    echo '<script>alert("Ubah Data Gagal.");</script>';
                }
            }
            $query = mysqli_query($koneksi, "SELECT*FROM user WHERE user_id=$id");
            $data = mysqli_fetch_array($query);
        ?>

            <div class="row mb-3">
                <div class="col-md-2">Username</div>
                <div class="col-md-8"><input type="text" class="w-100" name="username" value="<?php echo $data['username'] ?>">    </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-2">Email</div>
                <div class="col-md-8"><input type="text" class="w-100" name="email" value="<?php echo $data['email'] ?>">    </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-2">Nama Lengkap</div>
                <div class="col-md-8"><input type="text" class="w-100" name="nama_lengkap" value="<?php echo $data['nama_lengkap'] ?>">    </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-2">Alamat</div>
                <div class="col-md-8"><input type="text" class="w-100" name="alamat" value="<?php echo $data['alamat'] ?>">  </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-2">Role</div>
                <div class="col-md-8"><input type="text" class="w-100" name="role" value="<?php echo $data['role'] ?>">  </div>
            </div>
            
            <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
            <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
            <a href="?page=user" class="btn btn-danger">Kembali</a>
            </div>
            </div>
        </form>
      </div>
    </div>
</div>
      