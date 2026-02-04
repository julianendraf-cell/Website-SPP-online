<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login Admin</title>

<style>
:root{
  --bg:#020617;
  --card:rgba(255,255,255,.06);
  --accent:#38bdf8;
  --muted:#94a3b8;
}
*{box-sizing:border-box}
body{
  margin:0;
  min-height:100vh;
  display:flex;
  justify-content:center;
  align-items:center;
  background:linear-gradient(135deg,#020617,#0f172a);
  font-family:'Poppins',system-ui,Arial;
  color:white;
}
.card{
  width:360px;
  background:var(--card);
  backdrop-filter:blur(14px);
  border-radius:18px;
  padding:32px;
  box-shadow:0 25px 60px rgba(0,0,0,.6);
}
h1{text-align:center;margin-bottom:24px}
.input-wrap{
  display:flex;
  align-items:center;
  gap:12px;
  padding:12px 14px;
  background:rgba(255,255,255,.1);
  border-radius:14px;
  margin-bottom:16px;
}
input{
  flex:1;
  background:transparent;
  border:none;
  outline:none;
  color:white;
}
.btn{
  width:100%;
  padding:13px;
  border:none;
  border-radius:14px;
  background:linear-gradient(180deg,var(--accent),#0284c7);
  color:#020617;
  font-weight:600;
  cursor:pointer;
}
.error{
  color:#f87171;
  font-size:13px;
  text-align:center;
  margin-bottom:10px;
}
</style>
</head>

<body>
<main class="card">
  <h1>Login Admin</h1>

  <?php if(isset($_GET['error'])){ ?>
    <div class="error">Username atau password salah</div>
  <?php } ?>

  <form method="POST" action="beranda_admin.php">
    <div class="input-wrap">
      👤 <input type="text" name="username" placeholder="Username" required>
    </div>
    <div class="input-wrap">
      🔒 <input type="password" name="password" placeholder="Password" required>
    </div>
    <button class="btn">LOGIN</button>
  </form>
</main>
</body>
</html>
