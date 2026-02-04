<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Dashboard | SPP Online</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    *{margin:0;padding:0;box-sizing:border-box;font-family:'Poppins',sans-serif}
    body{background:#0f172a;color:#e5e7eb;display:flex;min-height:100vh}

    /* Sidebar */
    .sidebar{
      width:260px;
      background:linear-gradient(180deg,#020617,#020617);
      padding:30px 20px;
    }
    .sidebar h2{
      color:#38bdf8;
      margin-bottom:40px;
      text-align:center;
      letter-spacing:1px;
    }
    .menu a{
      display:flex;
      align-items:center;
      gap:12px;
      color:#cbd5f5;
      text-decoration:none;
      padding:14px 16px;
      border-radius:14px;
      margin-bottom:10px;
      transition:.3s;
    }
    .menu a:hover,.menu a.active{background:#1e293b;color:#38bdf8}

    /* Main */
    .main{flex:1;padding:30px}
    .topbar{
      display:flex;
      justify-content:space-between;
      align-items:center;
      margin-bottom:30px;
    }
    .topbar h1{font-size:26px;font-weight:600}
    .admin{
      background:#020617;
      padding:10px 18px;
      border-radius:20px;
      color:#38bdf8;
      font-weight:500;
    }

    /* Cards */
    .cards{
      display:grid;
      grid-template-columns:repeat(auto-fit,minmax(240px,1fr));
      gap:24px;
      margin-bottom:40px;
    }
    .card{
      background:linear-gradient(135deg,#020617,#020617);
      padding:24px;
      border-radius:24px;
      position:relative;
      overflow:hidden;
      box-shadow:0 20px 40px rgba(0,0,0,.4);
    }
    .card::after{
      content:"";
      position:absolute;
      inset:0;
      background:linear-gradient(120deg,transparent,rgba(56,189,248,.15),transparent);
    }
    .card h3{font-size:14px;color:#94a3b8}
    .card p{font-size:30px;font-weight:700;margin-top:10px;color:#38bdf8}

    /* Table */
    .table-box{
      background:#020617;
      border-radius:24px;
      padding:24px;
      box-shadow:0 20px 40px rgba(0,0,0,.4);
    }
    .table-box h2{margin-bottom:20px}
    table{width:100%;border-collapse:collapse}
    th,td{padding:14px 12px;text-align:left}
    th{color:#94a3b8;font-weight:500;border-bottom:1px solid #1e293b}
    td{border-bottom:1px solid #020617}
    tr:hover{background:#1e293b}
    .status{
      padding:6px 14px;
      border-radius:20px;
      font-size:12px;
      font-weight:500;
    }
    .lunas{background:rgba(34,197,94,.15);color:#22c55e}
    .tunggak{background:rgba(239,68,68,.15);color:#ef4444}

    @media(max-width:768px){.sidebar{display:none}}
  </style>
</head>
<body>

  <aside class="sidebar">
    <h2>SPP ADMIN</h2>
    <nav class="menu">
      <a href="#" class="active">Dashboard</a>
      <a href="data_siswa.php">Data Siswa</a>
      <a href="pembayaran.php">Pembayaran</a>
      <a href="laporan_pembayaran.php">Laporan</a>
      <a href="logout.php">Logout</a>
    </nav>
  </aside>

  <main class="main">
    <div class="topbar">
      <h1>Dashboard Admin</h1>
      <div class="admin">Admin </div>
    </div>

    <section class="cards">
      <div class="card">
        <h3>Total Siswa</h3>
        <p>-</p>
      </div>
      <div class="card">
        <h3>Pembayaran Bulan Ini</h3>
        <p>Rp-</p>
      </div>
      <div class="card">
        <h3>Siswa Lunas</h3>
        <p>-</p>
      </div>
      <div class="card">
        <h3>Tunggakan</h3>
        <p>-</p>
      </div>
    </section>

    <section class="table-box">
      <h2>Transaksi Terakhir</h2>
      <table>
        <thead>
          <tr>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Bulan</th>
            <th>Status</th>
            <th>Tanggal</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>-</td>
            <td>X TKJ</td>
            <td>Januari</td>
            <td><span class="status lunas">Lunas</span></td>
            <td>12-01-2026</td>
          </tr>
          <tr>
            <td>-</td>
            <td>XI HTL</td>
            <td>Januari</td>
            <td><span class="status tunggak">Tunggak</span></td>
            <td>-</td>
          </tr>
        </tbody>
      </table>
    </section>
  </main>

</body>
</html>
