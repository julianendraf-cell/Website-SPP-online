<?php
session_start();
include 'koneksi_db.php';

if (isset($_POST['login'])) {

    $nisOrUser = $_POST['nis'];
    $password  = $_POST['password'];

    // CEK NIS ATAU USERNAME
    $stmt = $conn->prepare("SELECT * FROM siswa WHERE nis=? OR username=? LIMIT 1");
    $stmt->bind_param("ss", $nisOrUser, $nisOrUser);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();

    if ($data) {
        if (password_verify($password, $data['password'])) {

            $_SESSION['nis'] = $data['nis'];
            $_SESSION['nama'] = $data['nama'];

            echo "<script>alert('Login berhasil!');window.location='dashboard_siswa.php';</script>";

        } else {
            echo "<script>alert('Password salah!');window.location='lgn_siswa.php';</script>";
        }
    } else {
        echo "<script>alert('Akun tidak ditemukan!');window.location='lgn_siswa.php';</script>";
    }
}
?>
