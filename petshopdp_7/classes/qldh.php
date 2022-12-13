<?php
include '../lib/session.php';
include '../lib/database.php';
Session::checkSession();
?>
<?php
class Qldh
{
  private $db;
  public function __construct()
  {
    $this->db = new Database();
  }
  public function orders()
  {
    $query = "SELECT `order`.`id`,`order`.`fullname`,`order`.`email`,`order`.`address`, `order`.`phone_number`,`order`.`node`,`order`.`oder_date`,orderdetail.price,orderdetail.num,product.title FROM `order`,orderdetail,product  WHERE orderdetail.order_id = `order`.`id` AND orderdetail.product_id = product.id AND `order`.`status` = 2";
    $result = $this->db->select($query);
    // $value = $result->fetch_assoc();
    // return $value;
    return $result;
  }
  public function accept($id)
  {
    $query = "UPDATE `order` SET `status` = '1' WHERE `order`.`id` = '$id';";
    $result = $this->db->update($query);
  }
  public function refuse($id)
  {
    $query = "UPDATE `order` SET `status` = '4' WHERE `order`.`id` = '$id';";
    $result = $this->db->update($query);
  }
}