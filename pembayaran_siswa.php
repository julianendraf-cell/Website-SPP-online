<?php
$title = "Pembayaran SPP";
include "layout.php";
include "koneksi_db.php";
?>

<div class="card">
    <h2>Pembayaran SPP</h2>
    <p>Silakan melakukan pembayaran SPP di bawah ini.</p>

    <form method="POST" action="">
        <label>Bulan Pembayaran:</label><br>
        <select name="bulan" required>
            <option value="">Pilih Bulan</option>
            <?php
            $bulanList = [
                "Januari","Februari","Maret","April","Mei","Juni",
                "Juli","Agustus","September","Oktober","November","Desember"
            ];
            foreach ($bulanList as $b) {
                echo "<option>$b</option>";
            }
            ?>
        </select><br><br>

        <label>Nominal:</label><br>
        <input type="text" value="150000" name="nominal" readonly><br><br>

        <button style="
            padding:12px 18px;
            background:#4f46e5;
            border:none;
            color:white;
            border-radius:8px;
            cursor:pointer;
        ">Bayar Sekarang</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nis = $_SESSION['nis'];
        $bulan = $_POST['bulan'];
        $nominal = $_POST['nominal'];

        $sql = "INSERT INTO pembayaran (nis, bulan, nominal, tanggal) VALUES (?, ?, ?, NOW())";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssi", $nis, $bulan, $nominal);
        $stmt->execute();

        echo "<script>alert('Pembayaran berhasil!'); window.location='riwayat_pembayaran.php';</script>";
    }
    ?>
</div>

</div>
</body>
</html>
