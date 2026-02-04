<?php
include 'koneksi_db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nis       = $_POST['nis'];
    $nama      = $_POST['nama'];
    $kelas     = $_POST['kelas'];
    $jurusan   = $_POST['jurusan'];
    $username  = $_POST['username'];
    $password  = password_hash($_POST['password'], PASSWORD_DEFAULT);  // aman

    // CEK APAKAH NIS ATAU USERNAME SUDAH ADA
    $cek = $conn->prepare("SELECT * FROM siswa WHERE nis=? OR username=?");
    $cek->bind_param("ss", $nis, $username);
    $cek->execute();
    $result = $cek->get_result();

    if ($result->num_rows > 0) {
        echo "<script>alert('NIS atau Username sudah digunakan!');window.location='register_siswa.php';</script>";
        exit;
    }

    // SIMPAN DATA
    $stmt = $conn->prepare("INSERT INTO siswa (nis, nama, kelas, jurusan, username, password) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $nis, $nama, $kelas, $jurusan, $username, $password);

    if ($stmt->execute()) {
        echo "<script>alert('Akun berhasil dibuat! Silakan login.');window.location='lgn_siswa.php';</script>";
    } else {
        echo "<script>alert('Gagal mendaftar!');window.location='register_siswa.php';</script>";
    }
}
?>
