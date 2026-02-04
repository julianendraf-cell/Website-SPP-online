<?php

?>
<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Register Siswa - SPP Online</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet" />
<style>
    *{margin:0;padding:0;box-sizing:border-box;font-family:'Poppins',sans-serif;}
    body{height:100vh;background:#0f0f10;display:flex;justify-content:center;align-items:center;padding:20px;}
    .card{width:320px;background:#1b1b1d;padding:25px;border-radius:18px;box-shadow:0 8px 20px rgba(0,0,0,0.4);animation:pop .5s ease;}
    @keyframes pop{from{opacity:0;transform:scale(.8);} to{opacity:1;transform:scale(1);}}
    h2{text-align:center;color:white;font-weight:600;margin-bottom:18px;}
    label{color:#cfcfcf;font-size:13px;}
    .form-group{margin-bottom:12px;}
    input, select{width:100%;padding:10px;border:none;margin-top:4px;border-radius:8px;background:#2a2a2d;color:white;font-size:14px;}
    input:focus, select:focus{outline:2px solid #6d28d9;}
    .btn{width:100%;padding:11px;border:none;background:linear-gradient(135deg,#6d28d9,#9333ea);border-radius:10px;margin-top:5px;font-size:15px;color:white;cursor:pointer;font-weight:600;transition:.3s;}
    .btn:hover{transform:scale(1.03);}
    .login-link{text-align:center;margin-top:10px;color:#b8b8b8;font-size:13px;}
    .login-link a{color:#9333ea;text-decoration:none;}
    .msg{margin-bottom:8px;color:#ffdbdb;background:#3b1b1b;padding:8px;border-radius:6px;font-size:13px;}
</style>
</head>
<body>

<div class="card">
    <h2>Daftar</h2>

    <?php
    if (isset($_GET['error'])) {
        echo '<div class="msg">'.htmlspecialchars($_GET['error']).'</div>';
    }
    if (isset($_GET['success'])) {
        echo '<div class="msg" style="background:#1b3b1b;color:#dfffe0;">'.htmlspecialchars($_GET['success']).'</div>';
    }
    ?>

    <form action="regis_proses.php" method="POST">
        <div class="form-group">
            <label>NIS</label>
            <input type="text" name="nis" required />
        </div>

        <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" name="nama" required />
        </div>

        <div class="form-group">
            <label>Kelas</label>
            <select name="kelas" required>
                <option value="">Pilih</option>
                <option>X 1</option>
                <option>X 2</option>
                <option>X 3</option>
                <option>X 4</option>
                <option>XI 1</option>
                <option>XI 2</option>
                <option>XI 3</option>
                <option>XII 1</option>
                <option>XII 2</option>
                <option>XII 3</option>
            </select>
        </div>

        <div class="form-group">
            <label>Jurusan</label>
            <select name="jurusan" required>
                <option value="">Pilih</option>
                <option>HTL</option>
                <option>TKJ</option>
                <option>MPLB</option>
                <option>PM</option>
            </select>
        </div>

        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" required />
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" required />
        </div>

        <button class="btn" type="submit" name="register">Daftar</button>
    </form>
    <div class="login-link">Sudah punya akun? <a href="login_siswa.php">Login</a></div>
</div>

</body>
</html>
