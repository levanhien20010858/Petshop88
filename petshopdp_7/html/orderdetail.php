<?php
ini_set('display_errors', 'Off');
ini_set('error_reporting', E_ALL);
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);
?>
<?php
include '../classes/Orderdetail.php';
$class = new Order();
$data = $class->orderDetail();
$stt = 1;

if (isset($_POST["drop"]) && $_POST["drop"]) {
  $id = $_POST["drop"];
  $class->droporderDetail($id);
  $data = $class->orderDetail();
  header("Refresh:0");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia" />
  <link rel="icon" href="../images/meongu.jpg" />
  <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="icon" href="../images/logo.png" />
  <link rel="stylesheet" href="../css/order_detail.css" type="text/css" />
  <script src="../js/index.js"></script>
  <title>PETSHOP</title>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" />
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js">
  </script>
  <style>
  .dataTables_length {
    margin-bottom: 10px;
  }
  </style>
</head>

<body>
  <div class="wrapper">
    <div class="content">
      <div class="content-wrap">
        <div class="content-t">
          <ol>
            <li><a href="customer.php">Account </a></li>
            <li>&emsp;>&emsp;</li>
            <li>Oder Details</li>
          </ol>
          <h1>Oder Details</h1>
        </div>
        <div class="content-d">
          <div class="content-d-t">
            <div class="d-t-left">
              <table id="donhang" class="display" width="100%" data-page-length="10" data-order='[[ 0, "asc" ]]'>
                <thead>
                  <tr>
                    <th>STT</th>
                    <th>Product</th>
                    <th>Num</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Date</th>
                    <th data-orderable="false">Status</th>
                    <th data-orderable="false">Options</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- <tr>
                    <form action="" method="post">
                      <td>1</td>
                      <td>Pate nước sốt vị thịt bò PEDIGREE Pouch Beef</td>
                      <td>5</td>
                      <td>320,800đ</td>
                      <td>1,600,000</td>
                      <td>2022-11-03 19:41:15</td>
                      <td>
                        <div class="form-d daduyet"><span>Đã duyệt</span></div>
                      </td>
                      <td>
                        <a href="productdetails.php?id=1">Xem</a>
                        <input type="submit" value="Hủy">
                      </td>
                    </form>
                  </tr>
                  <tr>
                    <form action="" method="post">
                      <td>2</td>
                      <td>
                        Pate cho mèo vị nước sốt cá ngừ WHISKAS Tuna Flavour
                        Sauce
                      </td>
                      <td>5</td>
                      <td>1,320,800đ</td>
                      <td>6,600,000</td>
                      <td>2022-11-03 19:41:15</td>
                      <td>
                        <div class="form-d chuaduyet">
                          <span>Chưa duyệt</span>
                        </div>
                      </td>
                      <td>
                        <a href="productdetails.php?id= 2">Xem</a>
                        <input type="submit" value="Hủy">
                      </td>
                    </form>
                  </tr> -->
                  <?php foreach ($data as $key => $value) { ?>
                  <tr>
                    <form action="" method="POST">
                      <td><?= $stt++ ?></td>
                      <td><?php echo $value["title"]; ?></td>
                      <td><?php echo $value["num"]; ?></td>
                      <td><?php echo $value["price"]; ?>đ</td>
                      <td><?php echo $value["num"] * $value["price"]; ?></td>
                      <td><?php echo $value["oder_date"]; ?></td>
                      <td>
                        <?php if ($value["status"] == 1) { ?>
                        <div class="form-d daduyet" style="padding: 8px 3px 9px 11px;text-align: center;"><span>Đã
                            duyệt</span></div>
                        <?php } elseif ($value["status"] == 2) { ?>
                        <div class="form-d chuaduyet">
                          <span>Chưa duyệt</span>
                        </div>
                        <?php } elseif ($value["status"] == 3) { ?>
                        <div class="form-d giao">
                          <span>Giao thành công</span>
                        </div>
                        <?php } else { ?>
                        <div class="form-d"
                          style="background: red;border-radius: 5px;padding: 8px 3px 9px 11px;text-align: center;">
                          <span>Bị hủy</span>
                        </div>
                        <?php } ?>
                      </td>
                      <td>
                        <?php if ($value["status"] == 1) { ?>
                        <a href="productdetails.php?id=<?= $value["id"] ?>">Xem</a>
                        <input type="hidden" name="drop" value="<?= $value["order_id"] ?>">
                        <input type="submit" value="Hủy">
                        <?php } elseif ($value["status"] == 2) { ?>

                        <a href="productdetails.php?id=<?= $value["id"] ?>">Xem</a>
                        <input type="hidden" name="drop" value="<?= $value["order_id"] ?>">
                        <input type="submit" value="Hủy">

                        <?php } else { ?>
                        <a href="productdetails.php?id=<?php echo $value["id"] ?>">Xem</a>
                        <?php } ?>

                      </td>
                    </form>
                  </tr>
                  <?php } ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header">
      <div class="logo">
        <a href="index.php"><img src="../images/logo.png" alt="logo" height="70" width="90" /></a>
      </div>
      &emsp;&emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;
      <div class="login-gh">
        &emsp;&emsp;&emsp;
        <div class="dropdown" data-dropdown>
          <button class="link" data-dropdown-button>
            <i class="fa-solid fa-bars" data-dropdown-button></i>
            &emsp;&ensp;
            <em class="fa-solid fa-circle-user user" data-dropdown-button></em>
          </button>
          <div class="dropdown-menu">
            <?php if (isset($_SESSION['customer_email'])) { ?>
            <div class="dropdown-header">
              <a href="customer.php">Management Account</a><br />
              <a href="?action=logout">Log out</a><br />
            </div>
            <div class="dropdown-footer">
              <a href="">Feedback</a><br />
              <a href="">Introduce</a><br />
              <a href="">Help</a><br />
            </div>
            <?php if (isset($_GET['action']) && $_GET['action'] == 'logout') {
                Session::destroy();
              } ?>
            <?php } else { ?>
            <div class="dropdown-header">
              <a href="Login.php">Login</a><br />
              <a href="SignUp.php">Sign up</a><br />
            </div>
            <div class="dropdown-footer">
              <a href="">Feedback</a><br />
              <a href="">Introduce</a><br />
              <a href="">Help</a><br />
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
    <?php
    require "../inc/footer.php";
    ?>
  </div>
</body>
<script>
$(document).ready(function() {
  $("#donhang").DataTable();
});
</script>

</html>