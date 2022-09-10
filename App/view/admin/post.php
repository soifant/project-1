<div class="container p-2">



<div class="row m-3">
<h2><?= $data['title'] ;?></h2>

<?php 
if($data['artikel'][0]['tutorial'] == 'artikel') {
foreach($data['artikel'] as $d) : ?>
<div class="card shadow-sm mt-3" style="width: 100%;">
  <div class="card-body">
   
 
  <a class="text-decoration-none" href="<?= $d['link'] ;?>" ><?= $d['sub_judul'] ;?></a>
 <br>   <span class="badge bg-secondary">Artikel</span> <span class="badge bg-primary">Edit</span> <span class="badge bg-danger">Hapus</span>
 
   
   
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
 <br>   <span class="badge bg-secondary">Video</span> <span class="badge bg-primary">Edit</span> <span class="badge bg-danger">Hapus</span>
 
   
   
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
 <br>   <span class="badge bg-secondary">Contoh</span> <span class="badge bg-primary">Edit</span> <span class="badge bg-danger">Hapus</span>
   
   
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


