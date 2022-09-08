

<div class="row m-3 mt-5 mb-5">
<h3 class="p-0">Tutorial <?= $data['title'] ;?> </h3>
<?php 
foreach($data['tutorial'] as $d) : ?>

<a href="/?url=home/post/<?= str_replace(' ', '-', trim($d['judul'])) ;?>" class="text-decoration-none">
<div class="bg-light border mb-1 p-2"><b>
<small><?= $d['judul'] ;?></small></b>
</div>
</a>
<?php endforeach ;?>
</div>
<center>




