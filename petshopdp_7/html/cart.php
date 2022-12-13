<?php
ini_set('display_errors', 'Off');
ini_set('error_reporting', E_ALL);
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);
?>
<?php
include '../classes/cart.php';
$previous = "javascript:history.go(-1)";
$class = new Cart();
$data = $_SESSION["giohang"];
$stt = 1;
////////////////////////////////////////////////////////////////
if (isset($_POST['xoagiohang']) && $_POST['xoagiohang']) {
  $xoagh = $_POST['xoagiohang'];
  Gh::xoagh($xoagh);
  $data = $_SESSION["giohang"];
}
$id_gh = 0;
$dataCustomer = $class->customerAddress();
if (isset($_POST['buynow']) && $_POST['buynow']) {
  $id_sp = $_POST['bynow'];
  for ($i = 0; $i < sizeof($_SESSION["giohang"]); $i++) {
    if ($_SESSION["giohang"][$i][5] == $id_sp) {
      $id_gh = $_SESSION["giohang"][$i];
      break;
    }
  }
}
$total_product = $_SESSION["giohang"][$id_gh][3] * $_SESSION["giohang"][$id_gh][4];
$ship_pay = 20000;
$total_payment = $total_product + $ship_pay;
//
$id_spp = $_SESSION["giohang"][$id_gh][5];
$price_spp = $_SESSION["giohang"][$id_gh][2];
$num_spp = $_SESSION["giohang"][$id_gh][3];
$node =  isset($_POST['od-messenger']) ? $_POST['od-messenger'] : "No message";
if (isset($_POST['sure']) && $_POST['sure']) {
  $sure = $_POST['sure'];
  $class->addOrder($sure, $node, $id_spp, $price_spp, $num_spp);
}
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
  <link rel="icon" href="../images/meongu.jpg" />
  <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="icon" href="../images/logo.png" />

  <title>PETSHOP</title>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" />
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js">

  </script>
  <style>
  .dataTables_length {
    margin-bottom: 10px;
  }
  </style>
  <link rel="stylesheet" href="../css/cart1.css" type="text/css" />
  <script src="../js/index.js"></script>
</head>

