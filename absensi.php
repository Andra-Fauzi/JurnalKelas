<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>absensi</title>
    <link rel="stylesheet" href="assets/css/data.css">
</head>
<body>
    <div class="container">
        <div class="sidebar">
        <h1>jurnal kelas</h1>
        <div class="navigation">
            
            <a href="index.php">dashboard</a>
            <a href="absensi.php">absensi</a>
            <a href="jurnal.php">jurnal</a>
        </div>
    </div>
    <div class="content">
            <div class="authbar">
                <a href="#">Register</a>
                <a href="#">Login</a>
            </div>
            <div class="maincontent">
                <table >
                    <tr>
                        <td>id</td>
                        <td>Nama Guru</td>
                        <td>Kelas</td>
                        <td>Materi</td>
                        <td>Jumlah murid</td>
                        <td>Kehadiran</td>
                        <td>Aksi</td>
                    </tr>
                    <?php include "backend/absences_read.php"; ?>
                    <?php foreach($data as $row): ?>
                    <tr>
                        <td><?= $row["id"] ?></td>
                        <td><?= $row["nama_guru"] ?></td>
                        <td><?= $row["kelas"] ?></td>
                        <td><?= $row["materi"] ?></td>
                        <td><?= $row["jumlah_murid"] ?></td>
                        <td><?= $row["kehadiran"] ?></td>
                        <td><a href="backend/absences_delete.php?id=<?= $row['id']?>">Hapus</a> <br> <a href="form_absensi.php?id=<?= $row["id"] ?>">Edit</a></td>
                    </tr>
                    <?php endforeach?>
                </table>
                <a href="form_absensi.php" class="tambah">tambah data</a>
        </div>

        </div>
    </div>
    
    
</body>
</html>

