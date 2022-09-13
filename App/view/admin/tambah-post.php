<div class="m-4">

<!-- Tambah kategori -->
<?php if($data['page'] === 'kategori') : ?>
<form method="post" action="/?url=admin/tambah/kategori" >
  <input name="nama" placeholder="nama"  class="form-control border border-dark mb-2">
<button class="btn btn-block btn-dark">Tambah kategori</button>
</form>
<?php endif ;?>

<!-- Tambah tutorial -->
<?php if($data['page'] === 'tutorial') : ?>
<form method="post" action="/?url=admin/tambah/tutorial" >
  <input name="judul" placeholder="nama"  class="form-control border border-dark mb-2">
<input name="kategori" value="<?= $data['id_kategori'] ;?>" class="form-control border border-dark mb-2">


  <br>
  <button class="mt-2 btn btn-block btn-dark">Tambah tutorial</button>
</form>
<?php endif ;?>

<!-- Tambah post -->
<?php if($data['page'] === 'post') : ?>
  <form method="post" action="/?url=admin/tambah/post" >
  <input name="judul" placeholder="Judul"  class="form-control border border-dark mb-2">
   <input name="link" placeholder="link" class="form-control border border-dark mb-2">
  <input name="dari" placeholder="dari" class="form-control border border-dark mb-2">
  <input name="tutorial" value="<?= $data['id_tutorial'] ;?>" class="form-control border border-dark mb-2">
  <input name="kategori" value="<?= $data['id_kategori'] ;?>" class="form-control border border-dark mb-2">
  
  <label for="type">Type :</label>
  <select name="type" class="p-1" id="type">
	  <option value="artikel">Artikel</option>
	  <option value="video">Video</option>
	  <option value="contoh">Contoh</option>
    </select>
  
  
  <br>
  <button class="btn btn-block btn-dark mt-2">Tambah post</button>
  </form>
  <?php endif ;?>
  
  </div>
