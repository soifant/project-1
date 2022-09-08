


<div class="container-fluid bg-success white p-5">
<center>
<h3 class="mb-3">
Temukan semua tutorial pemrograman dalam bentuk artikel, video dan contoh kode
</h3>

<small>
Kita digunakan banyak orang untuk belajar pemrograman
</small>

<br>
<button class="btn btn-dark mt-3">
Mulai Belajar
</button>
</center>
</div>



<div class="container mt-4 mb-5 intro">

<div class="row p-4">
<b class="p-0">
<i class="fa-brands fa-readme"></i>Baca artikel
</b>
Baca artikel dari berbagai situs profesional untuk menaikan skill coding.
</div>

<div class="row p-4">
<b class="p-0">
<i class="fa-brands fa-youtube"></i>Tonton video
</b>
Tonton video dari profesional programer untuk memudahkan dalam belajar.
</div>

<div class="row p-4">
<b class="p-0">
<i class="fas fa-laptop-code"></i>
Contoh kode
</b>
Temukan banyak contoh kode dan kolaborasikan dengan code kamu.
</div>

</div>


<div class="container mb-5">

<center>
<?php foreach($data['all'] as $a) :?>
<div class="card shadow-sm mb-3" style="width: 19.5rem;">
  <div class="card-body">
    <h2 class="card-title">
    
    <li class="fa-brands fa-html5"> <?= $a['kategori'] ;?></li></h2>
    <p class="card-text">
    Kumpulan tutorial <?= $a['kategori'] ;?> artikel, video dan contoh kode</p>
    <a href="/?url=home/page/<?= $a['kategori'] ;?>">
    <button class="btn btn-sm btn-success white"><b>Pelajari</b></button></a>
    
    </a>
  </div>
</div>
<?php endforeach ;?>

</center>
</div>



