<h2 align="center">Laporan Peminjaman Buku</h2>
<table border="1" cellspacing="0" cellpadding="5" width="100%">
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
        include "koneksi.php";
        $i = 1;
        if (isset($_GET['print'])) {
            if ($_GET['print'] == 'terpinjam') {
                $query = mysqli_query($koneksi, "SELECT*FROM Peminjaman LEFT JOIN user on user.user_id = peminjaman.user_id LEFT JOIN buku ON buku.buku_id = peminjaman.buku_id WHERE status_peminjaman='terpinjam'");
            } elseif ($_GET['print'] == 'dikembalikan') {
                $query = mysqli_query($koneksi, "SELECT*FROM Peminjaman LEFT JOIN user on user.user_id = peminjaman.user_id LEFT JOIN buku ON buku.buku_id = peminjaman.buku_id WHERE status_peminjaman='dikembalikan'");
            } else {
                $query = mysqli_query($koneksi, "SELECT*FROM Peminjaman LEFT JOIN user on user.user_id = peminjaman.user_id LEFT JOIN buku ON buku.buku_id = peminjaman.buku_id");
            }
        } else {
            $query = mysqli_query($koneksi, "SELECT*FROM Peminjaman LEFT JOIN user on user.user_id = peminjaman.user_id LEFT JOIN buku ON buku.buku_id = peminjaman.buku_id");
        }
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
        <script>
            window.print();
            setTimeout( function() {
                window.close();
            }, 100);
        </script>