<?php
ini_set('display_errors', 'Off');
ini_set('error_reporting', E_ALL);
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);
?>
<?php
include '../classes/gh.php';
include '../classes/home.php';
?>
<?php
require "../inc/head.php";
?>
<script src="../js/index.js" defer></script>
<link rel="stylesheet" href="../css/style.css" type="text/css" />
</head>

<body>
  <div class="wrapper">
    <div class="contentt">
      <div class="content-t-t-t">
        <h2 style="text-align: center">Shop cho thú cưng của bạn</h2>
        <p>
          Boss cũng giống như những đứa trẻ không bao giờ lớn. Việc chăm sóc
          các bé cũng đòi hỏi rất nhiều tình thương và kĩ năng. Hơn 10 năm
          trước, các Sen muốn rước Boss về nhà chăm sóc đã khó thì việc chăm
          tốt cho Boss còn khó hơn.
        </p>
        <br /><br />
        <p>
          Tại hệ thống cửa hàng bán đồ cho chó mèo thú cưng PETSHOP88, kiến
          thức thú y chuyên môn, kỹ năng chăm sóc chuyên nghiệp và sự tận tâm
          trong công việc là những tiêu chí hàng đầu đối với đội ngũ nhân
          viên. Với sự sáng tạo và đổi mới không ngừng trong kinh doanh,
          PETSHOP88 hiện đang là một trong những địa điểm hàng đầu chuyên cung
          cấp những dịch vụ, sản phẩm cho thú cưng như sau:
        </p>
        <br /><br />
        <p>
          PETSHOP88 là nuôi dưỡng và nhân giống các dòng thú cưng nhỏ như dòng
          toydog (chó cảnh nhỏ) : poodle (tiny, tcup) , pomeranian, phốc sóc,
          yorkshire, mini schnauzer... mèo cảnh Mèo Anh lông ngắn (silver,
          golden, bicolor...), mèo chân lùn (munchkin), mèo không lông, mèo
          dragdoll.... Tất cả các bé tại PETSHOP88 điều được theo dõi nghiêm
          ngặt tiêm phòng, xổ giun, ngừa kí sinh trùng đảm bảo sức khoẻ trước
          khi về nhà mới. Với nguồn gốc bố mẹ rõ ràng, nhập khẩu từ Nga, Thái
          , Hàn Quốc...đảm bảo thế hệ con luôn xinh đẹp khoẻ mạnh.
        </p>
        <br /><br />
        <p>
          Dịch vụ phối giống chó thuần chủng chất lượng cao, giúp bé nhà bạn
          “mẹ tròn con vuông”.
        </p>
        <p>
          Lớp đào tạo grooming, dạy làm đẹp và chăm sóc thú cưng dành cho
          những học viên có nhu cầu.
        </p>
        <br /><br />
        <p>
          Thương hiệu PETSHOP88 không chỉ là nơi đáng tin cậy để những người
          yêu thú cưng gửi gắm niềm tin khi tất cả các sản phẩm bày bán và sử
          dụng tại hệ thống đều được tuyển chọn kỹ lưỡng, kiểm tra nguồn gốc,
          thành phần đảm bảo an toàn cho thú cưng từ các nhà cung cấp uy tín,
          chính hãng. Bên cạnh đó, PETSHOP88 còn liên kết với các cơ sở trong
          nước để sản xuất các sản phẩm phục vụ thú cưng theo đúng tiêu chuẩn
          xuất khẩu với mục tiêu đưa sản phẩm thú cưng Viêt Nam vươn tầm thế
          giới.
        </p>
        <br /><br />
        <p>
          Tâm nguyện của người sáng lập ra PETSHOP88 vẫn luôn được giữ vững và
          nung nấu mãnh liệt từ lúc bắt đầu cho đến ngày hôm nay, đó chính là
          tạo dựng ra một “Thiên đường cún yêu” đích thực bằng tất cả tình yêu
          thương và niềm trân trọng thú cưng.
        </p>
      </div>
    </div>
    <div class="select-dog-cat" style="  border: 0.1px solid #ff385c;
  border-radius: 5px;">
      <p style="color: #ff385c;"> &ensp;Lựa chọn thú cưng &ensp;</p>
      <a href="dog.php"><img src="../images/dog.jpg" alt="dog" width="50px" height="50px"
          style="border: 0.1px solid rgb(200, 197, 197)" /></a>
      <a href="cat.php"><img src="../images/cat.jpg" alt="cat" width="50px" height="50px"
          style="border: 0.1px solid rgb(200, 197, 197)" /></a>
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

</html>