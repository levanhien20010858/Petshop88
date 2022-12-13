<?php
include '../lib/session.php';
include '../lib/database.php';
Session::checkSession();
?>
<?php
class Payment
{
  private $db;
  public function __construct()
  {
    $this->db = new Database();
  }
  public function changeaddress($address)
  {
    $email = Session::get('customer_email');
    $query = "UPDATE `order` SET `address` = 'Phenikaa University' WHERE `order`.`email` = 1;";
    $result = $this->db->select($query);
    $value = $result->fetch_assoc();
  }
}