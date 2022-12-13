<?php
include '../lib/session.php';
include '../lib/database.php';
include '../classes/gh.php';
Session::checkSession();
class Cart
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
  public function customerAddress()
  {
    $email = Session::get('customer_email');
    $query = "SELECT `fullname`, `phone_number`, `address` FROM `customer` WHERE email = '$email'";
    $result = $this->db->select($query);
    $value = $result->fetch_assoc();
    return $value;
  }
  public function addOrder($sure, $node, $id_spp, $price_spp, $num_spp)
  {
    $email = Session::get('customer_email');
    $data = $this->customerAddress();
    $order_at = date("Y-m-d H:i:s");
    //Thêm vào bảng order
    $query1 = "INSERT INTO `order`(`fullname`, `email`, `phone_number`, `address`, `node`, `oder_date`, `status`) VALUES ('$data[fullname]','$email','$data[phone_number]','$data[address]','$node','$order_at','2')";
    $this->db->update($query1);
    //lấy id của order vừa thêm
    $query_id = "SELECT `order`.`id` FROM `order` WHERE id=(SELECT MAX(id) FROM `order`);";
    $result = $this->db->select($query_id);
    $value = $result->fetch_assoc();
    $id_order = $value['id'];
    //Thêm vào bảng orderdetail
    $query2 = "INSERT INTO `orderdetail`(`order_id`,`product_id`,`price`,`num`) VALUES ('$id_order','$id_spp','$price_spp','$num_spp');";
    $this->db->update($query2);
  }
}