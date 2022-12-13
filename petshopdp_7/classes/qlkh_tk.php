<?php
include '../lib/session.php';
include '../lib/database.php';
Session::checkSession();
?>
<?php
class Qlkhtk
{
  private $db;
  public function __construct()
  {
    $this->db = new Database();
  }
  public function customers()
  {
    $query = "SELECT * FROM customer";
    $result = $this->db->select($query);
    return $result;
  }
  public function pauseacc($email)
  {
    $query = "UPDATE `customer` SET `deleted` = '2' WHERE `customer`.`email` = '$email';";
    $result = $this->db->update($query);
  }
  public function activeaccount($email)
  {
    $query = "UPDATE `customer` SET `deleted` = '1' WHERE `customer`.`email` = '$email';";
    $result = $this->db->update($query);
  }
}
