<?php
include 'koneksi.php'; // Menggunakan file koneksi.php

// Periksa apakah data telah dikirim melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tangkap data yang dikirim melalui formulir
    $id = $_POST['id'];
    $user_id = $_POST['user_id'];
    $muzakki_id = $_POST['muzakki_id'];
    $datetime = $_POST['datetime'];
    $keterangan = $_POST['keterangan'];
    $no_nota = $_POST['no_nota'];

    // Lakukan pengecekan apakah data yang diperlukan sudah terisi
    if (!empty($id) && !empty($user_id) && !empty($muzakki_id) && !empty($datetime) && !empty($keterangan) && !empty($no_nota)) {
        // Lakukan operasi UPDATE ke dalam tabel tabelpermintaanzakat
        $sql = "UPDATE tabelpermintaanzakat SET user_id='$user_id', muzakki_id='$muzakki_id', datetime='$datetime', keterangan='$keterangan', no_nota='$no_nota' WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            echo "Data berhasil diperbarui.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Semua field harus diisi.";
    }
    $conn->close();
}
?>

<a href="lihat_data.php" class="kembali-button">Kembali ke Lihat Data</a>
