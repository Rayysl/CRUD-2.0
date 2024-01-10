<?php
include 'koneksi.php'; // Menggunakan file koneksi.php

// Cek apakah data telah dikirim melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tangkap data yang dikirim melalui formulir
    $user_id = $_POST['user_id'];
    $muzakki_id = $_POST['muzakki_id'];
    $keterangan = $_POST['keterangan'];
    $no_nota = $_POST['no_nota'];
    $nama_user = $_POST['nama_user'];
    $email_user = $_POST['email_user'];
    $nama_muzakki = $_POST['nama_muzakki'];
    $alamat_muzakki = $_POST['alamat_muzakki'];
    $datetime = $_POST['datetime'];

    // Lakukan pengecekan apakah data yang diperlukan sudah terisi
    if (!empty($user_id) && !empty($muzakki_id) && !empty($keterangan) && !empty($no_nota) && !empty($datetime)) {
        // Periksa apakah user_id ada di tabel nama_tabel_user
        $query_user = "SELECT * FROM nama_tabel_user WHERE id = '$user_id'";
        $result_user = $conn->query($query_user);

        // Periksa apakah muzakki_id ada di tabel nama_tabel_muzakki
        $query_muzakki = "SELECT * FROM nama_tabel_muzakki WHERE id = '$muzakki_id'";
        $result_muzakki = $conn->query($query_muzakki);

        // Lakukan operasi INSERT jika nilai user_id dan muzakki_id valid
        if ($result_user->num_rows > 0 && $result_muzakki->num_rows > 0) {
            $sql = "INSERT INTO tabelpermintaanzakat (user_id, muzakki_id, keterangan, no_nota, datetime) 
                      VALUES ('$user_id', '$muzakki_id', '$keterangan', '$no_nota', '$datetime')";
            $result_insert = $conn->query($sql);

            if ($result_insert === TRUE) {
                echo "Data sudah diterima.";
                echo '<br><a href="index.php">Kembali</a>'; // Tambahkan link kembali setelah pesan
            } else {
                echo "Gagal menerima data: " . $conn->error;
                echo '<br><a href="index.php">Kembali</a>'; // Tambahkan link kembali setelah pesan
            }
        } else {
            echo "User ID atau Muzakki ID tidak valid.";
            echo '<br><a href="index.php">Kembali</a>'; // Tambahkan link kembali setelah pesan
        }
    } else {
        echo "Semua field harus diisi.";
        echo '<br><a href="index.php">Kembali</a>'; // Tambahkan link kembali setelah pesan
    }
}
?>
