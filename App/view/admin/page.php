<div class="container mb-5">
<div class="row pb-3 m-2 my-4 border-bottom">
<h4 class="p-0">
Tutorial <?= $data['title'] ;?>
</h4>
<small class="p-0">
Javascript adalah bahasa pemrograman untuk front end development, berikut adalah tutorialnya untuk dipelajari
</small>
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



