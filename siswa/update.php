<?php
if(isset($_POST['update'])) {
    include_once "koneksi.php";
    $id           = $_POST['id'];
    $nama_siswa = $_POST['nama_siswa'];
    $kapasitas    = $_POST['kapasitas'];
    $terisi       = $_POST['terisi'];

    $sql = "UPDATE siswa SET nama_siswa='$nama_siswa', kapasitas='$kapasitas', terisi='$terisi' WHERE id='$id'";
    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        // var_dump($sql);
        header('Location: index.php?m=siswa');
    } else {
        include 'index.php?m=siswa';
        echo '<script language="JavaScript">';
        echo 'alert("Data gagal diupdate")';
        echo '<script>';
    }
} else {
    echo '<script>window.history.back()</script>';
}