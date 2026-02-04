<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Data Siswa</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

<style>
*{
  margin:0;
  padding:0;
  box-sizing:border-box;
  font-family:'Poppins',sans-serif;
}

body{
  background:#0f172a;
  color:#e5e7eb;
  min-height:100vh;
  padding:40px;
}

/* Container */
.form-container{
  max-width:600px;
  margin:auto;
  background:#020617;
  padding:32px;
  border-radius:24px;
  box-shadow:0 20px 40px rgba(0,0,0,.45);
}

h2{
  color:#38bdf8;
  margin-bottom:24px;
}

/* Form */
.form-group{
  margin-bottom:16px;
}

.form-row{
  display:flex;
  gap:16px;
}

label{
  display:block;
  margin-bottom:6px;
  font-size:14px;
  color:#94a3b8;
}

input, select{
  width:100%;
  padding:12px 14px;
  background:#0f172a;
  border:1px solid #1e293b;
  border-radius:14px;
  color:#e5e7eb;
  outline:none;
  transition:.3s;
}

input:focus, select:focus{
  border-color:#38bdf8;
  box-shadow:0 0 0 3px rgba(56,189,248,.2);
}

/* Action */
.form-action{
  margin-top:26px;
  display:flex;
  justify-content:flex-end;
  gap:12px;
}

/* Buttons */
.btn-save{
  background:#38bdf8;
  color:#020617;
  border:none;
  padding:10px 22px;
  border-radius:16px;
  font-weight:600;
  cursor:pointer;
}

.btn-save:hover{
  background:#0ea5e9;
}

.btn-cancel{
  background:transparent;
  border:1px solid #475569;
  color:#94a3b8;
  padding:10px 22px;
  border-radius:16px;
  cursor:pointer;
}

.btn-cancel:hover{
  color:#38bdf8;
  border-color:#38bdf8;
}

/* Responsive */
@media (max-width:600px){
  .form-row{
    flex-direction:column;
  }
}
</style>
</head>

<body>

<div class="form-container">
  <h2>Edit Data Siswa</h2>

  <form id="formEdit">
    <div class="form-group">
      <label>NIS</label>
      <!-- NIS BISA DIKETIK -->
      <input type="text" id="nis" value="202401" required>
    </div>

    <div class="form-group">
      <label>Nama Siswa</label>
      <input type="text" id="nama" value="Risma" required>
    </div>

    <div class="form-row">
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
    </div>

    <div class="form-group">
      <label>Status</label>
      <select id="status">
        <option>Aktif</option>
        <option>Nonaktif</option>
      </select>
    </div>

    <div class="form-action">
      <button type="submit" class="btn-save">Update</button>
      <button type="button" class="btn-cancel" onclick="history.back()">Batal</button>
    </div>
  </form>
</div>

<script>
document.getElementById("formEdit").addEventListener("submit", function(e){
  e.preventDefault();

  alert(
    "Data berhasil diupdate!\n\n" +
    "NIS: " + nis.value + "\n" +
    "Nama: " + nama.value + "\n" +
    "Kelas: " + kelas.value + "\n" +
    "Jurusan: " + jurusan.value + "\n" +
    "Status: " + status.value
  );
});
</script>

</body>
</html>
