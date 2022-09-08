



<div class="row p-2 m-3 mt-5">
<h3 class="p-0">
Tutorial artikel
</h3>
<?php
foreach($data['artikel'] as $d) : ?>

<ul>
<li>
<a class="text-decoration-none" data-bs-toggle="modal" href="#pengaturan<?= str_replace(' ', '_', trim($d['sub_judul'])) ;?>" role="button">
<?= $d['sub_judul'] ;?></a> (<?= $d['dari'] ;?>)</li>
</ul>


<div class="modal fade" id="pengaturan<?= str_replace(' ', '_', trim($d['sub_judul'])) ;?>" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel">Modal 1</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <b class="badge bg-secondary">Judul</b> <?= $d['sub_judul'] ;?>
      <br>
      <b class="badge bg-secondary">Link</b> <a href="<?= $d['link'] ;?>" ><?= $d['link'] ;?></a>
      <br>
      <b class="badge bg-secondary">Dari</b> <?= $d['dari'] ;?>
      </div>
      <div class="modal-footer">
        <button class="btn btn-danger" data-bs-target="#hapus<?= str_replace(' ', '_', trim($d['sub_judul'])) ;?>" data-bs-toggle="modal" data-bs-dismiss="modal">Hapus</button>
      <button class="btn btn-primary" data-bs-target="#private<?= str_replace(' ', '_', trim($d['sub_judul'])) ;?>" data-bs-toggle="modal" data-bs-dismiss="modal">Private</button>
      <button class="btn btn-warning" data-bs-target="#edit<?= str_replace(' ', '_', trim($d['sub_judul'])) ;?>" data-bs-toggle="modal" data-bs-dismiss="modal">Edit</button>
      
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="hapus<?= str_replace(' ', '_', trim($d['sub_judul'])) ;?>" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" style="color:red;" id="exampleModalToggleLabel2">Hapus artikel</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
           Apakah anda yakin ingin menghapus <?= $d['sub_judul'] ;?>
           </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-target="#pengaturan" data-bs-toggle="modal" data-bs-dismiss="modal">Tidak</button>
     <a href="?url=admin/hapus/<?= $d['id'] .'/'. str_replace(' ', '-', trim($d['judul'])) ;?>" class="btn btn-danger">Ya</a>
     
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="private<?= str_replace(' ', '_', trim($d['sub_judul'])) ;?>" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2" style="color:blue;">Private artikel</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
           Apakah anda yakin ingin menyembunyikan <?= $d['sub_judul'] ;?>
           </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-target="#pengaturan" data-bs-toggle="modal" data-bs-dismiss="modal">Tidak</button>
      <a href="?url=admin/privat/<?= $d['id'].'/'.str_replace(' ', '-', trim($d['judul']));?>" class="btn btn-primary">Ya</a>
      
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="edit<?= str_replace(' ', '_', trim($d['sub_judul'])) ;?>" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2">Edit tutorial</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">
      <form method="post" action="/?url=admin/edit/<?= str_replace(' ', '-', trim($d['judul'])) ;?>" >
      <input name="id" value="<?= $d['id'] ;?>" type="hidden" >
      <input name="sub_judul" value="<?= $d['sub_judul'] ;?>" class="form-control border border-dark mb-2">
      <input name="link" value="<?= $d['link'] ;?>" class="form-control border border-dark mb-2">
      <input name="dari" value="<?= $d['dari'] ;?>" class="form-control border border-dark mb-2">
      <button class="btn btn-block btn-success">Edit</button>
      </form>
      
      </div>
    
    </div>
  </div>
</div>

<?php endforeach ;?>
</div>


<div class="row p-2 m-3 mt-5">
<h3 class="p-0">
Tutorial video
</h3>
<?php
foreach($data['video'] as $d) : ?>

<ul>
<li>
<a class="text-decoration-none" data-bs-toggle="modal" href="#pengaturan<?= str_replace(' ', '_', trim($d['sub_judul'])) ;?>" role="button">
<?= $d['sub_judul'] ;?></a> (<?= $d['dari'] ;?>)</li>
</ul>


