<?php
foreach($data['artikel'] as $r):
?>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?= $r['title']; ?></h5>
    <p class="card-text"><?= $r['deskripsi']; ?></p>
    <a href="<?= $r['link']; ?>" class="card-link">Selengkapnya</a>
  </div>
</div>

<?php endforeach;?>

<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
