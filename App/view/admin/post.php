

<div class="container p-2">



<div class="m-3">
<h2><?= $data['title'] ;?></h2> 
<a href="/" ><span class="badge bg-primary">Edit</span></a>
<span class="badge bg-danger" data-bs-toggle="modal" data-bs-target="#<?= str_replace(' ', '_', trim($data['title'])) ;?>">
  hapus
</span>

<div class="modal fade" id="<?= str_replace(' ', '_', trim($data['title'])) ;?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
        <a href="/?url=admin/hapus/<?= str_replace(' ', '_', trim($data['title'])) ;?>" type="button" class="btn btn-danger">Ya</a>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tidak</button>
      </div>
    </div>
  </div>
</div>

<?php 
if($data['artikel'][0]['tutorial'] == 'artikel') {
foreach($data['artikel'] as $d) : ?>
<div class="card shadow-sm mt-3" style="width: 100%;">
  <div class="card-body">
   
 
  <a class="text-decoration-none" href="<?= $d['link'] ;?>" ><?= $d['sub_judul'] ;?></a>
 <br>   <span class="badge bg-secondary">Artikel</span> <span class="badge bg-primary">Edit</span> 
 <span href="#" class="badge bg-danger" data-bs-toggle="modal" data-bs-target="#<?= str_replace(' ', '_', trim($d['sub_judul'])).$d['id'] ;?>">
 hapus
 </span>
 
 <div class="modal fade" id="<?= str_replace(' ', '_', trim($d['sub_judul'])).$d['id'] ;?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
 <div class="modal-dialog">
 <div class="modal-content">
 <div class="modal-header">
 <h5 class="modal-title" id="staticBackdropLabel">Hapus</h5>
 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
 </div>
 <div class="modal-body">
 Apakah anda yakin ingin menghapus <b><?= $d['sub_judul'] ;?></b>
 </div>
 <div class="modal-footer">
 <a href="/?url=admin/hapus/<?= $d['id'] ;?>" type="button" class="btn btn-danger">Ya</a>
 <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tidak</button>
 </div>
 </div>
 </div>
 </div>
   
   
  </div>
</div>

<?php endforeach ;
} else {
?>

<div class="card mt-3" style="width: 100%;">
  <div class="card-body">
   <center>
 <small>Tidak ada arikel</small>
  </h3>
  </div>
</div>

<?php } ?>


<?php 
if($data['artikel'][0]['tutorial'] == 'artikel') {
foreach($data['artikel'] as $d) : ?>
<div class="card shadow-sm mt-3" style="width: 100%;">
  <div class="card-body">
   
 
  <a class="text-decoration-none" href="<?= $d['link'] ;?>" ><?= $d['sub_judul'] ;?></a>
 <br>   <span class="badge bg-secondary">Video</span> <span class="badge bg-primary">Edit</span> 
 <span class="badge bg-danger" data-bs-toggle="modal" data-bs-target="#<?= str_replace(' ', '_', trim($d['sub_judul'])).$d['id'] ;?>">
 hapus
 </span>
 
 <div class="modal fade" id="<?= str_replace(' ', '_', trim($d['sub_judul'])).$d['id'] ;?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
 <div class="modal-dialog">
 <div class="modal-content">
 <div class="modal-header">
 <h5 class="modal-title" id="staticBackdropLabel">Hapus</h5>
 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
 </div>
 <div class="modal-body">
 Apakah anda yakin ingin menghapus <b><?= $d['sub_judul'] ;?></b>
 </div>
 <div class="modal-footer">
 <a href="/?url=admin/hapus/<?= $d['id'] ;?>" type="button" class="btn btn-danger">Ya</a>
 <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tidak</button>
 </div>
 </div>
 </div>
 </div>
   
   
  </div>
</div>

<?php endforeach ;
} else {
?>

<div class="card mt-3" style="width: 100%;">
  <div class="card-body">
   <center>
 <small>Tidak ada arikel</small>
  </h3>
  </div>
</div>

<?php } ?>

<?php 
if($data['artikel'][0]['tutorial'] == 'artikel') {
foreach($data['artikel'] as $d) : ?>
<div class="card shadow-sm mt-3" style="width: 100%;">
  <div class="card-body">
   
 
  <a class="text-decoration-none" href="<?= $d['link'] ;?>" > <?= $d['sub_judul'] ;?> </a>
 <br>   <span class="badge bg-secondary">Contoh</span> <span class="badge bg-primary">Edit</span> 
 <span class="badge bg-danger" data-bs-toggle="modal" data-bs-target="#<?= str_replace(' ', '_', trim($d['sub_judul'])).$d['id'] ;?>">
 hapus
 </span>
 
 <div class="modal fade" id="<?= str_replace(' ', '_', trim($d['sub_judul'])).$d['id'] ;?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
 <div class="modal-dialog">
 <div class="modal-content">
 <div class="modal-header">
 <h5 class="modal-title" id="staticBackdropLabel">Hapus</h5>
 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
 </div>
 <div class="modal-body">
 Apakah anda yakin ingin menghapus <b><?= $d['sub_judul'] ;?></b>
 </div>
 <div class="modal-footer">
 <a href="/?url=admin/hapus/<?= $d['id'] ;?>" type="button" class="btn btn-danger">Ya</a>
 <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tidak</button>
 </div>
 </div>
 </div>
 </div>
   
  </div>
</div>

<?php endforeach ;
} else {
?>

<div class="card mt-3" style="width: 100%;">
  <div class="card-body">
   <center>
 <small>Tidak ada arikel</small>
  </h3>
  </div>
</div>

<?php } ?>





</div>
</div>
