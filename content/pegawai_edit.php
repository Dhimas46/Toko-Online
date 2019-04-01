<?php
if(!defined('INDEX')) die("");

$query = mysqli_query($connect, "SELECT * FROM pegawai WHERE id_pegawai = '$_GET[id_jabatan]'");
$data = mysqli_fetch_array($query);
?>

<h2 class="judul"> Tambah Pegawai</h2>
<form method="POST" action="?hal=pegawai_update" enctype="multipart/form-data">
<input type="hidden" name="id" alue="<?php $data['id_pegawai'] ?>">

<div class="form-group">
<label for="foto"> FOTO </label>
<div class="input"><input type="file" id="foto" name="foto"><img src="image.<? $data['foto'] ?>" wdith="150px">
</div>
</div>

<div class="form-group">
<label for="nama"> NAMA PEGAWAI </label>
<div class="input"><input type="text" id="nama" name="nama" value="<?php $data['nama_pegawai'] ?>">
</div>
</div>

<div class="form-group">
<label for="jenis_kelamin"> JENIS KELAMIN </label>
<?php
if($data['jenis_kelamin'] == "L") {
    $l = " Checked";
    $p = "";
}else{
    $l ="";
    $p =" Checked";
}
?>
<input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="L" <?php $l ?>> Laki - Laki
<input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="P" <?php $p ?>> Perempuan
</div>

<div class="form-group">
<label for="tanggal"> TANGGAL </label>
<div class="input"><input type="date" id="tanggal_lahir" name="tanggal_lahir" value="<?php $data['tanggal_lahir'] ?>">
</div>
</div>

<div class="form-group">
<label for="jabatan"> JABATAN </label>
<div class="input">
<select id="jabatan" name="jabatan">
<option value=""> --Pilih Jabatan Anda-- </option>
<?php
$queryjabatan =mysqli_query($connect, "SELECT * FROM jabatan");
while($j = mysqli_fetch_array($queryjabatan)){
    echo "<option value='$j[id_jabatan]'";
    if($j['id_jabatan'] == $data['id_jabatan']) echo " Selected";
    echo">$j[nama_jabatan]</option>";
}
?>
</select>
</div>
</div>

<div class="form-group">
<label for="keterangan"> KETERANGAN </label>
<div class="input">
<textarea style="width: 100%" rows="5" id="keterangan" name="keterangan"><?php  $data['keterangan'] ?></textarea>
</div>
</div>

<div class="form-group">
<input type="submit" value="Simpan" class="tombol_simpan">
<input type="reset" value="Batal" class="tombol_reset">
</div>
</form>
