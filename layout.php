<?php
// layout.php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['nis'])) {
    header("Location: login_siswa.php");
    exit();
}

$nama = $_SESSION['nama'];
$nis  = $_SESSION['nis'];
$username = isset($_SESSION['username']) ? $_SESSION['username'] : "-";
?>
<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title><?= $title ?></title>

<style>
body{
    margin:0;
    font-family:'Poppins',sans-serif;
    background:#f0f2f8;
    display:flex;
}

/* SIDEBAR */
.sidebar{
    width:230px;
    background:#1f1f2e;
    height:100vh;
    padding:20px 15px;
    position:fixed;
    left:0;
    top:0;
    color:white;
}

.sidebar h2{
    text-align:center;
    margin-bottom:20px;
    font-size:20px;
}

.sidebar a{
    display:block;
    padding:12px;
    margin:8px 0;
    background:#2e2e42;
    border-radius:8px;
    color:white;
    text-decoration:none;
    font-size:14px;
}

.sidebar a:hover{
    background:#4f46e5;
}

.logout{
    background:#e11d48 !important;
}

/* CONTENT */
.content{
    margin-left:250px;
    padding:30px;
    width:100%;
}

.card{
    background:white;
    padding:25px;
    border-radius:10px;
    box-shadow:0 6px 20px rgba(0,0,0,0.1);
}
</style>
</head>
<body>

<div class="sidebar">
    <h2>SPP Online</h2>
    <a href="dashboard_siswa.php">🏠 Dashboard</a>
    <a href="pembayaran.php">💵 Pembayaran</a>
    <a href="riwayat_pembayaran.php">📜 Riwayat Pembayaran</a>
    <a href="profile.php">👤 Profil</a>
    <a href="logout.php" class="logout">🚪 Logout</a>
</div>

<div class="content">
