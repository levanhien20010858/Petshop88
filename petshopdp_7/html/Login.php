<?php
ini_set('display_errors', 'Off');
ini_set('error_reporting', E_ALL);
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);
?>
<?php
include '../classes/login.php';
?>
<?php
$err = [];
$class = new Login();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $logincheck = $class->login_email($email, $password);
  $err['email'] = isset($logincheck['email']) ? $logincheck['email'] : '';
  $err['password'] = isset($logincheck['password']) ? $logincheck['password'] : '';
}
?>
<?php
require "../inc/head.php";
?>
<link rel="stylesheet" href="../css/login1.css" />
<script src="../js/login.js" defer></script>

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
    <div class="login">
      <div class="login-left">
        <div class="logo">
          <img src="../images/logo.png" alt="logo" height="70" width="90" />
        </div>
        <p>Login using social media to get quick access</p>
        <div class="login-with">
          <div class="fb signin">
            <a href="https://www.facebook.com/">
              <i class="fa-brands fa-facebook" style="
                    color: rgb(255, 255, 255);
                    padding-right: 10px;
                    transform: scale(1.5, 1.5);
                  "></i><span>Signin with facebook</span></a>
          </div>
          <div class="tw signin">
            <a href="https://twitter.com/">
              <i class="fa-brands fa-twitter" style="
                    color: rgb(255, 255, 255);
                    padding-right: 10px;
                    margin-left: -20px;
                    transform: scale(1.5, 1.5);
                  "></i>
              <span>Signin with twitter</span></a>
          </div>
          <div class="gg signin">
            <a
              href="https://accounts.google.com/v3/signin/identifier?dsh=S-1659971053%3A1666445885125679&flowName=GlifWebSignIn&flowEntry=ServiceLogin&ifkv=AQDHYWqtHr_EhvMHaDngcRIIKHUXC3meeCZCNU_6qBuidnAz_XJnDIyr0cIkCIdsNhkv74-kH4c3"><i
                class="fa-brands fa-google" style="
                    color: rgb(255, 255, 255);
                    padding-right: 10px;
                    margin-left: -15px;
                    transform: scale(1.5, 1.5);
                  "></i>
              <span>Signin with google</span></a>
          </div>
          <a href="index.php" class="return-home">Home</a>
        </div>
      </div>
      <div class="login-right">
        <div class="login-heading">
          <h1 style="margin-top: 50px">Login to your account</h1>
          <p style="
                font-size: 15px;
                color: gray;
                padding-left: 25px;
                padding-top: 15px;
              ">
            Don't have an account? &ensp;<a href="SignUp.php">Sign up free!</a>
          </p>
        </div>
        <div class="login-content">
          <form action="" method="post" role="form">
            <div class="form-group">
              <input type="email" name="email" placeholder="Email address" id="email" />
              <div class="has-error">
                <span><?php echo (isset($err['email'])) ? $err['email'] : ''  ?></span>
              </div>
            </div>
            <div class="form-group">
              <input type="password" name="password" placeholder="Password" />
              <div class="has-error">
                <span><?php echo (isset($err['password'])) ? $err['password'] : ''  ?></span>
              </div>
            </div>
            <div class="rm-fp">
              <div class="rm">
                <input type="checkbox" value="lsRememberMe" id="rememberMe" />
                <span>Remember me</span>
              </div>
              <div class="fp">
                <a href="Forgotps.php" style="font-size: 15px">Forgot password?</a>
              </div>
            </div>
            <div class="form-group">
              <button onclick="lsRememberMe()">Login with email</button>
            </div>
          </form>
          <div class="return">
            <a href="index.php">
              <i class="fa-solid fa-arrow-left"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>