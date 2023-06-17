<!DOCTYPE html>
<html>
<head>
    <title>Form Registrasi</title>
</head>
<body>

<h2>Form Registrasi</h2>

<form method="POST" action="proses_registrasi.php">
    <label for="nama">Nama:</label>
    <input type="text" name="nama" id="nama" required><br><br>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required><br><br>

    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required><br><br>

    <input type="submit" value="Daftar">
</form>

</body>
</html>
