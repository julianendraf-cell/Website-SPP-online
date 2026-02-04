<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Laporan Pembayaran | Admin SPP</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
<style>
*{margin:0;padding:0;box-sizing:border-box;font-family:'Poppins',sans-serif}
body{background:#0f172a;color:#e5e7eb;display:flex;min-height:100vh}

/* Sidebar */
.sidebar{width:260px;background:#020617;padding:30px 20px}
.sidebar h2{color:#38bdf8;text-align:center;margin-bottom:40px}
.menu a{display:block;color:#cbd5f5;text-decoration:none;padding:14px 16px;border-radius:14px;margin-bottom:10px}
.menu a:hover,.menu a.active{background:#1e293b;color:#38bdf8}

/* Main */
.main{flex:1;padding:30px}
.header{display:flex;justify-content:space-between;align-items:center;margin-bottom:30px}
.header h1{font-size:24px}

.card{background:#020617;padding:24px;border-radius:24px;box-shadow:0 20px 40px rgba(0,0,0,.4);margin-bottom:30px}

/* Filter */
.filter{display:grid;grid-template-columns:repeat(auto-fit,minmax(180px,1fr));gap:20px}
.filter label{font-size:13px;color:#94a3b8}
.filter select{
  width:100%;padding:12px 14px;border-radius:14px;border:none;outline:none;
  background:#1e293b;color:white;margin-top:6px
}

.btn{padding:12px 22px;border-radius:14px;background:#38bdf8;color:#020617;font-weight:600;border:none;cursor:pointer;margin-top:20px}

/* Summary */
.summary{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:24px}
.box{background:#0f172a;padding:22px;border-radius:20px}
.box h3{font-size:14px;color:#94a3b8}
.box p{font-size:26px;font-weight:700;color:#38bdf8;margin-top:8px}

/* Table */
table{width:100%;border-collapse:collapse}
th,td{padding:14px 12px;text-align:left}
th{color:#94a3b8;border-bottom:1px solid #1e293b}
tr:hover{background:#1e293b}

.badge{padding:6px 14px;border-radius:20px;font-size:12px;font-weight:500}
.lunas{background:rgba(34,197,94,.15);color:#22c55e}
.tunggak{background:rgba(239,68,68,.15);color:#ef4444}
</style>
</head>
<body>

<aside class="sidebar">
  <h2>SPP ADMIN</h2>
  <nav class="menu">
    <a href="beranda_admin.php">Dashboard</a>
    <a href="data_siswa.php">Data Siswa</a>
    <a href="pembayaran.php">Pembayaran</a>
    <a href="#" class="active">Laporan</a>
    <a href="logout.php">Logout</a>
  </nav>
</aside>

<main class="main">
  <div class="header">
    <h1>Laporan Pembayaran SPP</h1>
    <button class="btn">Cetak Laporan</button>
  </div>

  <!-- Filter -->
  <div class="card">
    <h3>Filter Laporan</h3><br>
    <div class="filter">
      <div>
        <label>Bulan</label>
        <select><option>Januari</option><option>Februari</option></select>
      </div>
      <div>
        <label>Tahun</label>
        <select><option>2026</option><option>2025</option></select>
      </div>
      <div>
        <label>Status</label>
        <select><option>Semua</option><option>Lunas</option><option>Tunggak</option></select>
      </div>
    </div>
  </div>

  <!-- Summary -->
  <div class="summary">
    <div class="box"><h3>Total Pemasukan</h3><p>Rp 125.000.000</p></div>
    <div class="box"><h3>Siswa Lunas</h3><p>980</p></div>
    <div class="box"><h3>Siswa Tunggak</h3><p>270</p></div>
  </div>

  <!-- Table -->
  <div class="card">
    <h3>Detail Pembayaran</h3><br>
    <table>
      <thead>
        <tr>
          <th>NIS</th>
          <th>Nama</th>
          <th>Kelas</th>
          <th>Bulan</th>
          <th>Tahun</th>
          <th>Jumlah</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>202401</td>
          <td>Risma</td>
          <td>X MPLB 3</td>
          <td>Januari</td>
          <td>2026</td>
          <td>Rp 500.000</td>
          <td><span class="badge lunas">Lunas</span></td>
        </tr>
        <tr>
          <td>202402</td>
          <td>Fathur</td>
          <td>XI TKJ 2</td>
          <td>Januari</td>
          <td>2026</td>
          <td>Rp 500.000</td>
          <td><span class="badge tunggak">Tunggak</span></td>
        </tr>
      </tbody>
    </table>
  </div>
</main>

</body>
</html>
