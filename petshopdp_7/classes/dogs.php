<?php
include '../lib/session.php';
Session::checkSessionLogin();
include '../lib/database.php';
?>
<?php
$category_id = 0;
if (isset($_GET['category_id']) == true) {
  $category_id = $_GET['category_id'];
}
$db = new Database();
$sql = "SELECT product.id,product.category_id,product.title,product.price,product.discount,product.thumbnail,product.classify_id,product.created_at,product.updated_at,product.star,product.sold,trademark.trademark_name,trademark.thumbnail_trademark FROM product,trademark WHERE classify_id = '1' AND category_id = $category_id AND product.trademark_id = trademark.id";
$kq = $db->select($sql);
?>
<?php
foreach ($kq as $row) { ?>
  <div class="card">
    <a href="productdetails.php?id=<?= $row["id"] ?>">
      <div class="image">
        <img src="<?= $row["thumbnail"]; ?>" alt="dog" class="card-image" />
        <span><?= $row["price"]; ?>đ</span>
      </div>
      <div class="card-content">
        <div class="card-top">
          <h3 class="card-title"><?= $row["title"]; ?></h3>
          <div class="card-user">
            <img src="<?= $row["thumbnail_trademark"]; ?>" alt="" class="card-user-avatar" />
            <div class="card-user-info">
              <div class="card-user-top">
                <h4 class="card-user-name"><?= $row["trademark_name"]; ?></h4>
              </div>
              <div class="card-user-online">USA</div>
            </div>
          </div>
          <div class="price-wrap"><span><?= $row["price"]; ?></span>đ</div>
        </div>
        <div class="card-bottom">
          <div class="card-star">
            <span><?= $row["star"]; ?></span>
            <i class="fa-solid fa-star"></i>
          </div>
          <div class="card-watching"><?= $row["sold"]; ?> đã bán</div>
        </div>
      </div>
    </a>
  </div>
<?php }

?>