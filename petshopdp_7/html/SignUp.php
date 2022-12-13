<?php
ini_set('display_errors', 'Off');
ini_set('error_reporting', E_ALL);
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);
?>
<?php
include '../classes/signup.php';
$err = [];
$class = new Signup();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $rpassword = $_POST['rpassword'];
  $logincheck = $class->signup_email($name, $email, $password, $rpassword);
  $err['email'] = isset($logincheck['email']) ? $logincheck['email'] : '';
  $err['password'] = isset($logincheck['password']) ? $logincheck['password'] : '';
  $err['rpassword'] = isset($logincheck['rpassword']) ? $logincheck['rpassword'] : '';
}

?>
<?php
require "../inc/head.php";
?>
<link rel="stylesheet" href="../css/signup.css" />
<style>
.has-error {
  margin: -14px 0px 0px 0px;
  color: #ff4400;
  font-size: 13px;
}
</style>
</head>

<body>
  <div class="wraper">
    <div class="signup">
      <div class="signup-left">
        <div class="logo">
          <img src="../images/logo.png" alt="logo" height="70" width="90" />
        </div>
        <p>Sign up using social media to get quick access</p>
        <div class="signup-with">
          <div class="fb signin">
            <a href="https://www.facebook.com/">
              <i class="fa-brands fa-facebook" style="
                    color: rgb(255, 255, 255);
                    padding-right: 10px;
                    transform: scale(1.5, 1.5);
                  "></i>
              <span>Signup with facebook</span></a>
          </div>
          <div class="tw signin">
            <a href="https://twitter.com/"><i class="fa-brands fa-twitter" style="
                    color: rgb(255, 255, 255);
                    padding-right: 10px;
                    margin-left: -20px;
                    transform: scale(1.5, 1.5);
                  "></i><span>Signup with twitter</span></a>
          </div>
          <div class="gg signin">
            <a
              href="https://accounts.google.com/v3/signin/identifier?dsh=S-1659971053%3A1666445885125679&flowName=GlifWebSignIn&flowEntry=ServiceLogin&ifkv=AQDHYWqtHr_EhvMHaDngcRIIKHUXC3meeCZCNU_6qBuidnAz_XJnDIyr0cIkCIdsNhkv74-kH4c3"><i
                class="fa-brands fa-google" style="
                    color: rgb(255, 255, 255);
                    padding-right: 10px;
                    margin-left: -15px;
                    transform: scale(1.5, 1.5);
                  "></i><span>Signup with google</span></a>
          </div>
          <a href="index.php" class="return-home">Home</a>
        </div>
      </div>
      <div class="login-right">
        <div class="login-heading">
          <h1 style="margin-top: 30px">Sign up</h1>
        </div>
        <div class="login-content">
          <form action="" method="post">
            <div class="form-group">
              <input type="text" name="name" placeholder="Name" />
              <div class="has-error">
                <span><?php echo (isset($err['name'])) ? $err['name'] : '' ?></span>
              </div>
            </div>
            <div class="form-group">
              <input type="email" name="email" placeholder="Email address" />
              <div class="has-error">
                <span><?php echo (isset($err['email'])) ? $err['email'] : ''  ?></span>
              </div>
            </div>
            <div class="form-group">
              <input type="password" name="password" placeholder="password" />
              <div class="has-error">
                <span><?php echo (isset($err['password'])) ? $err['password'] : ''  ?></span>
              </div>
            </div>
            <div class="form-group">
              <input type="password" name="rpassword" placeholder="Repeat your password" />
              <div class="has-error">
                <span><?php echo (isset($err['rpassword'])) ? $err['rpassword'] : ''  ?></span>
              </div>
            </div>
            <div class="form-group">
              <button>Register</button>
            </div>
          </form>
          <div class="return">
            <a href="Login.php">
              <i class="fa-solid fa-arrow-left"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>