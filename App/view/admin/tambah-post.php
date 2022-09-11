<div class="m-4">

<!-- Tambah kategori -->
<?php if($data['page'] === 'kategori') : ?>
<form method="post" action="/?url=admin/tambah" >
  <input name="nama" placeholder="nama"  class="form-control border border-dark mb-2">
<button class="btn btn-block btn-dark">Tambah kategori</button>
</form>
<?php endif ;?>

<!-- Tambah tutorial -->
<?php if($data['page'] === 'tutorial') : ?>
<form method="post" action="/?url=admin/tambah" >
  <input name="nama" placeholder="nama"  class="form-control border border-dark mb-2">

<label for="kategori">Kategori :</label>
  <select class="p-1" id="kategori">
  <option value="html">Html</option>
  <option value="css">Css</option>
  <option value="js">Js</option>
  <option value="php">PHP</option>
  </select>
  <br>
  <button class="mt-2 btn btn-block btn-dark">Tambah tutorial</button>
</form>
<?php endif ;?>

<!-- Tambah post -->
<?php if($data['page'] === 'post') : ?>
  <form method="post" action="/?url=admin/tambah" >
  <input name="judul" placeholder="Judul"  class="form-control border border-dark mb-2">
   <input name="link" placeholder="link" class="form-control border border-dark mb-2">
  <input name="dari" placeholder="dari" class="form-control border border-dark mb-2">
  
  
  <label for="kategori">Kategori :</label>
  <select class="p-1" id="kategori">
  <option value="html">Html</option>
  <option value="css">Css</option>
  <option value="js">Js</option>
  <option value="php">PHP</option>
  </select>
  
  <label for="judul">Judul :</label>
  <select class="p-1" id="judul">
  <option value="html">Html</option>
  <option value="css">Css</option>
  <option value="js">Js</option>
  <option value="php">PHP</option>
  </select>
  
  <br>
  <button class="btn btn-block btn-dark mt-2">Tambah post</button>
  </form>
  <?php endif ;?>
  
  </div>
