<?php
include '../lib/session.php';
include '../lib/database.php';
Session::checkSession();
?>
<?php
class Loginst
{
  private $db;
  public function __construct()
  {
    $this->db = new Database();
  }
  public function changepassword($current_password, $new_password, $confirm_password)
  {
    $err = [];
    if (empty($current_password) || empty($new_password) || empty($confirm_password)) {
      if (empty($current_password)) {
        $err['current_password'] = 'Bạn chưa nhập mật khẩu hiện tại!';
      }
      if (empty($new_password)) {
        $err['new_password'] = 'Bạn chưa nhập password mới!';
      }
      if (empty($confirm_password)) {
        $err['confirm_password'] = 'Bạn chưa nhập xác nhận password!';
      }
      return $err;
    } else {
      if ($new_password == $confirm_password) {
        $email = Session::get('customer_email');
        $query = "SELECT * FROM customer WHERE email = '$email'";
        $result = $this->db->select($query);
        $value = $result->fetch_assoc();
        $checkPass = password_verify($current_password, $value["password"]);
        if ($checkPass) {
          $update_at = date("Y-m-d H:i:s");
          $pass = password_hash($new_password, PASSWORD_DEFAULT);
          $query = "UPDATE `customer` SET `updated_at` = '$update_at', `password` = '$pass' WHERE `customer`.`email` = '$email';";
          $result = $this->db->update($query);
          echo '<script language="javascript">
                alert("Đổi mật khẩu thành công!");
                </script>';
        } else {
          $err['current_password'] = 'Mật khẩu không đúng!';
        }
      } else {
        $err['confirm_password'] = 'Xác nhận password  chưa chính xác!';
      }
      return $err;
    }
  }
  public function deactivate($value)
  {
    if ($value == "on") {
      $email = Session::get('customer_email');
      $query = "UPDATE `customer` SET `deleted` = '2' WHERE `customer`.`email` = '$email';";
      $result = $this->db->update($query);
      if ($result) {
        Session::destroyPro();
      }
    }
  }
}
