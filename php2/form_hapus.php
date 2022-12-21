<?php

include("config.php");

if (isset($_GET['nis'])) {

    // ambil nis dari query string
    $nis = $_GET['nis'];

    // buat query hapus
    $sql = "DELETE FROM data_siswa WHERE nis=$nis";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if ($query) {
        header('Location: list-siswa.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>