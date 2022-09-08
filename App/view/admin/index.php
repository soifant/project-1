
<div class="row p-2 m-3">
<a href="/?url=admin/tambahPost" >
<button class="btn btn-block btn-success">Tambah artikel</button>
</a>
</div>

<div class="row p-2 m-3 mt-5">
<h3 class="p-0">
Semua tutorial
</h3>

<ul>
<?php foreach($data['tutorial'] as $h) : ?>
<li><a href="/?url=admin/post/<?= str_replace(' ', '-', trim($h['judul'])) ;?>" class="text-decoration-none" >
<?= $h['judul'] ;?></a>(<?= $h['kategori'];?>)
</li>
<?php endforeach ;?>
</ul>
</div>

