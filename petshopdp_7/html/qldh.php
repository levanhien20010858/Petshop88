<?php
ini_set('display_errors', 'Off');
ini_set('error_reporting', E_ALL);
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);
?>
<?php
include '../classes/qldh.php';
$class = new Qldh();
$data = $class->orders();
$stt = 0;
if (isset($_POST["accept"]) && $_POST["accept"]) {
  $id = $_POST["accept"];
  $class->accept($id);
  header("Refresh:0");
}
if (isset($_POST["refuse"]) && $_POST["refuse"]) {
  $id = $_POST["refuse"];
  $class->refuse($id);
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
  <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
  <link rel="icon" href="../images/logo.png" />
  <title>PETSHOP</title>
  <link rel="stylesheet" href="../css/qldh.css" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" />
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js">
  </script>
  <style>
  input[type="submit"] {
    width: 60px;
    height: 30px;
    font-size: 17px;
    border: 0.1px solid gray;
    background: white;
    color: while;
    cursor: pointer;
    margin-bottom: 3px;
    border-radius: 4px;
  }

  input[type="submit"]:hover {
    background: #ff385c;
  }
  </style>
</head>

<body>
  <div class="wrapper">
    <div class="content">
      <div class="bars">
        <h2>Admin</h2>
        <ul id="main-menu">
          <li>
            <h3>View</h3>
            <a href="admin.php"><i class="fa-solid fa-gauge"></i> Dashboard</a>
          </li>
          <li>
            <h3>Page quản lý</h3>
            <ul>
              <li>
                <p id="qlkh" style="color: wheat">
                  <i class="fa-solid fa-users"></i> Quản lý khách hàng
                </p>
                <ul class="sub-menuu" id="sub-menu">
                  <li><a href="qlkh_tk.php">Tài Khoản</a></li>
                  <li><a href="qlkh_dh.php">Đơn hàng</a></li>
                </ul>
              </li>
              <li class="tt">
                <!-- <p id="qlsp">
                    <i class="fa-solid fa-layer-group"></i> Quản lý sản phẩm
                  </p> -->
                <!-- <ul class="sub-menuu" id="sub-menu1">
                    <li><a href="">Tài Khoản</a></li>
                    <li><a href="">Đơn hàng</a></li>
                    <li><a href="">Đơn hàng</a></li>
                  </ul> -->
                <a href="qlsp.php"><i class="fa-solid fa-layer-group"></i> Quản lý sản phẩm</a>
              </li>
              <li class="tt">
                <a href="qldh.php" style="color: #ff385c">
                  <i class="fa-regular fa-clipboard"></i> Quản lý đơn hàng
                </a>
              </li>
            </ul>
          </li>
          <li>
            <h3>Support</h3>
            <a href="mess.php"><i class="fa-solid fa-comment"></i> Customer assistance</a>
          </li>
        </ul>
      </div>
      <div class="content-right">
        <div class="container">
          <h1>Duyệt đơn hàng</h1>

          <table id="example" class="display" width="100%" data-page-length="10" data-order='[[ 0, "asc" ]]'>
            <thead>
              <tr>
                <th>STT</th>
                <th>Name</th>
                <th data-orderable="false">Email</th>
                <th>Address</th>
                <th data-orderable="false">Phone Number</th>
                <th>Product</th>
                <th>Num</th>
                <th>Price</th>
                <th>Total</th>
                <th data-orderable="false">Node</th>
                <th>Order Date</th>
                <th data-orderable="false">Function</th>
              </tr>
            </thead>
            <tbody>

              <?php foreach ($data as $key => $value) { ?>
              <?php $stt++ ?>
              <tr>
                <td><?php echo $stt ?></td>
                <td><?php echo $value["fullname"] ?></td>
                <td><?php echo $value["email"] ?></td>
                <td><?php echo $value["address"] ?></td>
                <td><?php echo $value["phone_number"] ?></td>
                <td><?php echo $value["title"] ?></td>
                <td><?php echo $value["num"] ?></td>
                <td><?php echo number_format($value["price"]) ?>đ</td>
                <td><?php echo number_format($value["num"] * $value["price"]) ?></td>
                <td><?php echo $value["node"] ?></td>
                <td><?php echo $value["oder_date"] ?></td>
                <td>
                  <form action="" method="post"><input type="hidden" name="accept" value="<?php echo $value["id"] ?>">
                    <input type="submit" value="Accept"><br />
                  </form>
                  <form action="" method="post"><input type="hidden" name="refuse" value="<?php echo $value["id"] ?>">
                    <input type="submit" value="Refuse">
                  </form>

                </td>
              </tr>
              <?php } ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>
    <header>
      <div class="logo">
        <a href=""><img src="../images/logo.png" alt="logo" height="70" width="90" /></a>
        <button type="button" id="bar">
          <i class="fa-solid fa-bars"></i>
        </button>
      </div>

      <div class="login-gh">
        <div class="mail">
          <button id="mail-button">
            <i class="fa-solid fa-bell"></i>
          </button>
          <div class="mail-content">
            <div class="mail-hd">
              <h3>Browse orders</h3>
            </div>
            <div class="mail-text">
              <ul id="content">
                <li>
                  <a href="">
                    <div class="card-user">
                      <img src="../images/anh.jpg" alt="" class="card-user-avatar" />
                      <div class="card-user-info">
                        <div class="card-user-online">December 12, 2022</div>
                        <div class="card-user-top">
                          <span class="card-user-name">Hien: Balo đựng chó mèo dáng hộp mặt lưới LOFFE
                            Pet Space Backpack</span>
                        </div>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
            <a href="qldh.php">
              <div class="mail-ft">Show all</div>
            </a>
          </div>
        </div>

        &emsp;&emsp;&emsp;
        <div class="dropdown" data-dropdown>
          <button class="link" data-dropdown-button>
            <i class="fa-solid fa-bars" data-dropdown-button></i>
            &emsp;&ensp;
            <em class="fa-solid fa-circle-user user" data-dropdown-button></em>
          </button>
          <div class="dropdown-menu">
            <?php if (isset($_SESSION['admin_email'])) { ?>
            <div class="dropdown-header">
              <a href="admin.php">Management page</a><br />
              <a href="?action=logout">Log out</a><br />
              <?php if (isset($_GET['action']) && $_GET['action'] == 'logout') {
                  Session::destroy();
                } ?>
            </div>
            <div class="dropdown-footer">
              <a href="account.php">Account</a><br />

            </div>
            <?php } else { ?>
            <div class="dropdown-header">
              <a href="Login.php">Login</a><br />
              <a href="SignUp.php">Sign up</a><br />
            </div>
            <div class="dropdown-footer">
              <a href="account.php">Feedback</a><br />
              <a href="">Introduce</a><br />
              <a href="">Help</a><br />
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </header>
    <footer>
      <span>@Coppyright Lê Văn Hiển</span>
      &emsp;
      <button id="footer-button">
        <i class="fa-solid fa-chevron-down" id="xuong" style="display: none"></i>
        <i class="fa-solid fa-chevron-up" id="len"></i>
      </button>
      <div id="footer" style="display: none">
        <h2>Phenikaa University</h2>
        <p>Sản phẩm độc quyền</p>
      </div>
    </footer>
  </div>
</body>
<script type="text/javascript" src="../js/admin.js"></script>

</html>