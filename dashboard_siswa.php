<?php
session_start();
include 'koneksi_db.php';

if (!isset($_SESSION['nis'])) {
    header("Location: login_siswa.php");
    exit();
}

$nis = $_SESSION['nis'];
$nama = $_SESSION['nama'];

// TOTAL TAGIHAN (tabel spp)
$q_spp = mysqli_query($conn, "SELECT SUM(nominal) AS total_spp FROM spp");
$d_spp = mysqli_fetch_assoc($q_spp);
$total_spp = $d_spp['total_spp'] ?? 0;

// TOTAL PEMBAYARAN SISWA
$q_bayar = mysqli_query($conn, "SELECT SUM(jumlah) AS total_bayar FROM pembayaran WHERE nis='$nis'");
$d_bayar = mysqli_fetch_assoc($q_bayar);
$total_bayar = $d_bayar['total_bayar'] ?? 0;

// HITUNG TUNGGAKAN
$tunggakan = $total_spp - $total_bayar;

// RIWAYAT PEMBAYARAN
$q_riwayat = mysqli_query($conn, "SELECT * FROM pembayaran WHERE nis='$nis' ORDER BY tahun, bulan ASC");
?>
<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Dashboard Siswa</title>

<style>
*{margin:0;padding:0;box-sizing:border-box;font-family:'Poppins',sans-serif;}
body{display:flex;background:#f4f6fb;}

/* SIDEBAR */
.sidebar{
    width:250px;background:#111827;color:#fff;min-height:100vh;padding:25px;position:fixed;
}
.sidebar h2{text-align:center;margin-bottom:25px;font-size:22px;font-weight:600;}
.sidebar a{
    display:block;padding:12px 15px;margin:10px 0;text-decoration:none;
    color:#d1d5db;border-radius:10px;transition:0.3s;
}
.sidebar a:hover{background:#374151;color:#fff;}

.content{margin-left:250px;padding:30px;width:100%;}
.title{font-size:26px;font-weight:600;margin-bottom:15px;}

/* NOTIFIKASI */
.alert{
    padding:15px;border-radius:10px;margin-bottom:20px;
    color:#fff;background:#dc2626;box-shadow:0 4px 12px rgba(0,0,0,0.1);
}

/* CARD FULL COLOR */
.card-container{display:flex;gap:20px;flex-wrap:wrap;margin-top:20px;}
.card{
    width:280px;padding:20px;border-radius:18px;color:#fff;
    box-shadow:0 6px 20px rgba(0,0,0,0.15);
}
.card-blue{background:linear-gradient(135deg,#2563eb,#1d4ed8);}
.card-purple{background:linear-gradient(135deg,#7c3aed,#6d28d9);}
.card-red{background:linear-gradient(135deg,#dc2626,#b91c1c);}
.card h3{margin-bottom:8px;font-size:18px;}
.value{font-size:28px;font-weight:700;}

/* TABLE */
table{
    width:100%;background:#fff;margin-top:30px;border-collapse:collapse;
    border-radius:12px;overflow:hidden;box-shadow:0 4px 12px rgba(0,0,0,0.08);
}
th,td{padding:14px;border-bottom:1px solid #eee;}
th{background:#2563eb;color:#fff;text-align:left;}

.btn-print{
    padding:8px 12px;border-radius:8px;background:#2563eb;color:white;
    font-size:13px;text-decoration:none;transition:0.3s;
}
.btn-print:hover{background:#1d4ed8;}
</style>

</head>
<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <h2>SPP ONLINE</h2>
    <a href="#">Dashboard</a>
    <a href="riwayat_pembayaran.php">Riwayat Pembayaran</a>
    <a href="profile_siswa.php">Profil</a>
    <a href="logout.php">Logout</a>
</div>


<div class="content">

    <div class="title">Selamat Datang, <b><?php echo $nama; ?></b></div>

    
    <?php if ($tunggakan > 0) { ?>
        <div class="alert">
            ⚠ Anda masih memiliki tunggakan sebesar 
            <b>Rp <?php echo number_format($tunggakan, 0, ',', '.'); ?></b>
        </div>
    <?php } ?>

    
    <div class="card-container">

        <div class="card card-blue">
            <h3>Total Tagihan</h3>
            <div class="value">Rp <?php echo number_format($total_spp,0,',','.'); ?></div>
        </div>

        <div class="card card-purple">
            <h3>Total Dibayar</h3>
            <div class="value">Rp <?php echo number_format($total_bayar,0,',','.'); ?></div>
        </div>

        <div class="card card-red">
            <h3>Sisa Tunggakan</h3>
            <div class="value">Rp <?php echo number_format($tunggakan,0,',','.'); ?></div>
        </div>

    </div>

    
    <table>
        <thead>
            <tr>
                <th>Bulan</th>
                <th>Tahun</th>
                <th>Jumlah</th>
                <th>Metode</th>
                <th>Status</th>
                <th>Tanggal Bayar</th>
                <th>Bukti</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_assoc($q_riwayat)) { ?>
            <tr>
                <td><?= $row['bulan']; ?></td>
                <td><?= $row['tahun']; ?></td>
                <td>Rp <?= number_format($row['jumlah'],0,',','.'); ?></td>
                <td><?= $row['metode']; ?></td>
                <td style="color:<?= $row['status']=='Lunas'?'green':'red'; ?>">
                    <?= $row['status']; ?>
                </td>
                <td><?= $row['tanggal_bayar']; ?></td>

                
                <td>
                    <a class="btn-print" href="cetak_bukti.php?id=<?= $row['id']; ?>" target="_blank">
                        Cetak
                    </a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

</div>

</body>
</html>
