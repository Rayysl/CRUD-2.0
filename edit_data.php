<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Zakat</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
include 'koneksi.php'; // Menggunakan file koneksi.php

// Periksa apakah ID telah diteruskan melalui URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Lakukan query untuk mengambil data dengan ID yang diberikan
    $query = "SELECT * FROM tabelpermintaanzakat WHERE id=$id";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        // Tampilkan form untuk mengedit data
        ?>
        <h1>Edit Data Permintaan Zakat</h1>
        <form action="update_data.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <label for="user_id">User ID:</label>
            <input type="text" id="user_id" name="user_id" value="<?php echo $row['user_id']; ?>">

            <label for="muzakki_id">Muzakki ID:</label>
            <input type="text" id="muzakki_id" name="muzakki_id" value="<?php echo $row['muzakki_id']; ?>">

            <label for="datetime">Tanggal Permintaan:</label>
            <input type="date" id="datetime" name="datetime" value="<?php echo $row['datetime']; ?>">

            <label for="keterangan">Keterangan:</label>
            <input type="text" id="keterangan" name="keterangan" value="<?php echo $row['keterangan']; ?>">

            <label for="no_nota">No. Nota:</label>
            <input type="text" id="no_nota" name="no_nota" value="<?php echo $row['no_nota']; ?>">

            <input type="submit" value="Simpan Perubahan">
        </form>
        <?php
    } else {
        echo "Tidak ada data dengan ID tersebut.";
    }
} else {
    echo "ID tidak valid.";
}
?>

<a href="lihat_data.php" class="kembali-button">Kembali ke Lihat Data</a>

</body>
</html>
