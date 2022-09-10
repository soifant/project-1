<div class="container">
<div>
<a href="/?url=admin/tambahPost" class="text-decoration-none link card bg-light mt-4 p-2">
<center><small>Tambah tutorial</small></center>
</a>
</div>
<table class="table table-striped mt-3 border">
  <thead>
    <tr>
       <th scope="col">No</th>
      <th scope="col">Kategori</th>
      <th scope="col">Artikel</th>
      <th scope="col">Video</th>
      <th scope="col">Contoh</th>
      
    </tr>
  </thead>
  <tbody>
    
    <?php 
    $x=1;
    foreach($data['tutorial'] as $h) : ?>
    <tr>
    <th scope="row"><?= $x++ ;?></th>
      <td><a class="text-decoration-none link" href="/?url=admin/page/<?= $h['kategori'];?>">
      <?= $h['kategori'] ;?>
      </a></td>
      <td>Null</td>
      <td>Null</td>
      <td>Null</td>
      </tr>
      <?php endforeach ;?>
     
  </tbody>
</table>
</div>



