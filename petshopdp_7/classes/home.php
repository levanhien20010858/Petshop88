<?php
include '../lib/session.php';
include '../lib/database.php';
Session::checkSessionLogin();
date_default_timezone_set("Asia/Ho_Chi_Minh");
?>
<?php
class Home
{
  private $db;
  public function __construct()
  {
    $this->db = new Database();
  }
  public function hmoe111($animal)
  {
    if ($animal == "cat") {
      $query_cat = "SELECT product.id,product.category_id,product.title,product.price,product.discount,product.thumbnail,product.classify_id,product.created_at,product.updated_at,product.star,product.sold,trademark.trademark_name,trademark.thumbnail_trademark FROM product,trademark WHERE classify_id = '2' AND product.trademark_id = trademark.id";
      $result_cat = $this->db->select($query_cat);
      return $result_cat;
    }
    if ($animal == "dog") {
      $query_dog = "SELECT product.id,product.category_id,product.title,product.price,product.discount,product.thumbnail,product.classify_id,product.created_at,product.updated_at,product.star,product.sold,trademark.trademark_name,trademark.thumbnail_trademark FROM product,trademark WHERE classify_id = '1' AND product.trademark_id = trademark.id ";
      $result_dog = $this->db->select($query_dog);
      return $result_dog;
    }
  }
}