<div class="modal fade" id="pengaturan<?= str_replace(' ', '_', trim($d['sub_judul'])) ;?>" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel">Modal 1</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <b class="badge bg-secondary">Judul</b> <?= $d['sub_judul'] ;?>
      <br>
      <b class="badge bg-secondary">Link</b> <a href="<?= $d['link'] ;?>" ><?= $d['link'] ;?></a>
      <br>
      <b class="badge bg-secondary">Dari</b> <?= $d['dari'] ;?>
      </div>
      <div class="modal-footer">
        <button class="btn btn-danger" data-bs-target="#hapus<?= str_replace(' ', '_', trim($d['sub_judul'])) ;?>" data-bs-toggle="modal" data-bs-dismiss="modal">Hapus</button>
      <button class="btn btn-primary" data-bs-target="#private<?= str_replace(' ', '_', trim($d['sub_judul'])) ;?>" data-bs-toggle="modal" data-bs-dismiss="modal">Private</button>
      <button class="btn btn-warning" data-bs-target="#edit<?= str_replace(' ', '_', trim($d['sub_judul'])) ;?>" data-bs-toggle="modal" data-bs-dismiss="modal">Edit</button>
      
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="hapus<?= str_replace(' ', '_', trim($d['sub_judul'])) ;?>" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" style="color:red;" id="exampleModalToggleLabel2">Hapus artikel</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
           Apakah anda yakin ingin menghapus <?= $d['sub_judul'] ;?>
           </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-target="#pengaturan" data-bs-toggle="modal" data-bs-dismiss="modal">Tidak</button>
      <a href="?url=admin/hapus/<?= $d['id'] .'/'. str_replace(' ', '-', trim($d['judul'])) ;?>" class="btn btn-danger">Ya</a>
      
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="private<?= str_replace(' ', '_', trim($d['sub_judul'])) ;?>" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2" style="color:blue;">Private artikel</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
           Apakah anda yakin ingin menyembunyikan <?= $d['sub_judul'] ;?>
           </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-target="#pengaturan" data-bs-toggle="modal" data-bs-dismiss="modal">Tidak</button>
      <a href="?url=admin/privat/<?= $d['id'].'/'.str_replace(' ', '-', trim($d['judul']));?>" class="btn btn-primary">Ya</a>
      
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="edit<?= str_replace(' ', '_', trim($d['sub_judul'])) ;?>" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2">Edit tutorial</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">
      <form method="post" action="/?url=admin/edit/<?= str_replace(' ', '-', trim($d['judul'])) ;?>" >
      <input name="id" value="<?= $d['id'] ;?>" type="hidden" >
       <input name="sub_judul" value="<?= $d['sub_judul'] ;?>" class="form-control border border-dark mb-2">
      <input name="link" value="<?= $d['link'] ;?>" class="form-control border border-dark mb-2">
      <input name="dari" value="<?= $d['dari'] ;?>" class="form-control border border-dark mb-2">
      <button class="btn btn-block btn-success">Edit</button>
      </form>
      
      </div>
    
    </div>
  </div>
</div>

<?php endforeach ;?>
</div>


<div class="row p-2 m-3 mt-5">
<h3 class="p-0">
Contoh 
</h3>
<?php
foreach($data['contoh'] as $d) : ?>

<ul>
<li>
<a class="text-decoration-none" data-bs-toggle="modal" href="#pengaturan<?= str_replace(' ', '_', trim($d['sub_judul'])) ;?>" role="button">
<?= $d['sub_judul'] ;?></a> (<?= $d['dari'] ;?>)</li>
</ul>


<div class="modal fade" id="pengaturan<?= str_replace(' ', '_', trim($d['sub_judul'])) ;?>" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel">Modal 1</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <b class="badge bg-secondary">Judul</b> <?= $d['sub_judul'] ;?>
      <br>
      <b class="badge bg-secondary">Link</b> <a href="<?= $d['link'] ;?>" ><?= $d['link'] ;?></a>
      <br>
      <b class="badge bg-secondary">Dari</b> <?= $d['dari'] ;?>
      </div>
      <div class="modal-footer">
        <button class="btn btn-danger" data-bs-target="#hapus<?= str_replace(' ', '_', trim($d['sub_judul'])) ;?>" data-bs-toggle="modal" data-bs-dismiss="modal">Hapus</button>
      <button class="btn btn-primary" data-bs-target="#private<?= str_replace(' ', '_', trim($d['sub_judul'])) ;?>" data-bs-toggle="modal" data-bs-dismiss="modal">Private</button>
      <button class="btn btn-warning" data-bs-target="#edit<?= str_replace(' ', '_', trim($d['sub_judul'])) ;?>" data-bs-toggle="modal" data-bs-dismiss="modal">Edit</button>
      
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="hapus<?= str_replace(' ', '_', trim($d['sub_judul'])) ;?>" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" style="color:red;" id="exampleModalToggleLabel2">Hapus artikel</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
           Apakah anda yakin ingin menghapus <?= $d['sub_judul'] ;?>
           </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-target="#pengaturan" data-bs-toggle="modal" data-bs-dismiss="modal">Tidak</button>
      <a href="?url=admin/hapus/<?= $d['id'] ;?>" class="btn btn-danger">Ya</a>
      
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="private<?= str_replace(' ', '_', trim($d['sub_judul'])) ;?>" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2" style="color:blue;">Private artikel</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
           Apakah anda yakin ingin menyembunyikan <?= $d['sub_judul'] ;?>
           </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-target="#pengaturan" data-bs-toggle="modal" data-bs-dismiss="modal">Tidak</button>
    <a href="?url=admin/privat/<?= $d['id'].'/'.str_replace(' ', '-', trim($d['judul']));?>" class="btn btn-primary">Ya</a>
    
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="edit<?= str_replace(' ', '_', trim($d['sub_judul'])) ;?>" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2">Edit tutorial</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">
         <form method="post" action="/?url=admin/edit/<?= str_replace(' ', '-', trim($d['judul'])) ;?>" >
         <input name="id" value="<?= $d['id'] ;?>" type="hidden" >
         <input name="sub_judul" value="<?= $d['sub_judul'] ;?>" class="form-control border border-dark mb-2">
      <input name="link" value="<?= $d['link'] ;?>" class="form-control border border-dark mb-2">
      <input name="dari" value="<?= $d['dari'] ;?>" class="form-control border border-dark mb-2">
      <button class="btn btn-block btn-success">Edit</button>
      </form>
      
      </div>
    
    </div>
  </div>
</div>

<?php endforeach ;?>
</div>
