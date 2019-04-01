<?php
if(!defined('INDEX')) die("");
?>

<h2 class="judul">Tambah Pegawai</h2>
<form method="POST" action="?hal=pegawai_insert" enctype="multipart/form-data">

<div class="form-group">
<label for="foto"> FOTO </label>
<div class="input"><input type="file" id="foto" name="foto"></div>
</div>

<div class="form-group">
<label for="nama"> NAMA </label>
<div class="input"><input type="text" id="nama" name="nama"></div>
</div>

<div class="form-group">
<label for="jk"> JENIS KELAMIN </label>
<input type="radio" id="jk" name="jenis_kelamin" value="L"> Laki - Laki
<input type="radio" id="jk" name="jenis_kelamin" value="P"> Perempuan
</div>

<div class="form-group">
<label for="tanggal"> TANGGAL KELAHIRAN </label>
<div class="input"><input type="date" id="tanggal_lahir" name="tanggal"></div>
</div>

<div class="form-group">
<label for="jabatan"> JABATAN </label>
<div class="input">
<select id="jabatan" name="jabatan">
<option value=""> -Pilih Jabatan-</option>

<?php
$queryjabatan = mysqli_query($connect, "SELECT * FROM jabatan");
while($j = myqsli_fetch_array($queryjabatan)){
    echo "<option value='$j[id_jabatan]'>
    $j[nama_jabatan]</option>";
}
?>
</select>
</div>
</div>

<div class="form-group">
<label for="keterangan"> KETERANGAN </label>
<div class="input"><textarea style="width : 100%" rows="5" id="keterangan" name="keterangan"></textarea></div>
</div>

<div class="form-group">
<input type="submit" value="Simpan" class="tombol_simpan">
<input type="reset" value="Batal" class="tombol_batal">
</div>
</form>
