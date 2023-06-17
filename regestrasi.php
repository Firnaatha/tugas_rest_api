<?php
// Memeriksa apakah ada data yang dikirim melalui metode POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mengambil nilai-nilai yang dikirim melalui form
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Menyimpan data ke database atau melakukan tindakan lainnya
    // ...

    // Memberikan respons atau mengarahkan pengguna ke halaman lain
    // ...

    // Contoh respons sederhana:
    echo "Registrasi berhasil. Selamat datang, $nama!";
}
?>
