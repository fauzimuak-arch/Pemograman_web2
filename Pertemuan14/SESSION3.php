<?php
/****************************************************
Halaman ini merupakan halaman logout, dimana kita menghapus session yang ada.
*****************************************************/
session_start();

if (isset($_SESSION['login'])) {
    // Menghapus semua variabel session
    session_unset();
    
    // Menghancurkan session yang tersimpan di server
    session_destroy();

    echo "<h1>Anda sudah berhasil LOGOUT</h1>";
    echo "<h2>Klik <a href='session1.php'>di sini</a> untuk LOGIN kembali</h2>";
    echo "<h2>Anda sekarang tidak bisa masuk ke halaman <a href='session2.php'>SESSION2.php</a> lagi</h2>";
} else {
    // Jika user mengakses halaman ini tanpa login sebelumnya
    header("Location: SESSION1.php");
    exit();
}
?>