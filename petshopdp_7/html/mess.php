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
  <link rel="stylesheet" href="../css/messenger.css" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <style>
  header {
    display: flex;
  }

  .h-100 {
    height: 0% !important;
  }

  h2,
  h3 {
    font-size: 23px;
    font-weight: 600;
  }

  @media (min-width: 1200px) {
    .col-xl-3 {
      max-width: 25%;
      position: absolute;
      left: 0;
    }

    .col-xl-6 {
      max-width: 76%;
      right: 0;
      position: absolute;
    }
  }

  .card {
    height: 600px;
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
                <a href="qldh.php">
                  <i class="fa-regular fa-clipboard"></i> Quản lý đơn hàng
                </a>
              </li>
            </ul>
          </li>
          <li>
            <h3>Support</h3>
            <a href="mess.php" style="color: #ff385c"><i class="fa-solid fa-comment"></i> Customer assistance</a>
          </li>
        </ul>
      </div>
      <div class="content-right">
        <div class="container-fluid h-100">
          <div class="row justify-content-center h-100">
            <div class="col-md-4 col-xl-3 chat">
              <div class="card mb-sm-3 mb-md-0 contacts_card">
                <div class="card-header">
                  <div class="input-group">
                    <input type="text" placeholder="Search..." name="" class="form-control search" />
                    <div class="input-group-prepend">
                      <span class="input-group-text search_btn"><i class="fas fa-search"></i></span>
                    </div>
                  </div>
                </div>
                <div class="card-body contacts_body">
                  <ui class="contacts">
                    <li class="active">
                      <div class="d-flex bd-highlight">
                        <div class="img_cont">
                          <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg"
                            class="rounded-circle user_img" />
                          <span class="online_icon"></span>
                        </div>
                        <div class="user_info">
                          <span>Khalid</span>
                          <p>Kalid is online</p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex bd-highlight">
                        <div class="img_cont">
                          <img
                            src="https://2.bp.blogspot.com/-8ytYF7cfPkQ/WkPe1-rtrcI/AAAAAAAAGqU/FGfTDVgkcIwmOTtjLka51vineFBExJuSACLcBGAs/s320/31.jpg"
                            class="rounded-circle user_img" />
                          <span class="online_icon offline"></span>
                        </div>
                        <div class="user_info">
                          <span>Taherah Big</span>
                          <p>Taherah left 7 mins ago</p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex bd-highlight">
                        <div class="img_cont">
                          <img src="https://i.pinimg.com/originals/ac/b9/90/acb990190ca1ddbb9b20db303375bb58.jpg"
                            class="rounded-circle user_img" />
                          <span class="online_icon"></span>
                        </div>
                        <div class="user_info">
                          <span>Sami Rafi</span>
                          <p>Sami is online</p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex bd-highlight">
                        <div class="img_cont">
                          <img src="https://static.turbosquid.com/Preview/001214/650/2V/boy-cartoon-3D-model_D.jpg"
                            class="rounded-circle user_img" />
                          <span class="online_icon offline"></span>
                        </div>
                        <div class="user_info">
                          <span>Nargis Hawa</span>
                          <p>Nargis left 30 mins ago</p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex bd-highlight">
                        <div class="img_cont">
                          <img src="https://static.turbosquid.com/Preview/001214/650/2V/boy-cartoon-3D-model_D.jpg"
                            class="rounded-circle user_img" />
                          <span class="online_icon offline"></span>
                        </div>
                        <div class="user_info">
                          <span>Rashid Samim</span>
                          <p>Rashid left 50 mins ago</p>
                        </div>
                      </div>
                    </li>
                  </ui>
                </div>
                <div class="card-footer"></div>
              </div>
            </div>
            <div class="col-md-8 col-xl-6 chat">
              <div class="card">
                <div class="card-header msg_head">
                  <div class="d-flex bd-highlight">
                    <div class="img_cont">
                      <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg"
                        class="rounded-circle user_img" />
                      <span class="online_icon"></span>
                    </div>
                    <div class="user_info">
                      <span>Chat with Khalid</span>
                      <p>1767 Messages</p>
                    </div>
                    <div class="video_cam">
                      <span><i class="fas fa-video"></i></span>
                      <span><i class="fas fa-phone"></i></span>
                    </div>
                  </div>
                  <span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span>
                  <div class="action_menu">
                    <ul>
                      <li><i class="fas fa-user-circle"></i> View profile</li>
                      <li>
                        <i class="fas fa-users"></i> Add to close friends
                      </li>
                      <li><i class="fas fa-plus"></i> Add to group</li>
                      <li><i class="fas fa-ban"></i> Block</li>
                    </ul>
                  </div>
                </div>
                <div class="card-body msg_card_body">
                  <div class="d-flex justify-content-start mb-4">
                    <div class="img_cont_msg">
                      <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg"
                        class="rounded-circle user_img_msg" />
                    </div>
                    <div class="msg_cotainer">
                      Hello Donald Trump
                      <span class="msg_time">8:40 AM, Today</span>
                    </div>
                  </div>
                  <div class="d-flex justify-content-end mb-4">
                    <div class="msg_cotainer_send">
                      Hi Khalid
                      <span class="msg_time_send">8:55 AM, Today</span>
                    </div>
                    <div class="img_cont_msg">
                      <img src="../images/anh.jpg" class="rounded-circle user_img_msg" />
                    </div>
                  </div>
                  <div class="d-flex justify-content-start mb-4">
                    <div class="img_cont_msg">
                      <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg"
                        class="rounded-circle user_img_msg" />
                    </div>
                    <div class="msg_cotainer">
                      abcdef?
                      <span class="msg_time">9:00 AM, Today</span>
                    </div>
                  </div>
                  <div class="d-flex justify-content-end mb-4">
                    <div class="msg_cotainer_send">
                      ghiklmn?
                      <span class="msg_time_send">9:05 AM, Today</span>
                    </div>
                    <div class="img_cont_msg">
                      <img src="../images/anh.jpg" class="rounded-circle user_img_msg" />
                    </div>
                  </div>
                  <div class="d-flex justify-content-start mb-4">
                    <div class="img_cont_msg">
                      <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg"
                        class="rounded-circle user_img_msg" />
                    </div>
                    <div class="msg_cotainer">
                      oprstuv?
                      <span class="msg_time">9:07 AM, Today</span>
                    </div>
                  </div>
                  <div class="d-flex justify-content-end mb-4">
                    <div class="msg_cotainer_send">
                      Ok, thank you have a good day
                      <span class="msg_time_send">9:10 AM, Today</span>
                    </div>
                    <div class="img_cont_msg">
                      <img src="../images/anh.jpg" class="rounded-circle user_img_msg" />
                    </div>
                  </div>
                  <div class="d-flex justify-content-start mb-4">
                    <div class="img_cont_msg">
                      <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg"
                        class="rounded-circle user_img_msg" />
                    </div>
                    <div class="msg_cotainer">
                      Bye, see you
                      <span class="msg_time">9:12 AM, Today</span>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="input-group">
                    <div class="input-group-append">
                      <span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
                    </div>
                    <textarea name="" class="form-control type_msg" placeholder="Type your message..."></textarea>
                    <div class="input-group-append">
                      <span class="input-group-text send_btn"><i class="fas fa-location-arrow"></i></span>
                    </div>
                  </div>
                </div>
              </div>
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
    <!-- <footer>
        <span>@Coppyright Lê Văn Hiển</span>
        &emsp;
        <button id="footer-button">
          <i
            class="fa-solid fa-chevron-down"
            id="xuong"
            style="display: none"
          ></i>
          <i class="fa-solid fa-chevron-up" id="len"></i>
        </button>
        <div id="footer" style="display: none">
          <h2>Phenikaa University</h2>
          <p>Sản phẩm độc quyền</p>
        </div>
      </footer> -->
  </div>
</body>
<script type="text/javascript" src="../js/admin.js"></script>

</html>