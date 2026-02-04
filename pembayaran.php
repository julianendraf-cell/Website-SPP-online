<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pembayaran SPP | Admin</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
<style>
*{margin:0;padding:0;box-sizing:border-box;font-family:'Poppins',sans-serif}
body{background:#0f172a;color:#e5e7eb;display:flex;min-height:100vh}

/* Sidebar */
.sidebar{
  width:260px;
  background:#020617;
  padding:30px 20px;
}
.sidebar h2{color:#38bdf8;text-align:center;margin-bottom:40px}
.menu a{
  display:block;
  color:#cbd5f5;
  text-decoration:none;
  padding:14px 16px;
  border-radius:14px;
  margin-bottom:10px;
}
.menu a:hover,.menu a.active{background:#1e293b;color:#38bdf8}

/* Main */
.main{flex:1;padding:30px}
.header{
  display:flex;
  justify-content:space-between;
  align-items:center;
  margin-bottom:30px;
}
.header h1{font-size:24px}

.card{
  background:#020617;
  padding:24px;
  border-radius:24px;
  box-shadow:0 20px 40px rgba(0,0,0,.4);
  margin-bottom:30px;
}

/* Form */
.form-grid{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
  gap:20px;
}
.field label{font-size:13px;color:#94a3b8}
.field input,.field select{
  width:100%;
  padding:12px 14px;
  border-radius:14px;
  border:none;
  outline:none;
  margin-top:6px;
  background:#1e293b;
  color:white;
}

.btn{
  margin-top:20px;
  padding:12px 22px;
  border-radius:14px;
  background:#38bdf8;
  color:#020617;
  font-weight:600;
  border:none;
  cursor:pointer;
}

/* Table */
table{width:100%;border-collapse:collapse}
th,td{padding:14px 12px;text-align:left}
th{color:#94a3b8;border-bottom:1px solid #1e293b}
tr:hover{background:#1e293b}

.badge{
  padding:6px 14px;
  border-radius:20px;
  font-size:12px;
  font-weight:500;
}
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
    <a href="#" class="active">Pembayaran</a>
    <a href="laporan_pembayaran.php">Laporan</a>
    <a href="logout.php">Logout</a>
  </nav>
</aside>

<main class="main">
  <div class="header">
    <h1>Pembayaran SPP</h1>
  </div>

  <!-- Form Pembayaran -->
  <div class="card">
    <h3>Input Pembayaran</h3><br>
    <div class="form-grid">
      <div class="field">
        <label>NIS</label>
        <input type="text" placeholder="Masukkan NIS">
      </div>
      <div class="field">
        <label>Nama Siswa</label>
        <input type="text" placeholder="Nama otomatis" disabled>
      </div>
      <div class="field">
        <label>Bulan</label>
        <select>
          <option>Januari</option><option>Februari</option><option>Maret</option>
        </select>
      </div>
      <div class="field">
        <label>Tahun</label>
        <select>
          <option>2026</option><option>2025</option>
        </select>
      </div>
      <div class="field">
        <label>Jumlah Bayar</label>
        <input type="text" placeholder="Rp 500.000">
      </div>
    </div>
    <button class="btn">Simpan Pembayaran</button>
  </div>

  <!-- Riwayat -->
  <div class="card">
    <h3>Riwayat Pembayaran</h3><br>
    <table>
      <thead>
        <tr>
          <th>NIS</th>
          <th>Nama</th>
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
          <td>Januari</td>
          <td>2026</td>
          <td>Rp 500.000</td>
          <td><span class="badge lunas">Lunas</span></td>
        </tr>
        <tr>
          <td>202402</td>
          <td>Fathur</td>
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
