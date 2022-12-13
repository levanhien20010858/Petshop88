<?php
include '../lib/session.php';
Session::checkSession();
date_default_timezone_set("Asia/Ho_Chi_Minh");
include '../lib/database.php';

use FFI\ParserException;
?>
<?php
class Upload
{
  private $db;
  public function __construct()
  {
    $this->db = new Database();
  }
  public function loadpage()
  {
    $email = Session::get('admin_email');
    $query = "SELECT * FROM customer WHERE email = '$email'";
    $result = $this->db->select($query);
    $value = $result->fetch_assoc();
    return $value;
  }
  public function uploadfile($upload_name)
  {
    if ($upload_name) {
      $folder = '../uploads/';
      $file_path = $folder . $upload_name;
      $flag_ok = true;
      $fil_style = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));
      $file_format = array('jpeg', 'png', 'jpg', 'gif');
      if (!in_array($fil_style, $file_format)) {
        echo '<script language="javascript">
                alert("Xin lỗi, chỉ cho phép các tệp JPG, JPEG, PNG & GIF.");
                </script>';
        $flag_ok = false;
      }
      // Kiểm tra xem tệp đã tồn tại chưa
      // if (file_exists($file_path)) {
      //   echo '<script language="javascript">
      //           alert("Xin lỗi, tập tin đã tồn tại.");
      //           </script>';
      //   $flag_ok = false;
      // }
      // Kiểm tra xem tệp hình ảnh là hình ảnh thật hay hình ảnh giả mạo
      if ($flag_ok) {
        $check = getimagesize($_FILES["upload_file"]["tmp_name"]);
        if ($check) {
          $flag_ok = true;
        } else {
          echo '<script language="javascript">
                alert("File này không phải ảnh");
                </script>';
          $flag_ok = false;
        }
      }
      if ($flag_ok) {
        if (move_uploaded_file($_FILES["upload_file"]["tmp_name"], $file_path)) {
          //Thêm ảnh vào Database
          $email = Session::get('admin_email');
          $updated_at = date("Y-m-d H:i:s");
          $query = "UPDATE `customer` SET `thumbnail` = '$file_path', `updated_at` = '$updated_at' WHERE `customer`.`email` = '$email';";
          $result = $this->db->update($query);
          echo '<script language="javascript">
                alert(" Tải lên thành công");
                </script>';
        } else {
          echo '<script language="javascript">
                alert(" Rất tiếc, đã xảy ra lỗi khi tải lên tệp của bạn.");
                </script>';
        }
      }
    }
  }
  public function checkemail($email)
  {
    $query = "SELECT * FROM customer WHERE email = '$email';";
    $result = $this->db->select($query);
    if ($result == false) {
      return true;
    } else {
      return false;
    }
  }
  public function checkphone($phone)
  {
    $query = "SELECT * FROM customer WHERE phone_number = '$phone'";
    $result = $this->db->select($query);
    if ($result == false) {
      return true;
    } else {
      return false;
    }
  }
  public function editperson($name, $gender, $email, $phone, $address)
  {
    $value = $this->loadpage();
    if ($name == "") {
      $name = $value['fullname'];
    }
    if ($address == "") {
      $address = $value['address'];
    }
    if ($phone == "" && $email != "") {
      if ($this->checkemail($email) == true) {
        $id = $value['id'];
        $updated_at = date("Y-m-d H:i:s");
        $query = "UPDATE `customer` SET `fullname` = '$name',`gender` = '$gender',`email` = '$email', `address` = '$address',`updated_at` = '$updated_at' WHERE `customer`.`id` = '$id';";
        $result = $this->db->update($query);
        if ($result) {
          Session::destroy();
        }
      } else {
        echo '<script>
                alert("Email này đã được sử dụng! Vui lòng sử dụng email khác0!");
                </script>';
      }
    }
    if ($phone != "" && $email == "") {
      if ($this->checkphone($phone) == true) {
        $email = Session::get('admin_email');
        $updated_at = date("Y-m-d H:i:s");
        $query = "UPDATE `customer` SET `fullname` = '$name',`gender` = '$gender',`phone_number` = '$phone', `address` = '$address',`updated_at` = '$updated_at' WHERE `customer`.`email` = '$email';";
        $result = $this->db->update($query);
      } else {
        echo '<script>
                alert("Phone number này đã được sử dụng! Vui lòng sử dụng phone number khác1!");
                </script>';
      }
    } elseif ($phone != "" && $email != "") {
      echo "cc";
    } elseif ($phone == "" && $email == "") {
      $email = Session::get('admin_email');
      $updated_at = date("Y-m-d H:i:s");
      $query = "UPDATE `customer` SET `fullname` = '$name',`gender` = '$gender', `address` = '$address',`updated_at` = '$updated_at' WHERE `customer`.`email` = '$email';";
      $result = $this->db->update($query);
    }
  }
}