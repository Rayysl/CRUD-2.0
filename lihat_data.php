<!DOCTYPE html>
<html>
<head>
    <title>Lihat Data Zakat</title>
    <link rel="stylesheet" type="text/css" href="style_lihat_data.css">
</head>
<body>

<h1>Data Permintaan Zakat</h1>

<?php
// Menggunakan koneksi.php
include 'koneksi.php';

// Query untuk mengambil data dari tabelpermintaanzakat
$sql = "SELECT * FROM tabelpermintaanzakat";
$result = $conn->query($sql);

if (mysqli_num_rows($result) > 0) {
    ?>
    <table>
        <thead>
            <tr>
                <th>User ID</th>
                <th>Muzakki ID</th>
                <th>datetime</th>
                <th>keterangan</th>
                <th>No_nota</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Tampilkan data dalam tabel
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['user_id'] . "</td>";
                echo "<td>" . $row['muzakki_id'] . "</td>";
                echo "<td>" . $row['datetime'] . "</td>";
                echo "<td>" . $row['keterangan'] . "</td>";
                echo "<td>" . $row['no_nota'] . "</td>";
                echo "<td>";
                echo "<a href='edit_data.php?id=" . $row['id'] . "'>Edit</a> | ";
                echo "<a href='hapus_data.php?id=" . $row['id'] . "'>Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <?php
} else {
    echo "Tidak ada data.";
}

?>

<a href="index.php" class="kembali-button">Kembali ke Form</a>

</body>
</html>
