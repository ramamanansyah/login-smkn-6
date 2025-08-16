<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h3>DATA SISWA</h3>

<div>
  <form action="api.php" method="POST">
    <label for="nama">Nama lengkap</label>
    <input type="text" id="Nama lengkap" name="nama" placeholder="Nama lengkap..">

    <label for="Alamat">Alamat</label>
    <input type="text" id="Alamat" name="alamat" placeholder="Alamat..">
    
    <label for="keterangan">Keterangan</label>
    <input type="text" id="keterangan" name="ket" placeholder="keterangan..">
    
    <label for="kelas">kelas</label>
    <select id="kelas" name="kelas">
      <option value="11 RPL 1">11 RPL 1</option>
      <option value="11 RPL 2">11 RPL 2</option>
      <option value="11 TKJ 1">11 TKJ 1</option>
      <option value="11 TKJ 2">11 TKJ 2</option>
      <option value="11 BC 1">11 BC 1</option>
      <option value="11 BC 2">11 BC 2</option>
    </select>
      
    
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>

