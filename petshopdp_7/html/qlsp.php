<?php
ini_set('display_errors', 'Off');
ini_set('error_reporting', E_ALL);
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);
?>
<?php
include '../lib/session.php';
Session::checkSession();
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
  <link rel="stylesheet" href="../css/qlsp.css" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" />
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js">
  </script>
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
                <a href="qlsp.php" style="color: #ff385c"><i class="fa-solid fa-layer-group"></i> Quản lý sản phẩm</a>
              </li>
              <li class="tt">
                <a href="qldh.php">
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
          <h1>Quản lý sản phẩm</h1>
          <div class="addsp">
            <div class="add-label">
              <h2>Thêm sản phẩm</h2>
              <button type="button" id="add">Add</button>
            </div>

            <div class="add-content">
              <div class="add-content-left">
                <div class="input">
                  <p>Classify</p>
                  <input type="text" name="" id="" />
                </div>
                <div class="input">
                  <p>Category</p>
                  <input type="text" name="" id="" />
                </div>
                <div class="input">
                  <p>Title</p>
                  <input type="text" name="" id="" />
                </div>
                <div class="input">
                  <p>Trademark</p>
                  <input type="text" name="" id="" />
                </div>
                <div class="input">
                  <p>Thumbnail</p>
                  <input type="file" name="" id="" />
                </div>
                <div class="input">
                  <p>Price</p>
                  <input type="text" name="" id="" />
                </div>
                <div class="input">
                  <p>Discount</p>
                  <input type="text" name="" id="" />
                </div>
              </div>
              <div class="add-content-right">
                <div class="input">
                  <p>Star</p>
                  <input type="text" name="" id="" />
                </div>
                <div class="input">
                  <p>Sold</p>
                  <input type="text" name="" id="" />
                </div>
                <div class="input">
                  <p>Origin</p>
                  <input type="text" name="" id="" />
                </div>
                <div class="input">
                  <p>Taste</p>
                  <input type="text" name="" id="" />
                </div>
                <div class="input">
                  <p>Weight</p>
                  <input type="text" name="" id="" />
                </div>
                <div class="input">
                  <p>Ageofuse</p>
                  <input type="text" name="" id="" />
                </div>
                <div class="input">
                  <p>Node</p>
                  <input type="text" name="" id="" />
                </div>
              </div>
              <div class="load-inp">
                <input type="submit" value="Thêm sản phẩm" />
              </div>
            </div>
          </div>
          <h2>Sửa, xóa sản phẩm</h2>
          <table id="example" class="display" width="100%" data-page-length="10" data-order='[[ 0, "asc" ]]'>
            <thead>
              <tr>
                <th>STT</th>
                <th>Category</th>
                <th>Title</th>
                <th>Trademark</th>
                <th>Price</th>
                <th>Discount</th>
                <th data-orderable="false">Thumbnail</th>
                <th>Classify</th>
                <th>Origin</th>
                <th data-orderable="false">Taste</th>
                <th>Weight</th>
                <th>Ageofuse</th>
                <th data-orderable="false">Node</th>
                <th data-orderable="false">Function</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>1</td>
                <th>Food</th>
                <td>Amen</td>
                <td>MKB</td>
                <td>1.000.000 đ</td>
                <td>10</td>
                <td>Male</td>
                <td>dog</td>
                <td>USA</td>
                <td>cỏ</td>
                <td>1200</td>
                <td>12th</td>
                <td>No</td>
                <td>
                  <a href="delete.php?id= 1">Update</a><br />
                  <a href="delete.php?id= 1">Delete</a>
                </td>
              </tr>
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