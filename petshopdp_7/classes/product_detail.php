<?php
include '../lib/session.php';
include '../lib/database.php';
Session::init();
?>
<?php

class Productdetail
{
  private $db;
  private $productid = 0;
  public function __construct()
  {
    $this->db = new Database();
  }

  public function product()
  {
    if (isset($_GET['id']) == true) {
      $this->productid = $_GET['id'];
    }
    if ($this->productid != 0) {
      $sql = "SELECT product.category_id,product.title,product.price,product.discount,product.thumbnail,classify_id.name,product.star,product.sold,trademark.trademark_name,trademark.thumbnail_trademark, productdetail.origin, productdetail.taste, productdetail.weight,productdetail.ageofuse,productdetail.node,productdetail.expiry FROM product,trademark,productdetail,classify_id WHERE productdetail.product_id = product.id AND product.trademark_id = trademark.id AND classify_id.id = product.classify_id AND product.id = $this->productid;";
      $kq = $this->db->select($sql);
      $value = $kq->fetch_assoc();
      return $value;
    }
  }
}
?>