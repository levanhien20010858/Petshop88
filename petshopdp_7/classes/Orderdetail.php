<?php
include '../lib/session.php';
include '../lib/database.php';
Session::checkSession();
class Order
{
  private $db;
  public function __construct()
  {
    $this->db = new Database();
  }
  public function orderDetail()
  {
    $email = Session::get('customer_email');
    $query = "SELECT product.title,product.id, `order`.oder_date, `order`.status, orderdetail.order_id, orderdetail.num,orderdetail.price FROM product,`order`,orderdetail WHERE orderdetail.order_id = `order`.`id` AND orderdetail.product_id = product.id AND `order`.`email` = '$email';";
    $result = $this->db->select($query);
    return $result;
  }
  public function droporderDetail($id)
  {
    $query = "DELETE FROM `order` WHERE `order`.`id` = '$id'";
    $result = $this->db->delete($query);
    if (!$result) {
      echo '<script language="javascript">
                alert("Hủy đơn thành công đơn hàng!");
                </script>';
    }
  }
}