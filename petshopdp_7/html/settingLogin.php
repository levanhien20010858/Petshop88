<?php
ini_set('display_errors', 'Off');
ini_set('error_reporting', E_ALL);
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);
?>
<?php
include '../classes/setting_login.php';
$changepw = new Loginst();
$err = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $current_password = $_POST['Current_password'];
  $new_password = $_POST['New_password'];
  $confirm_password = $_POST['Confirm_password'];
  $sure = $_POST['sure'];
  $change = $changepw->changepassword($current_password, $new_password, $confirm_password);
  $err['new_password'] = isset($change['new_password']) ? $change['new_password'] : '';
  $err['current_password'] = isset($change['current_password']) ? $change['current_password'] : '';
  $err['confirm_password'] = isset($change['confirm_password']) ? $change['confirm_password'] : '';
  $Deactivate = $changepw->deactivate($sure);
}

?>
<?php
require "../inc/head.php";
?>
<link rel="stylesheet" href="../css/settingLogin.css" type="text/css" />
<script src="../js/settinglogin.js" defer></script>
</head>

<body>
  <div class="wrapper">
    <div class="content">
      <div class="content-wrap">
        <div class="content-t">
          <ol>
            <li><a href="customer.php">Account </a></li>
            <li>&emsp;>&emsp;</li>
            <li>Login & security</li>
          </ol>
          <h1>Login & security</h1>
        </div>
        <div class="content-d">
          <div class="content-d-t">
            <div class="d-t-left">
              <section>
                <div class="label">
                  <h2>Login</h2>
                </div>
                <form action="" method="POST">
                  <div class="label-nd">
                    <div class="label-nd-left">
                      <p>Password</p>

                      <span>Last updated 22 days ago</span>
                      <div id="show-update">
                        <p>Current password</p>
                        <input type="password" name="Current_password" id="password" />
                        <div class="has-err">
                          <span><?php echo (isset($err['current_password'])) ? $err['current_password'] : ''  ?></span>
                        </div>


                        <p>New password</p>
                        <input type="text" name="New_password" id="newpassword" />
                        <div class="has-err">
                          <span><?php echo (isset($err['new_password'])) ? $err['new_password'] : ''  ?></span>
                        </div>
                        <p>Confirm password</p>
                        <input type="text" name="Confirm_password" id="confirmpassword" />
                        <div class="has-err">
                          <span><?php echo (isset($err['confirm_password'])) ? $err['confirm_password'] : ''  ?></span>
                        </div>
                        <input type="submit" value="Update password" id="update_password" />
                      </div>
                    </div>
                    <div class="label-nd-right">
                      <button type="button" onclick="input()" id="update">
                        Update
                      </button>
                    </div>
                  </div>
                </form>
              </section>
              <section>
                <div class="label">
                  <h2>Social accounts</h2>
                </div>
                <div class="label-nd">
                  <div class="label-nd-left">
                    <p>Facebook</p>
                    <span>Not connected</span>
                  </div>
                  <div class="label-nd-right">
                    <button>Connect</button>
                  </div>
                </div>
                <div class="label-nd">
                  <div class="label-nd-left">
                    <p>Google</p>
                    <span>Not connected</span>
                  </div>
                  <div class="label-nd-right">
                    <button>Connect</button>
                  </div>
                </div>
                <div class="label-nd">
                  <div class="label-nd-left">
                    <p>Twitter</p>
                    <span>Not connected</span>
                  </div>
                  <div class="label-nd-right">
                    <button>Connect</button>
                  </div>
                </div>
              </section>
            </div>
            <div class="d-t-right">
              <i class="fa-sharp fa-solid fa-shield"></i>
              <h2>Keeping your account secure</h2>
              <p>
                We regularly review accounts to make sure they’re as secure as
                possible. We’ll also let you know if there’s more we can do to
                increase the security of your account.
              </p>
            </div>
          </div>
          <div class="content-d-d">
            <div class="label">
              <h2>Account</h2>
            </div>
            <div class="label-nd">
              <span style="padding-top: 10px">Deactivate your account</span>
              <button id="open-mod">Deactivate</button>
            </div>
          </div>
          <div class="modal" id="Modal">
            <div class="modal-nd">
              <div class="modal-hd">
                <h1>Deactivate</h1>
                <i class="fa-solid fa-xmark" id="close-mod"></i>
              </div>
              <div class="modal-ct">
                <i class="fa-solid fa-triangle-exclamation"></i>
                <h3>After deactivation, your account can be restored in 30 days.</h3>
                <h3>Are you sure you want to deactivate your account?</h3>
              </div>
              <form action="" method="post">
                <input type="hidden" name="sure" value="on">
                <div class="modal-ft">
                  <button>Deactivate</button>
                </div>
              </form>
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
                Session::destroyPro();
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
const openModal = document.getElementById("open-mod");
const closeModal = document.getElementById("close-mod");
const Modal = document.getElementById("Modal");
openModal.addEventListener("click", () => {
  Modal.classList.add("hiden");
});
closeModal.addEventListener("click", () => {
  Modal.classList.remove("hiden");
});
</script>

</html>