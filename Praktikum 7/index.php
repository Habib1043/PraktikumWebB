<html>
<head>
  <title>Hitung Nilai Mahasiswa</title>
</head>
<body>
  <center><h1>Program Hitung Nilai</h1></center>
    <form method="post" action="nilaiakhir.php">
      <table width="350" border="1" align="center" bordercolor="black" bgcolor="green">
        <tr>
          <td><strong>NIM</strong></td>
          <td><input name="nim" type="text" id="nim" /></td>
        </tr>
        <tr>
          <td width="142"><strong>Nama Mahasiswa</strong></td>
          <td width="181"><input name="nama" type="text" id="nama" /></td>
        </tr>
        <tr>
          <td><strong>Jurusan</strong></td>
          <td><input name="jurusan" type="text" id="jurusan" /></td>
        </tr>
        <tr>
          <td><strong>Nilai Tugas</strong></td>
          <td><input name="tugas" type="text" id="tugas" /></td>
        </tr>
        <tr>
          <td><strong>Nilai UTS</strong></td>
          <td><input name="uts" type="text" id="uts" /></td>
        </tr>
        <tr>
          <td><strong>Nilai UAS</strong></td>
          <td><input name="uas" type="text" id="uas" /></td>
        </tr>
      </table><br/>
    <center><input type="submit" name="Submit" value="Hitung" /></center>
  </form>
</body>
</html>