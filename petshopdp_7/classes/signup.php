<?php
include '../lib/session.php';
Session::checkLogin();
include '../lib/database.php';
include '../helpers/format.php';
date_default_timezone_set("Asia/Ho_Chi_Minh");
?>
<?php
class Signup
{
  private $db;
  private $fm;
  public function __construct()
  {
    $this->db = new Database();
    $this->fm = new Format();
  }
  public function check_email($email)
  {
    $email = $this->fm->validation($email);
    $query = "SELECT * FROM customer WHERE email = '$email'";
    $result = $this->db->select($query);
    if ($result != false) {
      $result = true;
      return $result;
    }
    return $result;
  }
  public function signup_email($name, $email, $password, $rpassword)
  {
    $email = $this->fm->validation($email);
    $password = $this->fm->validation($password);
    $rpassword = $this->fm->validation($rpassword);
    $err = [];
    if (empty($email) || empty($password) || empty($rpassword)) {
      if (empty($email)) {
        $err['email'] = 'Bạn chưa nhập email!';
      }
      if (empty($password)) {
        $err['password'] = 'Bạn chưa nhập password!';
      }
      if (empty($rpassword)) {
        $err['rpassword'] = 'Bạn chưa nhập password xác nhận!';
      }
      return $err;
    } else {
      if ($password == $rpassword) {
        $check = $this->check_email($email);
        if ($check != false) {
          $err['email'] = 'Email đã được đăng ký!';
        } else {
          $roleid = 2;
          $deleted = 1;
          $created_at = date("Y-m-d H:i:s");
          $pass = password_hash($password, PASSWORD_DEFAULT);
          $query = "INSERT INTO customer(role_id,fullname,email,password,deleted,created_at) VALUES ('$roleid','$name','$email','$pass','$deleted','$created_at')";
          $result = $this->db->insert($query);
          if ($result) {
            echo '<script language="javascript">
                alert("Đăng ký thành công");
                </script>';
            header('location:login.php');
          }
        }
      } else {
        $err['rpassword'] = 'Password xác nhận chưa chính xác!';
      }
      return $err;
    }
  }
}