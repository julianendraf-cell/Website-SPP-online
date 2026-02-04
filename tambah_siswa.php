<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tambah Siswa</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

<style>
*{margin:0;padding:0;box-sizing:border-box;font-family:'Poppins',sans-serif}
body{background:#0f172a;color:#e5e7eb;min-height:100vh;padding:40px}

.form-container{
  max-width:600px;
  margin:auto;
  background:#020617;
  padding:30px;
  border-radius:24px;
  box-shadow:0 20px 40px rgba(0,0,0,.4);
}
h1{color:#38bdf8;margin-bottom:25px}

.form-group{margin-bottom:16px}
label{display:block;margin-bottom:6px;color:#94a3b8}

input,select{
  width:100%;
  padding:12px;
  background:#0f172a;
  border:1px solid #1e293b;
  border-radius:12px;
  color:#fff;
}

.form-action{
  margin-top:25px;
  display:flex;
  justify-content:flex-end;
  gap:10px;
}

.btn-save{
  background:#38bdf8;
  color:#020617;
  border:none;
  padding:10px 18px;
  border-radius:14px;
  font-weight:600;
  cursor:pointer;
}
.btn-back{
  background:transparent;
  border:1px solid #475569;
  color:#94a3b8;
  padding:10px 18px;
  border-radius:14px;
  cursor:pointer;
}
</style>
</head>

<body>

<div class="form-container">
  <h1>Tambah Data Siswa</h1>

  <form id="formSiswa">
    <div class="form-group">
      <label>NIS</label>
      <input type="text" id="nis" required>
    </div>

    <div class="form-group">
      <label>Nama</label>
      <input type="text" id="nama" required>
    </div>

    <div class="form-group">
      <label>Kelas</label>
      <select id="kelas">
        <option>X</option>
        <option>XI</option>
        <option>XII</option>
      </select>
    </div>

    <div class="form-group">
      <label>Jurusan</label>
      <select id="jurusan">
        <option>MPLB</option>
        <option>TKJ</option>
        <option>HTL</option>
        <option>PM</option>
      </select>
    </div>

    <div class="form-group">
      <label>Status</label>
      <select id="status">
        <option>Aktif</option>
        <option>Nonaktif</option>
      </select>
    </div>

    <div class="form-action">
      <button type="submit" class="btn-save">Simpan</button>
      <button type="button" class="btn-back" onclick="history.back()">Batal</button>
    </div>
  </form>
</div>

<script>
document.getElementById("formSiswa").addEventListener("submit", function(e){
  e.preventDefault();

  const siswa = {
    nis: nis.value,
    nama: nama.value,
    kelas: kelas.value,
    jurusan: jurusan.value,
    status: status.value
  };

  let data = JSON.parse(localStorage.getItem("dataSiswa")) || [];
  data.push(siswa);
  localStorage.setItem("dataSiswa", JSON.stringify(data));

  alert("Data siswa berhasil ditambahkan");
  window.location.href = "data_siswa.php";
});
</script>

</body>
</html>
