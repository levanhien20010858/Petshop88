<?php
ini_set('display_errors', 'Off');
ini_set('error_reporting', E_ALL);
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);
?>
<?php
include '../classes/admin_account.php';
$upload =  new Upload();
$value = $upload->loadpage();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['inputname'];
  $gender = $_POST['inputgender'];
  $email = $_POST['inputemail'];
  $phone = $_POST['inputphone'];
  $address = $_POST['inputaddress'];
  $upload->uploadfile($_FILES['upload_file']['name']);
  $upload->editperson($name, $gender, $email, $phone, $address);
  // var_dump($email, $phone);
  //load page
  $upload->loadpage();
  header("Refresh:0");
}

?>
<?php
require "../inc/head.php";
?>
<link rel="stylesheet" href="../css/settingpersonal.css" type="text/css" />
<script src="../js/settingperson.js" defer></script>
</head>

<body>
  <div class="wrapper">
    <header>
      <div class="logo">
        <a href=""><img src="../images/logo.png" alt="logo" height="70" width="90" /></a>
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
    <?php
    require "../inc/footer.php";
    ?>
    <div class="content">
      <div class="wrap">
        <div class="content-t">
          <ol>
            <li><a href="admin.php">Management Page</a></li>
            <li>&emsp;>&emsp;</li>
            <li>Account Admin</li>
          </ol>
        </div>
        <form action="" enctype="multipart/form-data" method="POST">
          <div class="content-left">
            <img src="<?php print $value['thumbnail'] ?>" alt="" />
            <input type="file" name="upload_file"><br>
          </div>
          <div class="content-right">
            <h2 style="text-align: center; padding: 10px 10px 20px 0px">
              Person info
            </h2>
            <div class="content-ct">
              <div class="ndd">
                <!-- Name -->
                <div class="nddd">
                  <div class="ndd-left">
                    <h3 style="padding-bottom: 5px; padding-top: 10px">Name</h3>
                    <div class="name">
                      <span style="color: gray; margin-bottom: 10px"><?php echo $value['fullname'] ?></span>
                      <input type="text" name="inputname" id="name">
                    </div>
                  </div>
                  <div class="ndd-right">
                    <button type="button" onclick="input('name')">Edit</button>
                  </div>
                  <hr width="100%" size="1px" align="center" color="gray" />
                </div>
                <!-- Gender -->
                <?php if ($value['gender'] != "") { ?>
                <div class="nddd">
                  <div class="ndd-left">
                    <h3 style="padding-bottom: 5px">Gender</h3>
                    <div class="name">
                      <span style="color: gray; margin-bottom: 10px">
                        <?php echo $value['gender']; ?>
                      </span>
                      <select name="inputgender" id="gender">
                        <?php if ($value['gender'] == "male") { ?>
                        <option selected value="male">Male</option>
                        <option value="female">Female</option>
                        <?php } else { ?>
                        <option value="male">Male</option>
                        <option selected value="female">Female</option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <div class="ndd-right">
                    <button type="button" onclick="input('gender')">Edit</button>
                  </div>
                  <hr width="100%" size="1px" align="center" color="gray" />
                </div>
                <?php } else { ?>
                <div class="nddd">
                  <div class="ndd-left">
                    <h3 style="padding-bottom: 5px">Gender</h3>
                    <div class="name">
                      <span style="color: gray; margin-bottom: 10px">
                        <?php echo 'Not provided'; ?>
                      </span>
                      <select name="inputgender" id="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                      </select>
                    </div>
                  </div>
                  <div class="ndd-right">
                    <button type="button" onclick="input('gender')">Add</button>
                  </div>
                  <hr width="100%" size="1px" align="center" color="gray" />
                </div>
                <?php } ?>
                <!-- Email -->
                <div class="nddd">
                  <div class="ndd-left">
                    <h3 style="padding-bottom: 5px; padding-top: 10px">
                      Email address
                    </h3>
                    <div class="name">
                      <span style="color: gray; margin-bottom: 10px"><?php echo Session::get('admin_email') ?></span>
                      <input type="email" name="inputemail" id="email">
                    </div>
                  </div>
                  <div class="ndd-right">
                    <button type="button" onclick="input('email')">Edit</button>
                  </div>
                  <hr width="100%" size="1px" align="center" color="gray" />
                </div>
                <!-- Phone number -->
                <?php if ($value['phone_number'] != "") { ?>
                <div class="nddd">
                  <div class="ndd-left">
                    <h3 style="padding-bottom: 5px">Phone Number</h3>
                    <div class="name">
                      <span style="color: gray; margin-bottom: 10px">
                        <?php echo $value['phone_number']; ?>
                      </span>
                      <input type="text" name="inputphone" id="phone">
                    </div>
                  </div>
                  <div class="ndd-right">
                    <button type="button" onclick="input('phone')">Edit</button>
                  </div>
                  <hr width="100%" size="1px" align="center" color="gray" />
                </div>
                <?php } else { ?>
                <div class="nddd">
                  <div class="ndd-left">
                    <h3 style="padding-bottom: 5px">Phone Number</h3>
                    <div class="name">
                      <span style="color: gray; margin-bottom: 10px">
                        <?php echo 'Not provided'; ?>
                      </span>
                      <input type="text" name="inputphone" id="phone">
                    </div>
                  </div>
                  <div class="ndd-right">
                    <button type="button" onclick="input('phone')">Add</button>
                  </div>
                  <hr width="100%" size="1px" align="center" color="gray" />
                </div>
                <?php } ?>
                <!-- Address -->
                <?php if ($value['address'] != "") { ?>
                <div class="nddd">
                  <div class="ndd-left">
                    <h3 style="padding-bottom: 5px">Address</h3>
                    <div class="name">
                      <span style="color: gray; margin-bottom: 10px">
                        <?php echo $value['address']; ?>
                      </span>
                      <input type="text" name="inputaddress" id="address">
                    </div>
                  </div>
                  <div class="ndd-right">
                    <button type="button" onclick="input('address')">Edit</button>
                  </div>
                  <hr width="100%" size="1px" align="center" color="gray" />
                </div>
                <?php } else { ?>
                <div class="nddd">
                  <div class="ndd-left">
                    <h3 style="padding-bottom: 5px">Address</h3>
                    <div class="name">
                      <span style="color: gray; margin-bottom: 10px">
                        <?php echo 'Not provided'; ?>
                      </span>
                      <input type="text" name="inputaddress" id="address">
                    </div>
                  </div>
                  <div class="ndd-right">
                    <button type="button" onclick="input('address')">Add</button>
                  </div>
                  <hr width="100%" size="1px" align="center" color="gray" />
                </div>
                <?php } ?>
              </div>
            </div>
            <div class="luu">
              <!-- <a href="customer.php">Return</a> -->
              <input type="submit" name="submit" value="Save change">
            </div>

          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>