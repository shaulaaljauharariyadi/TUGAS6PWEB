<!DOCTYPE html>
<html>

<head>
    <title>Pendaftaran Siswa Baru</title>
</head>

<body>
    <header>
        <h1>Pendaftaran Mahasiswa Baru</h1>
        <h3>Universitas ABCD</h3>
        <style>
            body {
                background-color: lightblue;
            }
        </style>
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="form-daftar.php">Daftar Baru</a></li>
            <li><a href="list-siswa.php">Pendaftar</a></li>
        </ul>
    </nav>
    <?php if (isset($_GET['status'])): ?>
    <p>
        <?php
        if ($_GET['status'] == 'sukses') {
            echo "Pendaftaran siswa baru berhasil!";
        } else {
            echo "Pendaftaran gagal!";
        }
        ?>
    </p>
    <?php endif; ?>

</body>

</html>