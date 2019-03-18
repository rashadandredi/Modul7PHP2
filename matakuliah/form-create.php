<?php

include '../connect.php';

$query = "SELECT id_dosen, nama_dosen FROM dosen";
$result = mysqli_query($connect, $query);

?>

<!DOCTYPE html>
  <head>
    <title></title>
  </head>
  <body>
    <h3>Tambah Data Matakuliah</h3>

    <form action="create.php" method="post">
      <label>Kode</label>
      <input type="text" name="kode"><br>
      <label>Matakuliah</label>
      <input type="text" name="nama_matkul"><br>
      <label>SKS</label>
      <input type="text" name="sks"><br>
      <label>Semester</label>
      <input type="text" name="semester"><br>

      <select name="id_dosen" id="nama_dosen">
      <option value="NULL">--Pilih Salah Satu--</option>
        <?php
          while ($data = mysqli_fetch_assoc($result)) {
            ?>
          <option value="<?php echo $data['id_dosen']; ?>">
            <?php echo $data['nama_dosen']; ?>
          </option>
          <?php
          }
        ?>
      </select>

      <input type="submit" name="btnSimpan" value="Simpan">
    </form>
  </body>
</html>
