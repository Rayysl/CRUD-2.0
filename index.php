<!DOCTYPE html>
<html>
<head>
    <title>Form zakat</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
</head>
<body>

<h1>Permintaan Zakat</h1>
<!-- Form Anda di sini -->




<!-- Form untuk memasukkan data ke tabel nama_tabel_user -->
<!-- Form untuk memasukkan data ke tabelpermintaanzakat -->
<form action="proses_permintaanzakat.php" method="POST" class="custom-form">
    <label for="user_id">Pilih Pengguna:</label>
    <select id="user_id" name="user_id" required>
        <!-- Pilihan diambil dari data tabel Kecamatan -->
        <?php
            // Ambil data kecamatan dari database dan buat option untuk setiap kecamatan
            // Misalnya, menggunakan PHP dan MySQLi
            include("koneksi.php");
            $result = $conn->query("SELECT id, nama FROM nama_tabel_user");

            while ($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['nama']."</option>";
            }

            $conn->close();
        ?>
    </select><br>
    
    <label for="muzakki_id">Pilih Muzakki:</label>
    <select id="muzakki_id" name="muzakki_id" required>
        <!-- Pilihan diambil dari data tabel Kecamatan -->
        <?php
            // Ambil data kecamatan dari database dan buat option untuk setiap kecamatan
            // Misalnya, menggunakan PHP dan MySQLi
            include("koneksi.php");
            $result = $conn->query("SELECT id, nama FROM nama_tabel_muzakki");

            while ($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['nama']."</option>";
            }

            $conn->close();
        ?>
    </select><br>

    <label for="keterangan">Keterangan:</label>
    <input type="text" id="keterangan" name="keterangan">

    <label for="no_nota">No. Nota:</label>
    <input type="text" id="no_nota" name="no_nota">

    <label for="datetime">Tanggal Permintaan:</label>
    <input type="date" id="datetime" name="datetime">


    <!-- Form untuk memasukkan data ke tabel nama_tabel_user -->
    <div class="sub-form">
        <h3>Tambah Pengguna</h3>
        <label for="nama_user">Nama Pengguna:</label>
        <input type="text" id="nama_user" name="nama_user">
        
        <label for="email_user">Email Pengguna:</label>
        <input type="text" id="email_user" name="email_user">
    </div>

    <!-- Form untuk memasukkan data ke tabel nama_tabel_muzakki -->
    <div class="sub-form">
        <h3>Tambah Muzakki</h3>
        <label for="nama_muzakki">Nama Muzakki:</label>
        <input type="text" id="nama_muzakki" name="nama_muzakki">
        
        <label for="alamat_muzakki">Alamat Muzakki:</label>
        <input type="text" id="alamat_muzakki" name="alamat_muzakki">
    </div>

    <input type="submit" value="Tambah Permintaan Zakat">
    <a href="lihat_data.php" class="lihat-data-button">Cek</a>
</form>


</body>
</html>
