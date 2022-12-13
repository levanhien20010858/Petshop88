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
<?php
require "../inc/head.php";
?>
<link rel="stylesheet" href="../css/customer.css" type="text/css" />
<script src="../js/index.js" defer></script>
</head>

<body>
  <div class="wrapper">
    <header>
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
    </header>
    <?php
    require "../inc/footer.php";
    ?>
    <div class="content">
      <div class="content-nd">
        <div class="content-start">
          <h1 style="margin-bottom: 10px">Account</h1>
          <span>Wellcome </span>
          <span style="color: #ff385c"><?php echo Session::get('customer_email') ?></span>
        </div>
        <div class="content-end">
          <div class="content-wrap">
            <a href="settingPersonal.php">
              <div class="wrap-mn">
                <div class="icon">
                  <h1><i class="fa-solid fa-address-card"></i></h1>
                </div>
                <div class="name">Personal info</div>
                <div class="detail">Provide personal detail &ensp;</div>
              </div>
            </a>
          </div>
          <div class="content-wrap">
            <a href="settingLogin.php">
              <div class="wrap-mn">
                <div class="icon">
                  <h1>
                    <i class="fa-solid fa-shield"></i>
                  </h1>
                </div>
                <div class="name">Login & security</div>
                <div class="detail">
                  Update your password <br />and secure your account
                </div>
              </div>
            </a>
          </div>
          <div class="content-wrap">
            <a href="settingPayment.php">
              <div class="wrap-mn">
                <div class="icon">
                  <h1><i class="fa-solid fa-credit-card"></i></h1>
                </div>
                <div class="name">Payment methods</div>
                <div class="detail">
                  Add or edit a payment<br />
                  method
                </div>
              </div>
            </a>
          </div>
          <div class="content-wrap">
            <a href="orderdetail.php">
              <div class="wrap-mn">
                <div class="icon">
                  <h1><i class="fa-sharp fa-solid fa-barcode"></i></h1>
                </div>
                <div class="name">Order details</div>
                <div class="detail">View all your orders &ensp;</div>
              </div>
            </a>
          </div>
          <div class="content-wrap">
            <a href="cart.php">
              <div class="wrap-mn">
                <div class="icon">
                  <h1><i class="fa-solid fa-cart-shopping"></i></h1>
                </div>
                <div class="name">Cart</div>
                <div class="detail">
                  Select products <br />
                  and buy them
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>