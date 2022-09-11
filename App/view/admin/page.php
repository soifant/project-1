<div class="container mb-5">
<div class="pb-3 m-2 my-4 border-bottom">
<h4 class="p-0">
Tutorial <?= $data['title'] ;?>
</h4>
<small class="p-0">
Javascript adalah bahasa pemrograman untuk front end development, berikut adalah tutorialnya untuk dipelajari
</small>
<br>
<span class="badge bg-primary">Edit</span> 

<span class="badge bg-danger" data-bs-toggle="modal" data-bs-target="#<?= $data['title'] ;?>">
  hapus
</span>

<div class="modal fade" id="<?= $data['title'] ;?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Hapus</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Apakah anda yakin ingin menghapus <b><?= $data['title'] ;?></b>
      </div>
      <div class="modal-footer">
        <a href="/?url=admin/hapus/<?= $data['title'] ;?>" type="button" class="btn btn-danger">Ya</a>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tidak</button>
      </div>
    </div>
  </div>
</div>
</div>

<?php 
foreach($data['tutorial'] as $d) : ?>

<div class="row p-2 m-2 bg-light">
<a href="/?url=admin/post/<?= str_replace(' ', '-', trim($d['judul'])) ;?>" class="p-0 text-decoration-none link">
<b class="p-0">
<?= $d['judul'] ;?> 
</b></a>
</div>
<?php endforeach ;?>

</div>



