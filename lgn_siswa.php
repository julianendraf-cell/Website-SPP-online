<?php
// login_siswa.php
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Login Siswa</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
<style>
  * { box-sizing:border-box; margin:0; padding:0; font-family:'Poppins',sans-serif; }
  body { height:100vh; display:flex; align-items:center; justify-content:center; background:linear-gradient(135deg,#667eea,#764ba2); }
  .login-container { background:rgba(255,255,255,0.95); padding:40px 50px; border-radius:15px; width:350px; text-align:center; }
  h2 { margin-bottom:20px; color:#333; font-weight:600; }
  input { width:100%; padding:12px 15px; border-radius:8px; border:1px solid #ccc; margin-bottom:15px; }
  .login-btn { width:100%; padding:12px; border:none; background:linear-gradient(135deg,#667eea,#764ba2); color:#fff; border-radius:8px; font-weight:600; cursor:pointer; }
  .msg { margin-bottom:10px; font-size:14px; color:#b00020; }
  .success { color: #0a7a0a; }
  .link { margin-top:12px; font-size:14px; color:#555; }
  .link a { color:#667eea; text-decoration:none; }
</style>
</head>
<body>

<div class="login-container">
  <h2>Login Siswa</h2>

  <?php
  if (isset($_GET['error'])) {
      echo '<div class="msg">'.htmlspecialchars($_GET['error']).'</div>';
  }
  if (isset($_GET['success'])) {
      echo '<div class="msg success">'.htmlspecialchars($_GET['success']).'</div>';
  }
  ?>


  <form action="proses_login.php" method="POST">
    <input type="text" name="nis" placeholder="NIS" required>
    <div class="input-group" style="position:relative;">
  <input type="password" id="password" name="password" placeholder="Password" required>
  <span onclick="togglePassword()" 
        style="position:absolute; right:15px; top:50%; transform:translateY(-50%); cursor:pointer; color:#666;">
    👁️
  </span>
</div>

    <button class="login-btn" type="submit" name="login">Masuk</button>
  </form>

  <div class="link">
    Belum punya akun? <a href="register_siswa.php">Daftar</a>
  </div>
</div>

<script>
function togglePassword() {
    let pass = document.getElementById("password");
    pass.type = pass.type === "password" ? "text" : "password";
}

function toggleRegPassword() {
    let pass = document.getElementById("reg_password");
    pass.type = pass.type === "password" ? "text" : "password";
}
</script>

</body>
</html>
