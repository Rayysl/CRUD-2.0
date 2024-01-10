<!DOCTYPE html>
<html>
<head>
    <title>Hapus Data</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
include 'koneksi.php'; // Menggunakan file koneksi.php

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Lakukan query DELETE untuk menghapus data dengan ID yang diberikan
    $query = "DELETE FROM tabelpermintaanzakat WHERE id=$id";
    $result = $conn->query($query);

    if ($result) {
        echo "Data berhasil dihapus.";
    } else {
        echo "Gagal menghapus data: " . $conn->error;
    }
} else {
    echo "ID tidak valid.";
}
?>

<a href="lihat_data.php" class="kembali-button">Kembali ke Lihat Data</a>

</body>
</html>
