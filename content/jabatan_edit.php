<?php
if(!defined('INDEX')) die("");

$query = mysqli_query($connect, "SELECT * FROM jabatan WHERE id_jabatan='$_GET[id_jabatan]'");
$data = mysqli_fetch_array($query);
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <h2 class="judul">Edit Jabatan</h2>
     <form action="?hal=jabatan_update" method="post">
       <input type="hidden" name="id" value="<?= $data['id_jabatan']
       ?>">

       <div class="form-group">
         <label for="nama">Nama</label>
         <div class="input">
           <input type="text" id="nama" name="nama" value="<?=
           $data['nama_jabatan'] ?>">

         </div>

       </div>
       <div class="form-group">
         <input type="submit" class="tombol simpan" value="Simpan">
         <input type="reset" class="tombol reset" value="Batal">

       </div>

     </form>
   </body>
 </html>
