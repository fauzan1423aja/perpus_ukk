<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM katagori_buku WHERE katagori_id=$id");
?>
<script>

    alert("Hapus Data Berhasil");
    location.href = "index.php?page=katagori";

</script>