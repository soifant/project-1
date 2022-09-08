

<div class="container">
<div class="row p-3 mt-3">

<h2><?= $data['title'] ;?></h2>
</div>
</div>


<div class="row p-2 m-3 mt-2">


<div class="bg-light border boerder-dark p-2">
<small>
<b>Tutorial artikel</b>
</small>

</div>

<?php 
if($data['artikel'][0]['tutorial'] == 'artikel') {
foreach($data['artikel'] as $d) : ?>
<div class="card mt-3" style="width: 100%;">
  <div class="card-body">
   
 
  <a class="text-decoration-none" href="<?= $d['link'] ;?>" ><?= $d['sub_judul'] ;?></a>
 <br>   <span class="badge bg-secondary"><?= $d['dari'] ;?></span>
   
   
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


<div class="mt-5 bg-light border boerder-dark p-2">
<small>
<b>Tutorial video</b>
</small>

</div>

<?php 
if($data['videp'][0]['tutorial'] == 'artikel') {
foreach($data['video'] as $d) : ?>
<div class="card mt-3" style="width: 100%;">
  <div class="card-body">
   
 
  <a class="text-decoration-none" href="<?= $d['link'] ;?>" ><?= $d['sub_judul'] ;?></a>
 <br>   <span class="badge bg-secondary"><?= $d['dari'] ;?></span>
   
   
  </div>
</div>

<?php endforeach ;
} else {
?>

<div class="card mt-3" style="width: 100%;">
  <div class="card-body">
   <center>
 <small>Tidak ada video</small>
  </h3>
  </div>
</div>

<?php } ?>

<div class="bg-light mt-5 border boerder-dark p-2">
<small>
<b>Contoh kode</b>
</small>

</div>

<?php 
if($data['contoh'][0]['tutorial'] == 'artikel') {
foreach($data['contoh'] as $d) : ?>
<div class="card mt-3" style="width: 100%;">
  <div class="card-body">
   
 
  <a class="text-decoration-none" href="<?= $d['link'] ;?>" ><?= $d['sub_judul'] ;?></a>
 <br>   <span class="badge bg-secondary"><?= $d['dari'] ;?></span>
   
   
  </div>
</div>

<?php endforeach ;
} else {
?>

<div class="card mt-3" style="width: 100%;">
  <div class="card-body">
   <center>
 <small>Tidak ada contoh</small>
  </h3>
  </div>
</div>

<?php } ?>


</div>
