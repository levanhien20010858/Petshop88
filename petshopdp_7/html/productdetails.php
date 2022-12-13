<?php
ini_set('display_errors', 'Off');
ini_set('error_reporting', E_ALL);
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);
?>
<?php
include '../classes/product_detail.php';
include '../classes/gh.php';
$db = new Productdetail();
$value = $db->product();
$total1 = $value["price"] - $value["price"] * ($value["discount"] / 100);
$previous = "javascript:history.go(-1)";
if (!isset($_SESSION["giohang"])) {
  $_SESSION["giohang"] = [];
}
if (isset($_POST['addcart']) && $_POST['addcart']) {
  $addcart = $_POST['addcart'];
  $num = $_POST['amount'];
  $fl = 0;
  if (sizeof($_SESSION["giohang"]) != 0) {
    for ($i = 0; $i < sizeof($_SESSION["giohang"]); $i++) {
      if ($_SESSION["giohang"][$i][1] == $value["title"]) {
        $fl = 1;
        $num += $_SESSION["giohang"][$i][3];
        $_SESSION["giohang"][$i][3] = $num;
        break;
      }
    }
  }
  if ($fl == 0) {
    $sp = [$value["thumbnail"], $value["title"], $value["price"], $num, $total1, $_GET['id']];
    $_SESSION["giohang"][] = $sp;
  }
}
if (isset($_POST['xoagiohang']) && $_POST['xoagiohang']) {
  $xoagh = $_POST['xoagiohang'];
  Gh::xoagh($xoagh);
}
?>
<?php
require "../inc/head.php";
?>
<link rel="stylesheet" href="../css/productdetail.css" type="text/css" />
<script src="../js/index.js" defer></script>
</head>

<body>
  <div class="wrapper">
    <div class="header">
      <div class="logo">
        <a href="index.php"><img src="../images/logo.png" alt="logo" height="70" width="90" /></a>
      </div>
      &emsp;&emsp;&emsp;&emsp;&emsp;
      <div class="search">
        <input class="search1" type="text" placeholder="Enter search" />
        &ensp;
        <button>
          <div class="search-circle">
            <i class="fa-solid fa-magnifying-glass"></i>
          </div>
        </button>
      </div>
      &emsp;&emsp;&emsp;&emsp;&emsp;
      <div class="login-gh">
        <div class="cart" onclick="showcart()">
          <button>
            <i class="fa-solid fa-cart-shopping"></i>
          </button>
        </div>
        <div id="showcart">
          <table>
            <tr id="tb-hd">
              <th>STT</th>
              <th>Hình</th>
              <th>Tên</th>
              <th>Đơn giá</th>
              <th>Số lượng</th>
              <th>Thành tiền</th>
              <th>Xóa</th>
            </tr>
            <?php Gh::showgh() ?>
          </table>
        </div>
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

    <div class="content">
      <div class="content-nd-t">
        <div class="content-t">
          <ol>
            <li><a href="<?= $previous ?>">Previous page</a></li>
            <li>&emsp;>&emsp;</li>
            <li>Product details</li>
          </ol>
        </div>
        <div class="content-left">
          <img src="<?php echo $value["thumbnail"] ?>" alt="product" />
        </div>
        <div class="content-right">
          <div class="name"><span><?php echo $value["title"] ?></span></div>
          <div class="price">
            <span>Giá gốc: </span>
            <span style="text-decoration: line-through; color: gray"><?php echo $value["price"] ?></span>đ
            &ensp;<span>Giảm giá: <?php echo $value["discount"] ?></span>%
            &ensp;&ensp;&ensp; <span>Chỉ còn: </span><span><?php echo $total1 ?></span>đ
          </div>
          <div class="user">
            <div class="card-user">
              <img src="<?php echo $value["thumbnail_trademark"] ?>" alt="" class="user-avatar" />
              <div class="user-info">
                <div class="user-top">
                  <h4 class="user-name"><?php echo $value["trademark_name"] ?></h4>
                </div>
                <div class="user-online"><?php echo $value["origin"] ?></div>
              </div>
              <button id="c-p">Company's products</button>
            </div>
          </div>
          <p style="margin-top: 50px">Amount:</p>
          <form action="" method="post">
            <div class="amount">
              <button class="minus" type="button" onclick="Minus()">
                <i class="fa-solid fa-minus"></i>
              </button>
              <input type="text" name="amount" id="amount" value="1" />
              <button class="plus" type="button" onclick="Plus()">
                <i class="fa-solid fa-plus"></i>
              </button>
            </div>
            <br />
            <div class="money">
              <p>Total Money:</p>
              <span id="Money" style="margin-left: 70px"><?php echo $total1 ?></span>đ
            </div>

            <div class="buy">
              <div class="buy-cart" style="margin: 0px 50px 0px 20px">
                <input type="hidden" name="addcart" value="<?php echo $_GET['id'] ?>">
                <button>
                  Add to cart
                </button>
              </div>
              <div class="buy-now">
                <input type="hidden" name="bynow" value="bye">
                <button>
                  Buy now
                </button>
              </div>
          </form>
        </div>
      </div>
    </div>
    <div class="content-nd-r">
      <div class="product-detail">
        <h2 style="color: #ff385c; margin: 10px 0px 20px 110px">
          Chi tiết sản phẩm
        </h2>
        <div class="name">
          <p>Đã bán</p>
          <p>Phân loại</p>
          <p>Thương hiệu</p>
          <p>Xuất sứ</p>
          <p>Hương vị</p>
          <p>Trọng lượng</p>
          <p>Hạn sử dụng</p>
          <p>Lứa tuổi</p>
          <p>Lưu ý</p>
        </div>
        <div class="value">
          <span><?php echo $value["sold"] ?></span>
          <span><?php echo $value["name"] ?></span>
          <span><?php echo $value["trademark_name"] ?></span>
          <span><?php echo $value["origin"] ?></span>
          <span><?php echo $value["taste"] ?></span>
          <span><?php echo $value["weight"] ?>g</span>
          <span><?php echo $value["expiry"] ?></span>
          <span><?php echo $value["ageofuse"] ?></span>
          <span><?php echo $value["node"] ?></span>
        </div>
      </div>
      <div class="product-reviews">
        <h2 style="color: #ff385c; margin: 10px 0px 20px 410px">
          Đánh giá
        </h2>
      </div>
    </div>
  </div>
  </div>
</body>

</html>