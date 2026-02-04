
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Pembayaran Siswa - SPP Online</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 100vh; padding: 20px; }
        .container { max-width: 1400px; margin: 0 auto; background: rgba(255,255,255,0.95); border-radius: 15px; box-shadow: 0 20px 40px rgba(0,0,0,0.1); padding: 30px; backdrop-filter: blur(10px); }
        h2 { color: #2c3e50; text-align: center; margin-bottom: 30px; font-size: 2.2em; text-shadow: 2px 2px 4px rgba(0,0,0,0.1); }
        .filter-form { background: #f8f9fa; padding: 20px; border-radius: 10px; margin-bottom: 25px; box-shadow: 0 5px 15px rgba(0,0,0,0.08); }
        .filter-form .form-control, .filter-form .form-select { border: 2px solid #e9ecef; border-radius: 8px; padding: 12px; font-size: 16px; transition: all 0.3s ease; }
        .filter-form .form-control:focus, .filter-form .form-select:focus { border-color: #667eea; box-shadow: 0 0 0 0.2rem rgba(102,126,234,0.25); }
        .btn-primary { background: linear-gradient(45deg, #667eea, #764ba2); border: none; padding: 12px 25px; border-radius: 8px; color: white; font-weight: 600; transition: all 0.3s; }
        .btn-primary:hover { transform: translateY(-2px); box-shadow: 0 10px 20px rgba(102,126,234,0.4); }
        table { width: 100%; border-collapse: separate; border-spacing: 0; border-radius: 12px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.1); background: white; }
        th { background: linear-gradient(45deg, #2c3e50, #34495e); color: white; padding: 18px 15px; text-align: left; font-weight: 600; font-size: 14px; }
        td { padding: 16px 15px; border-bottom: 1px solid #e9ecef; transition: background 0.3s; }
        tr:nth-child(even) { background: #f8f9fa; }
        tr:hover { background: #e3f2fd; transform: scale(1.01); }
        .badge { padding: 8px 12px; border-radius: 20px; font-weight: 600; font-size: 12px; text-transform: uppercase; }
        .bg-success { background: #28a745 !important; }
        .bg-danger { background: #dc3545 !important; }
        .bg-warning { background: #ffc107 !important; color: #212529 !important; }
        .table-info { background: linear-gradient(45deg, #17a2b8, #20c997) !important; color: white; font-weight: bold; }
        .total-tagihan { font-size: 1.4em; color: #27ae60; }
        @media (max-width: 768px) { .container { padding: 15px; } th, td { padding: 10px 8px; font-size: 14px; } }
    </style>
</head>
<body>
    <div class="container">
        <h2>📊 Riwayat Pembayaran Siswa</h2>
        
        <!-- Filter Bulan/Tahun -->
        <form method="GET" class="filter-form">
            <div style="display: flex; gap: 15px; flex-wrap: wrap; align-items: end;">
                <div>
                    <label style="font-weight: 600; margin-bottom: 5px; display: block;">Bulan:</label>
                    <select name="bulan" class="form-select">
                        <option value="">Semua Bulan</option>
                        <?php 
                        for($i=1; $i<=12; $i++) {
                            $selected = ($_GET['bulan'] ?? '') == $i ? 'selected' : '';
                            echo "<option value='$i' $selected>" . date('F', mktime(0,0,0,$i,1)) . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <div>
                    <label style="font-weight: 600; margin-bottom: 5px; display: block;">Tahun:</label>
                    <input type="number" name="tahun" class="form-control" placeholder="Contoh: 2026" value="<?=$_GET['tahun'] ?? date('Y') ?>">
                </div>
                <div>
                    <button type="submit" class="btn-primary">🔍 Filter</button>
                    <a href="riwayat.php" class="btn" style="background: #6c757d; color: white; text-decoration: none; padding: 12px 25px; border-radius: 8px;">Reset</a>
                </div>
            </div>
        </form>

        <!-- Tabel Riwayat -->
        <table>
            <thead>
                <tr>
                    <th>NISN</th>
                    <th>Nama Siswa</th>
                    <th>Bulan</th>
                    <th>Tahun</th>
                    <th>Tagihan (Rp)</th>
                    <th>Bayar (Rp)</th>
                    <th>Tgl Bayar</th>
                    <th>Status</th>
                </tr>
            </thead>
            
            <tfoot>
                <tr class="table-info">
                    <td colspan="4" style="font-size: 1.2em;"></td>
                    <td colspan="4" style="font-size: 1.5em; color: #fff;"><strong class="total-tagihan"> </strong></td>
                </tr>
            </tfoot>
        </table>
        
        <div style="text-align: center; margin-top: 20px; color: #6c757d;">
            Total data: | Dibuat untuk Dashboard SPP Online
        </div>
    </div>
</body>
</html>
