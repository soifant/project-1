<div class="container">

<a class="text-decoration-none link card bg-light mt-4 p-2" href="?url=admin/tambahData/kategori">
 <small>Tambah</small>
  </a>

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
    foreach($data['kategori'] as $h) : ?>
    <tr>
    <th scope="row"><?= $x++ ;?></th>
      <td><a class="text-decoration-none link" href="/?url=admin/page/<?= $h['nama'];?>">
      <?= $h['nama'] ;?>
      </a></td>
      <td><?php 
      $artikel = 'artikel'.$h['nama'].'';
	      foreach($data[$artikel][0] as $dt){
		  echo $dt[0];
      }?></td>
       
       <td><?php 
       $video = 'video'.$h['nama'].'';
	       foreach($data[$video][0] as $dt){
	       echo $dt[0];
       }?></td>
       
       <td><?php 
       $contoh = 'contoh'.$h['nama'].'';
	       foreach($data[$contoh][0] as $dt){
	       echo $dt[0];
       }?></td>
         
         </tr>
      <?php endforeach ;?>
     
  </tbody>
</table>
</div>



