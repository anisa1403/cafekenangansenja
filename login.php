<?php
// login.php
session_start();

// Data pengguna yang disimpan secara hard-coded (untuk keperluan contoh)
$username = "admin";
$password = "password123";

// Ambil data dari form
$formUsername = $_POST['username'];
$formPassword = $_POST['password'];

// Cek apakah username dan password sesuai
if ($formUsername === $username && $formPassword === $password) {
    $_SESSION['username'] = $username;
    header("Location: index.html"); // Redirect ke halaman utama
    exit;
} else {
    header("Location: error.html");
}
?>
