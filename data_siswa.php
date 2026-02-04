<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Data Siswa | Admin SPP</title>

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
.sidebar h2{
  color:#38bdf8;
  text-align:center;
  margin-bottom:40px;
}
.menu a{
  display:block;
  color:#cbd5f5;
  text-decoration:none;
  padding:14px 16px;
  border-radius:14px;
  margin-bottom:10px;
}
.menu a:hover,.menu a.active{
  background:#1e293b;
  color:#38bdf8;
}

/* Main */
.main{flex:1;padding:30px}
.header{
  display:flex;
  justify-content:space-between;
  align-items:center;
  margin-bottom:30px;
}
.header h1{font-size:24px}

.btn{
  padding:10px 18px;
  border-radius:14px;
  background:#38bdf8;
  color:#020617;
  font-weight:600;
  border:none;
  cursor:pointer;
}

/* Table */
.card{
  background:#020617;
  padding:24px;
  border-radius:24px;
  box-shadow:0 20px 40px rgba(0,0,0,.4);
}
table{
  width:100%;
  border-collapse:collapse;
}
th,td{
  padding:14px 12px;
  text-align:left;
}
th{
  color:#94a3b8;
  border-bottom:1px solid #1e293b;
}
tr:hover{
  background:#1e293b;
}

.badge{
  padding:6px 14px;
  border-radius:20px;
  font-size:12px;
  font-weight:500;
}
.aktif{background:rgba(34,197,94,.15);color:#22c55e}
.nonaktif{background:rgba(239,68,68,.15);color:#ef4444}

.action a{
  color:#38bdf8;
  text-decoration:none;
  margin-right:10px;
  font-size:13px;
}
.action a:hover{
  text-decoration:underline;
}
</style>
</head>

<body>

<aside class="sidebar">
  <h2>SPP ADMIN</h2>
  <nav class="menu">
    <a href="dashboard.html">Dashboard</a>
    <a href="data_siswa.html" class="active">Data Siswa</a>
    <a href="pembayaran.php">Pembayaran</a>
    <a href="laporan_pembayaran.php">Laporan</a>
    <a href="logout.php">Logout</a>
  </nav>
</aside>

<main class="main">
  <div class="header">
    <h1>Data Siswa</h1>
  <button class="btn" onclick="window.location.href='tambah_siswa.php'">+ Tambah Siswa</button>
  </div>

  <div class="card">
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>NIS</th>
          <th>Nama</th>
          <th>Kelas</th>
          <th>Jurusan</th>
          <th>Status</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>202401</td>
          <td>Risma</td>
          <td>X</td>
          <td>MPLB 3</td>
          <td><span class="badge aktif">Aktif</span></td>
          <td class="action">
            <a href="edit_siswa.php">Edit</a>
            <a href="#" class="hapus">Hapus</a>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>202402</td>
          <td>Fathur</td>
          <td>XI</td>
          <td>TKJ</td>
          <td><span class="badge nonaktif">Nonaktif</span></td>
          <td class="action">
            <a href="edit_siswa.php">Edit</a>
            <a href="#" class="hapus">Hapus</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</main>

<!-- SCRIPT HAPUS DATA -->
<script>
document.querySelectorAll('.hapus').forEach(btn => {
  btn.addEventListener('click', function(e) {
    e.preventDefault();

    const row = this.closest('tr');
    const nama = row.children[2].innerText;

    if (confirm(`Yakin ingin menghapus data siswa "${nama}"?`)) {
      row.remove();
    }
  });
});
</script>

</body>
</html>