<body>
  <div class="wrapper">
    <div class="content">
      <div class="content-wrap">
        <div class="content-t">
          <ol>
            <li><a href="<?= $previous ?>">Previous page</a></li>
            <li>&emsp;>&emsp;</li>
            <li>Cart</li>
          </ol>
          <h1>Cart</h1>
        </div>
        <div class="content-d">
          <div class="content-d-t">
            <div class="d-t-left">
              <table id="donhang" class="display" width="100%" data-page-length="10" data-order='[[ 0, "asc" ]]'>
                <thead>
                  <tr>
                    <th>STT</th>
                    <th data-orderable="false">Image</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Num</th>
                    <th>Total</th>
                    <th data-orderable="false">Function</th>
                    <th data-orderable="false"></th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($data as $key => $value) { ?>
                  <tr>
                    <form action="" method="POST">
                      <td><?= $stt++ ?></td>
                      <td><img src="<?php echo $value[0] ?>" alt="" width="70px" height="70px"></td>
                      <td><?php echo $value[1] ?></td>
                      <td><?php echo $value[2] ?>đ</td>
                      <td id="form-amount">
                        <button class="minus" type="button" onclick="Minus1()">
                          <i class="fa-solid fa-minus"></i>
                        </button>
                        <input type="text" name="amount" id="amount1<?= $stt ?>" value="<?php echo $value[3] ?>" />

                        <button class="plus" type="button" onclick="Plus1()">
                          <i class="fa-solid fa-plus"></i>
                        </button>
                      </td>
                      <td><span id="Money1"><?php echo $value[2] * $value[3] ?></span>đ</td>
                      <td id="input-function">
                        <input type="button" value="Sửa"><br />
                        <form action="" method="post">
                          <input type="hidden" name="xoagiohang" value="<?php echo $value[5] ?>">
                          <input type="submit" value="Xóa">
                        </form>
                      </td>
                      <td id="input-bynow">
                        <input type="hidden" name="buynow" value="<?php echo $value[5] ?>">
                        <input type="submit" value="Buy now" id="open-mod">
                      </td>
                    </form>
                  </tr>
                  <?php } ?>

                </tbody>
              </table>
              <div class="modal" id="Modal">
                <div class="modal-nd">
                  <div class="modal-hd">
                    <h1>Pay</h1>
                    <i class="fa-solid fa-xmark" id="close-mod"></i>
                  </div>
                  <div class="modal-ct">
                    <div class="deliver-address-wrap">
                      <div class="deliver-address">
                        <div class="deliver-address-left">
                          <span><i class="fa-solid fa-location-dot"></i> Delivery Address</span>
                          <span><?php echo $dataCustomer["fullname"] ?> |
                            <?php echo $dataCustomer["phone_number"] ?></span>
                          <span><?php echo isset($dataCustomer["address"]) ? $dataCustomer["address"] : "Null" ?></span>
                        </div>
                        <div class="deliver-address-right">
                          <input type="button" value="Change" id="change">
                        </div>
                      </div>
                      <form action="" method="post">
                        <div class="deliver-address-input" style="display: none;">
                          <div class="d-a-i-left">
                            <p>Phone number:</p>
                            <input type="text" name="" id="">
                            <p>Address</p>
                            <input type="text" name="" id="">
                          </div>
                          <div class="d-a-i-right">
                            <input type="submit" value="Ok">
                          </div>
                        </div>
                      </form>
                    </div>

                    <div class="order-detail-wrap">
                      <h3 style="text-align: center; padding: 5px 0px 5px 0px;color:#8a8aae;font-size: 20px;">Product
                      </h3>
                      <a href="productdetails.php?id=<?php echo $_SESSION["giohang"][$id_gh][5] ?>">
                        <div class="order-detail-content">
                          <div class="o-d-c-left">
                            <img src="<?php echo $_SESSION["giohang"][$id_gh][0] ?>" alt="" width="70px" height="70px">
                          </div>
                          <div class="o-d-c-right">
                            <div class="o-d-c-right-t">
                              <p style="font-size: 20px; font-weight: 600;">
                                <?php echo $_SESSION["giohang"][$id_gh][1] ?></p>
                              <p style="font-size: 15px; color: gray;">Num:
                                <span><?php echo $_SESSION["giohang"][$id_gh][3] ?></span>
                              </p>
                              <p><?php echo $_SESSION["giohang"][$id_gh][4] ?>đ</p>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                    <form action="" method="post">
                      <div class="order-detail-mess">
                        <span>Messenger </span>
                        <textarea name="od-messenger" id="" cols="70" rows="5">Sản phẩm tuyệt vời!</textarea>
                      </div>
                    </form>
                    <div class="payment-detail">
                      <p style="text-align: center;">Payment Details</p>
                      <div class="payment-detail-ct">
                        <div class="p-d-c-left">
                          <p>Merchadise Subtotal </p>
                          <p>Shipping Subtotal </p>
                          <p>Total Payment </p>
                        </div>
                        <div class="p-d-c-right">
                          <p><?php echo number_format($total_product) ?> đ</p>
                          <p><?php echo number_format($ship_pay) ?>đ</p>
                          <p style="color: red;"><?php echo number_format($total_payment) ?>đ</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <form action="" method="post">
                    <input type="hidden" name="sure" value="on">
                    <div class="modal-ft">
                      <button>Place Order</button>
                    </div>
                  </form>
                </div>
              </div>
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
            <div class=" dropdown-header">
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
                Session::checkSession();
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
$(document).ready(function() {
  $("#donhang").DataTable();
});
//
let amountElement1 = document.getElementById("amount12");
let amount1 = amountElement1.value;
let moneyElement1 = document.getElementById("Money1");
let money1 = moneyElement1.innerText;
var totalMoney1 = 0;
let render2 = (amount1) => {
  amountElement1.value = amount1;
};
let render3 = (money1) => {
  moneyElement1.innerText = money1;
};
let Plus1 = () => {
  amount1++;
  totalMoney1 = money1 * amount1;
  render3(totalMoney1);
  render2(amount1);
};
let Minus1 = () => {
  amount1--;

  if (amount1 < 1) {
    amount1 = 1;
  }
  totalMoney1 = money1 * amount1;
  render3(totalMoney1);
  render2(amount1);
};
amountElement1.addEventListener("input", () => {
  amount1 = amountElement1.value;
  amount1 = parseInt(amount1);
  amount1 = isNaN(amount1) || amount1 == 0 ? 1 : amount1;
  totalMoney1 = money1 * amount1;
  render3(totalMoney1);
  render2(amount1);
});
//

const openModal = document.getElementById("open-mod");
const closeModal = document.getElementById("close-mod");
const Modal = document.getElementById("Modal");
openModal.addEventListener("click", () => {
  Modal.classList.add("hiden");
});
closeModal.addEventListener("click", () => {
  Modal.classList.remove("hiden");
});
//
$(document).ready(function() {
  $("#change").click(function() {
    $(".deliver-address-input").toggle();
    if ($(".deliver-address-input").css("display") == "none") {
      $("#change").html("Change");
    } else {
      $("#change").html("Cancel");
    }
  });
});
</script>

</html>