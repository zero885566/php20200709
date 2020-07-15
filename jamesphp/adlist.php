<?php
require __DIR__ .'/connect.php';
$pagename='adlist';
$perPage = 5;
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;

$t_sql = "SELECT COUNT(sid) FROM address_book";
// $sql ="SELECT*FROM address_book";
// $stmt =$pdo->query($sql);

$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];
$stmt = null;
if($totalRows > 0) {
    $totalPages = ceil($totalRows / $perPage);

    if ($page < 1) {
        header('Location: /jamesphp/adlist.php');
        exit; // die();
    }
    if ($page > $totalPages) {
        header("Location: /jamesphp/adlist.php?page=$totalPages");
        exit; // die();
    };
// echo"<div> $totalRows,$totalPages </div>";

$sql =sprintf("SELECT * FROM address_book ORDER BY 'sid' DESC LIMIT %s, %s", ($page-1)*$perPage, $perPage);
$stmt =$pdo->query($sql);
}
?>

<?php include __DIR__.'/header.php' ?>
<?php include __DIR__.'/nav.php' ?>
<div>
    <div>
    <nav aria-label="Page navigation example">
    <ul class="pagination">
    <li class="page-item  <?= $page==$i ? 'active' : '' ?>">
      <a class="page-link" href="?page=<?= $page-1 ?>" aria-label="Previous">
        <span aria-hidden="true"><i class="fas fa-arrow-circle-left" ></i></span>
      </a>
    </li>
    <?php for($i=1 ; $i<=$totalPages ; $i++): ?>
    <li class="page-item  <?= $page==$totalPages ? 'disabled' : '' ?>"><a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a></li>
    <?php endfor; ?>
    <li class="page-item <?= $page==1?'disabled':''?>">
      <a class="page-link" href="?page=<?= $page+1?>" aria-label="Next">
        <span aria-hidden="true"><i class="fas fa-arrow-circle-right"></i></span>
      </a>
    </li>
  </ul>
</nav>
    </div>
<table class="table table-dark">
 
  <tbody >
  <?php while($r = $stmt->fetch()): ?>
    <tr>
      <!-- <th scope="row">1</th> -->
      <td><?= $r['sid']?></td>
      <td><?= $r['name']?></td>
      <td><?= $r['email']?></td>
      <td><?= $r['mobile']?></td>
      <td><?= $r['birthday']?></td>
      <td><?= $r['address']?></td>
    </tr>
    <?php endwhile; ?>
    
  </tbody>
</table>

</div>

<?php include __DIR__.'/scripts.php' ?>

<?php include __DIR__.'/foot.php' ?>