<?php
if(isset($_GET['id'])) {
    include_once "koneksi.php";
    $id = $_GET['id'];

    $sql = "DELETE FROM siswa WHERE id='$id'";
    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        header('Location: index.php?m=siswa');
    } else {
        include 'index.php?m=siswa';
        echo '<script language="JavaScript">';
        echo 'alert("Data gagal dihapus")';
        echo '<script>';
    }
} else {
    echo '<script>window.history.back()</script>';
}