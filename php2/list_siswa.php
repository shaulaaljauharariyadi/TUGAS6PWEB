<?php include("config.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
</head>

<body>
    <header>
        <h3>Siswa yang sudah mendaftar</h3>
        <style>
            body {
                background-color: lightblue;
            }
        </style>
    </header>

    <nav>
        <a href="form_daftar.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
        <thead>
            <tr>
                <th>Nis</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Sekolah Asal</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $sql = "SELECT * FROM data_siswa";
            $query = mysqli_query($db, $sql);

            while ($siswa = mysqli_fetch_array($query)) {
                echo "<tr>";

                echo "<td>" . $siswa['nis'] . "</td>";
                echo "<td>" . $siswa['nama'] . "</td>";
                echo "<td>" . $siswa['alamat'] . "</td>";
                echo "<td>" . $siswa['jenis_kelamin'] . "</td>";
                echo "<td>" . $siswa['agama'] . "</td>";
                echo "<td>" . $siswa['sekolah_asal'] . "</td>";

                echo "<td>";
                echo "<a href='form_edit.php?nis=" . $siswa['nis'] . "'>Edit</a> | ";
                echo "<a href='form_hapus.php?nis=" . $siswa['nis'] . "'>Hapus</a>";
                echo "</td>";

                echo "</tr>";
            }
            ?>

        </tbody>
    </table>

    <p>Total:
        <?php echo mysqli_num_rows($query) ?>
    </p>

</body>

</html>