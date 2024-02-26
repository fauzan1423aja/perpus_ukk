<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM ulasan_buku WHERE ulasan_id='$id'");
?>
<script>

    alert("Hapus Data Berhasil");
    location.href = "index.php?page=ulasan";

</script>