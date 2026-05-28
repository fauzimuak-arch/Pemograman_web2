<?php
/****************************************************
Halaman ini merupakan halaman contoh penciptaan session. 
Perintah session_start() harus ditaruh di perintah pertama tanpa spasi di depannya. 
*****************************************************/
session_start();

if (isset($_POST['Login'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    // PERBAIKAN: Menggunakan == untuk perbandingan, bukan = untuk pengisian nilai
    if ($user == "rahadian" && $pass == "123") {
        // Menciptakan session
        $_SESSION['login'] = $user;
        
        // Menampilkan pesan sukses
        echo "<h1>Anda berhasil LOGIN</h1>";
        echo "<h2>Klik <a href='session2.php'>di sini (session2.php)</a> untuk menuju ke halaman pemeriksaan session</h2>";
    } else {
        // Pesan jika login gagal
        echo "<h1>Login Gagal!</h1>";
        echo "<p>Username atau Password salah.</p>";
        echo "<a href=''>Kembali ke Login</a>";
    }
} else {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login here...</title>
</head>
<body>
    <form action="" method="post">
        <h2>Login Here...</h2>
        Username : <input type="text" name="user" required><br>
        Password : <input type="password" name="pass" required><br>
        <input type="submit" name="Login" value="Log In">
    </form>
</body>
</html>
<?php 
} 
?>