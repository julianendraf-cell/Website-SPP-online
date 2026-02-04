<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Siswa - SPP Online</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }
        .container {
            max-width: 1200px;
            margin: auto;
            background: rgba(255,255,255,0.95);
            border-radius: 15px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            padding: 30px;
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 30px;
        }
        h1 {
            grid-column: 1 / -1;
            text-align: center;
            margin-bottom: 20px;
            color: #2c3e50;
        }
        .foto-profil {
            text-align: center;
            background: linear-gradient(45deg, #3498db, #2980b9);
            color: white;
            padding: 30px;
            border-radius: 20px;
        }
        .foto-profil img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 5px solid white;
            object-fit: cover;
            margin-bottom: 15px;
        }
        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px,1fr));
            gap: 20px;
            margin-bottom: 20px;
        }
        .stat-card {
            background: linear-gradient(45deg, #27ae60, #2ecc71);
            color: white;
            padding: 20px;
            border-radius: 12px;
            text-align: center;
        }
        .stat-card.danger {
            background: linear-gradient(45deg, #e74c3c, #c0392b);
        }
        .stat-num {
            font-size: 2em;
            font-weight: bold;
        }
        .biodata {
            background: #f8f9fa;
            padding: 25px;
            border-radius: 12px;
            margin-bottom: 20px;
        }
        .biodata h3 {
            margin-bottom: 15px;
            border-bottom: 3px solid #667eea;
            padding-bottom: 8px;
        }
        .info-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            padding: 10px;
            background: white;
            border-radius: 8px;
        }
        .label { font-weight: 600; color: #555; }
        .value { color: #2c3e50; }
        .edit-form {
            background: linear-gradient(135deg, #f39c12, #e67e22);
            color: white;
            padding: 25px;
            border-radius: 12px;
        }
        .form-group { margin-bottom: 15px; }
        .form-control {
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            border: none;
        }
        .btn {
            padding: 12px 20px;
            border-radius: 8px;
            border: none;
            font-weight: bold;
            cursor: pointer;
        }
        .btn-success { background: #27ae60; color: white; }
        .btn-primary { background: #3498db; color: white; text-decoration: none; }
        @media(max-width:768px){
            .container { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Profil Siswa</h1>

    <div class="foto-profil">
        <img src="C:\Users\DELL\Downloads\WhatsApp Image 2025-12-16 at 1.40.40 AM.png" alt="Foto Siswa">
        <h2>Fathur</h2>
        <p>NISN: 1234567890</p>
    </div>

    <div>
        <div class="stats">
            <div class="stat-card">
                <div class="stat-num">12</div>
                <div>Total Bulan</div>
            </div>
            <div class="stat-card">
                <div class="stat-num">Rp 0</div>
                <div>Total Tagihan</div>
            </div>
            <div class="stat-card">
                <div class="stat-num">Rp 0</div>
                <div>Total Dibayar</div>
            </div>
            <div class="stat-card danger">
                <div class="stat-num">0 / 12</div>
                <div>Status Lunas</div>
            </div>
        </div>

        <div class="biodata">
            <h3>📋 Biodata Siswa</h3>
            <div class="info-row"><span class="label">NISN</span><span class="value">1234567890</span></div>
            <div class="info-row"><span class="label">Kelas</span><span class="value">XI RPL</span></div>
            <div class="info-row"><span class="label">Alamat</span><span class="value">Jakarta</span></div>
            <div class="info-row"><span class="label">No HP</span><span class="value">08123456789</span></div>
            <div class="info-row"><span class="label">Email</span><span class="value">siswa@email.com</span></div>
        </div>

        <div class="edit-form">
            <h3>✏️ Edit Profil</h3>
            <form>
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control" value="Joseph">
                </div>
                <div class="form-group">
                    <label>Kelas</label>
                    <input type="text" class="form-control" value="XI RPL">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control">Jakarta</textarea>
                </div>
                <div class="form-group">
                    <label>No HP</label>
                    <input type="tel" class="form-control" value="08123456789">
                </div>
                <button class="btn btn-success">Update Profil</button>
                <a href="#" class="btn btn-primary">Lihat Riwayat</a>
            </form>
        </div>
    </div>
</div>

</body>
</html>
