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
  <link rel="stylesheet" href="../css/admin.css" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
  <div class="wrapper">
    <div class="content">
      <div class="bars">
        <h2>Admin</h2>
        <ul id="main-menu">
          <li>
            <h3>View</h3>
            <a href="admin.php" style="color: #ff385c"><i class="fa-solid fa-gauge"></i> Dashboard</a>
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
        <div class="c-r-hd">
          <div class="c-r-hd-3">
            <div class="c-r-hd-3-hd">
              <h2 id="h2-cl">Số đơn hàng trong ngày</h2>
              <h2>5</h2>
            </div>
            <div class="c-r-hd-3-ft">
              <h1>20,000,000đ</h1>
            </div>
          </div>
          <div class="c-r-hd-3">
            <div class="c-r-hd-3-hd">
              <h2 id="h2-cl">Số đơn hàng trong tuần</h2>
              <h2>23</h2>
            </div>
            <div class="c-r-hd-3-ft">
              <h1>200,000,000đ</h1>
            </div>
          </div>
          <div class="c-r-hd-3">
            <div class="c-r-hd-3-hd">
              <h2 id="h2-cl">Số đơn hàng trong tháng</h2>
              <h2>283</h2>
            </div>
            <div class="c-r-hd-3-ft">
              <h1>2,000,000,000đ</h1>
            </div>
          </div>
        </div>
        <div class="c-r-ft">
          <div class="c-r-ft-ct">
            <div>
              <canvas id="myChart">
              </canvas>
            </div>
            <div class="c-r-ft-ft">
              <p>Updated yesterday at 11:59 PM</p>
            </div>
          </div>
          <div class="c-r-ft-ct">
            <div>
              <canvas id="myChart1">
              </canvas>
            </div>
            <div class="c-r-ft-ft">
              <p>Updated yesterday at 11:59 PM</p>
            </div>
          </div>
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
<script>
const ctx = document.getElementById("myChart");
new Chart(ctx, {
  type: "bar",
  data: {
    labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
    datasets: [{
      label: "Orders of the week",
      data: [20, 5, 7, 8, 3, 10, 9],
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(255, 205, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(201, 203, 207, 0.2)'
      ],
      borderColor: [
        'rgb(255, 99, 132)',
        'rgb(255, 159, 64)',
        'rgb(255, 205, 86)',
        'rgb(75, 192, 192)',
        'rgb(54, 162, 235)',
        'rgb(153, 102, 255)',
        'rgb(201, 203, 207)'
      ],
      borderWidth: 1,
    }, ],
  },
  options: {
    scales: {
      y: {
        beginAtZero: true,
      },
    },
  },
});
const ctx1 = document.getElementById("myChart1");
new Chart(ctx1, {
  type: "bar",
  data: {
    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    datasets: [{
      label: "Orders of the Month",
      data: [400, 250, 270, 280, 230, 100, 290, 210, 120, 300, 90, 283],
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(255, 205, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(201, 203, 207, 0.2)'
      ],
      borderColor: [
        'rgb(255, 99, 132)',
        'rgb(255, 159, 64)',
        'rgb(255, 205, 86)',
        'rgb(75, 192, 192)',
        'rgb(54, 162, 235)',
        'rgb(153, 102, 255)',
        'rgb(201, 203, 207)'
      ],
      borderWidth: 1,
    }, ],
  },
  options: {
    scales: {
      y: {
        beginAtZero: true,
      },
    },
  },
});
</script>

</html>