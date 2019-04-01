<?php
if(!defined('INDEX')) die("");
?>

<h2 class="judul">Data Pegawai</h2>
<a class="tombol" href="?hal=pegawai_tambah">Tambah</a>

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
<?php
$query = mysqli_query($connect, "SELECT * FROM pegawai LEFT JOIN jabatan on pegawai.id_jabatan = jabatan.id_jabatan ORDER BY pegawai.id_pegawai DESC");
$no = 0;
while($data = mysqli_fetch_array($query)){
    $no++;
?>
<tr>
<td><?php $no ?></td>
<td><img src="images/<?php $data['foto'] ?>" width="100"></td>
<td><?php $data['nama_pegawai'] ?></td>
<td><?php $data['jenis_kelamin'] ?></td>
<td><?php $data['tanggal_lahir'] ?></td>
<td><?php $data['nama_jabatan'] ?></td>
<td><?php $data['keterangan'] ?></td>
<td>
<a class="tombol_edit" href="?hal=pegawai_hapus&id= <?php $data['id_pegawai'] ?>&foto=<?php $data['foto'] ?>"> Hapus </a>
</td>
</tr>
<?php
}
?>
</tbody>
</table>
