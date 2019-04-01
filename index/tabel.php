
<!DOCTYPE html>


<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="tabel.css">
    <title></title>
  </head>
  <body>
    <header>
      <h2 align="center">Aplikasi Manajemen Pegawai</h2>
    </header>
    <br>
    <div class="menu">
        <ul>
          <li> <a href="dashboard.html" class="aktif">Dashboard</a>
      </li>
          <li> <a href="tabel.php">Data Pegawai</a> </li>
          <li> <a href="tabel.php">Data Jabatan</a> </li>
          <li> <a href="../login/form-login.php">Keluar</a> </li>
       </ul>
</div>
    <section class="main">
      <h2 class="judul">Data Pegawai</h2>
      <a class="tombol" href="form.php">Tambah</a>

      <table class="table">
        <thead>
          <tr>
            <th>No</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Jabatan</th>
            <th>Keterangan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td><img src="s.jpg" width="100"></td>
            <td>Fanny</td>
            <td>Bencong</td>
            <td>25 Juli 2002</td>
            <td>CEO</td>
            <td>-</td>
            <td>
            <a class="tombol edit" href="../content/pegawai_tambah.php"> Edit</a>
            <a class="tombol hapus" href="../content/pegawai_hapus.php"> Hapus</a>
            </td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td>2</td>
            <td><img src="s.jpg" width="100"></td>
            <td>Dimas</td>
            <td>Laki-Laki</td>
            <td>25 Juli 2002</td>
            <td>CEO</td>
            <td>-</td>
            <td>
            <a class="tombol edit" href="../content/pegawai_edit.php"> Edit</a>
            <a class="tombol hapus" href="../content/pegawai_hapus.php"> Hapus</a>
            </td>
          </tr>
        </tbody>
      </table>

    </section>
  </body>
</html>
