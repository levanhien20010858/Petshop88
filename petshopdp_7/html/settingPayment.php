<?php
ini_set('display_errors', 'Off');
ini_set('error_reporting', E_ALL);
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);
?>
<?php
include '../classes/setting_payment.php';
$pay = new Payment();
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//   $address = $_POST['Address'];
//   $value = $pay->changeaddress($address);
// }
?>
<?php
require "../inc/head.php";
?>
<link rel="stylesheet" href="../css/settingpayment.css" type="text/css" />
<script src="../js/settingpayment.js" defer></script>
</head>

<body>
  <div class="wrapper">
    <div class="content">
      <div class="content-wrap">
        <div class="content-t">
          <ol>
            <li><a href="customer.php">Account </a></li>
            <li>&emsp;>&emsp;</li>
            <li>Payment methods</li>
          </ol>
          <h1>Payment methods</h1>
        </div>
        <div class="content-d">
          <div class="content-d-t">
            <div class="d-t-left">
              <section>
                <div class="label">
                  <h2>Cash on delivery</h2>
                </div>
                <div class="label-nd">
                  <div class="label-nd-left">
                    <p>Delivery address</p>
                    <span>Phenikaa University</span><br />
                    <span>Last updated 22 days ago</span>

                    <form action="" method="post">
                      <div id="show-update">
                        <input type="text" name="Address" id="address" />
                        <input type="submit" value="Update address" id="update_address" />
                      </div>
                    </form>
                  </div>
                  <div class="label-nd-right">
                    <button type="button" onclick="input()" id="update">
                      Add
                    </button>
                  </div>
                </div>
              </section>
              <section>
                <div class="label">
                  <h2>Pay now</h2>
                </div>
                <div class="label-nd">
                  <div class="label-nd-left">
                    <p>Shop Wallet</p>
                    <span>Not linked</span>
                  </div>
                  <div class="label-nd-right">
                    <button>Links</button>
                  </div>
                </div>
                <div class="label-nd">
                  <div class="label-nd-left">
                    <p>Link bank account</p>
                    <span>Not linked</span>
                  </div>
                  <div class="label-nd-right">
                    <button>Links</button>
                  </div>
                </div>
                <div class="label-nd">
                  <div class="label-nd-left">
                    <p>Credit Card/Debit Card</p>
                    <span>Not linked</span>
                  </div>
                  <div class="label-nd-right">
                    <button>Links</button>
                  </div>
                </div>
              </section>
            </div>
            <div class="d-t-right">
              <i class="fa-solid fa-credit-card"></i>
              <h2>Make all payments through PETSHOP88</h2>
              <p>
                Always pay and communicate through Airbnb to ensure you're
                protected under our
                <u> Terms of Service</u>, <u> Payments Terms of Service</u>,
                cancellation, and other safeguards.
              </p>
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

</html>