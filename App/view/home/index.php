<div class="container mb-5">

<div class="p-1 py-4 mb-3 border-bottom">
<b>Gocode.pw</b> Adalah situs untuk mencari tutorial pemrograman dalam bentuk artikel, video dan contoh kode.

<div class="input-group mt-3 p-0">
  <input type="text" class="form-control" placeholder="Cari Tutorial" aria-label="Cari Tutorial" aria-describedby="button-addon2">
  <button class="btn btn-dark" type="button" id="button-addon2">Cari</button>
</div>

</div>


<div class="row p-3 pb-0 mb-0">
<h4 class="p-0">
Pilih Tutorial
</h4>
</div>

<div class="container" >

<?php foreach($data['all'] as $a) :?>
<div class="row p-3 mb-2 bg-light">

<b class="p-0">
<a href="?url=home/page/<?= $a['kategori'] ;?>" class="p-0 text-decoration-none link">
<?= $a['kategori'] ;?>
</a>
</b>
<small class="p-0">
Kumpulan tutorial artikel, video dan contoh <?= $a['kategori'] ;?> tahun 2022
</small></div>
<?php endforeach ;?>

</div>
</div>

