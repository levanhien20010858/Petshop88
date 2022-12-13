<?php
ini_set('display_errors', 'Off');
ini_set('error_reporting', E_ALL);
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);
?>
<?php
include '../classes/gh.php';
include '../classes/home.php';
$class = new Home();
$data = $class->hmoe111("dog");
$dogs = $data;

?>
<?php
require "../inc/head.php";
?>
<link rel="stylesheet" href="../css/style.css" type="text/css" />

<style>
a.nav-link.active1 {
  text-decoration: underline;
  color: #ff385c;
}
</style>
</head>

<body>
  <div class="wrapper">
    <div class="content">
      <div class="cards" id="kq">
        <?php foreach ($dogs as $key => $value) { ?>
        <!-- card chính -->
        <div class="card">
          <a href="productdetails.php?id=<?php echo $value["id"] ?>">
            <div class="image">
              <img src="<?php echo $value["thumbnail"]; ?>" alt="dog" class="card-image" />
              <span><?php echo $value["price"]; ?>đ</span>
            </div>
            <div class="card-content">
              <div class="card-top">
                <h3 class="card-title"><?php echo $value["title"]; ?></h3>
                <div class="card-user">
                  <img src="<?php echo $value["thumbnail_trademark"] ?>" alt="" class="card-user-avatar" />
                  <div class="card-user-info">
                    <div class="card-user-top">
                      <h4 class="card-user-name"><?php echo $value["trademark_name"] ?></h4>
                    </div>
                    <div class="card-user-online">USA</div>
                  </div>
                </div>
                <div class="price-wrap"><span><?php echo $value["price"]; ?></span>đ</div>
              </div>
              <div class="card-bottom">
                <div class="card-star">
                  <span><?php echo $value["star"]; ?></span>
                  <i class="fa-solid fa-star"></i>
                </div>
                <div class="card-watching"><?php echo $value["sold"]; ?> đã bán</div>
              </div>
            </div>
          </a>
        </div>
        <!-- card chính -->
        <?php } ?>
      </div>
      <br />
    </div>
    <div class="select-dog-cat">
      <a href="dog.php"><img src="../images/dog.jpg" alt="dog" width="50px" height="50px" style="
              border: 0.1px solid rgb(200, 197, 197);
              box-shadow: 0px 1px 3px gray;
            " /></a>
      <a href="cat.php"><img src="../images/cat.jpg" alt="cat" width="50px" height="50px" /></a>
    </div>
    <div class="select">
      <ul id="sele">
        <li id="sos">
          <a href="../classes/dogs.php?category_id=1" class="nav-link">
            <div class="sss">
              <i class="fa-solid fa-house-chimney"></i>
              <p>House</p>
            </div>
          </a>

        </li>
        <li id="sos">
          <a href="../classes/dogs.php?category_id=2" class="nav-link">
            <div class="sss">
              <i class="fa-solid fa-fish"></i>
              <p>Food</p>
            </div>
          </a>

        </li>
        <li id="sos">
          <a href="../classes/dogs.php?category_id=3" class="nav-link">
            <div class="sss">
              <i class="fa-solid fa-toilet"></i>
              <p>Toiletries</p>
            </div>
          </a>

        </li>
        <li id="sos">
          <a href="../classes/dogs.php?category_id=4" class="nav-link">
            <div class="sss">
              <i class="fa-solid fa-syringe"></i>
              <p>Medicine</p>
            </div>
          </a>

        </li>
        <li id="sos">
          <a href="../classes/dogs.php?category_id=5" class="nav-link">
            <div class="sss">
              <i class="fa-solid fa-shirt"></i>
              <p>Clothes</p>
            </div>
          </a>

        </li>
        <li id="sos">
          <a href="../classes/dogs.php?category_id=6" class="nav-link">
            <div class="sss">
              <i class="fa-solid fa-gift"></i>
              <p>Plaything</p>
            </div>
          </a>

        </li>
        <li id="sos">
          <a href="../classes/dogs.php?category_id=9" class="nav-link">
            <div class="sss">
              <i class="fa-solid fa-heart"></i>
              <p>Fertilization</p>
            </div>
          </a>

        </li>
        <li id="sos">
          <a href="../classes/dogs.php?category_id=10" class="nav-link">
            <div class="sss">
              <i class="fa-solid fa-cat"></i>
              <p>Lifelong friend</p>
            </div>
          </a>

        </li>
        <li style="background-color: #fff">
          <div class="sss">
            <p>Sắp xếp</p>
            <select name="option" id="op">
              <option selected value="moinhat">Mới nhất</option>
              <option value="phobien">Phổ biến</option>
              <option value="danhgia">Đánh giá</option>
              <option value="giatang">Giá tăng</option>
              <option value="giagiam">Giá giảm</option>
            </select>
          </div>
        </li>
      </ul>
    </div>
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
        <div class="cart">
          <button onclick="showcart()">
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
    <?php if (isset($_GET['action']) && $_GET['action'] == 'logout') {
      Session::destroyPro();
    } ?>
    <?php
    require "../inc/footer.php";
    ?>
  </div>
</body>
<script src="../js/index.js"></script>
<script>
$(document).ready(function() {
  $("a.nav-link").click(function(e) {
    e.preventDefault();
    var url = this.href;
    var url2 = this.className;
    var $this = $(this);
    if (!$this.hasClass("active1")) {
      $("#sos .nav-link").removeClass("active1");
      $this.addClass("active1");
      $("#kq").load(url);
    }
    $("#kq").load(url);
    return false;
  });

});
</script>

</html>