<?php
class Gh
{
  public static function showgh()
  {
    if (isset($_SESSION["giohang"]) && is_array($_SESSION["giohang"])) {
      $sum = 0;
      for ($i = 0; $i < sizeof($_SESSION["giohang"]); $i++) {
        $sum += $_SESSION["giohang"][$i][4];
        echo '<tr>
        <td>' . ($i + 1) . '</td>
        <td>
          <img src="' . $_SESSION["giohang"][$i][0] . '" alt="" width="70px"
            height="70px" />
        </td>
        <td>' . $_SESSION["giohang"][$i][1] . '</td>
        <td>' . ($_SESSION["giohang"][$i][2]) . 'đ</td>
        <td>' . $_SESSION["giohang"][$i][3] . '</td>
      
        <td>' . ($_SESSION["giohang"][$i][4]) . 'đ</td>
        <td>
        <a href="productdetails.php?id=' . $_SESSION["giohang"][$i][5] . '"><div class = "xemm"><p>Xem</p></div></a><br/>
        <form action="" method="post">
        <input type="hidden" name="xoagiohang" value = "' . $_SESSION["giohang"][$i][5] . '">
        <input type="submit" value="Xóa" />
        </form>
        </td>
      </tr>';
      }
      echo '
      <tr id = "tb-ft">
              <th colspan="5"><a href="cart.php">Vào giỏ hàng</a> &emsp;&emsp;&emsp; Tổng đơn hàng:</th>
              <th colspan="2" ><span id = "Money1">' . ($sum)  . '</span>đ</th>
            </tr>';
    } else {
      echo '<tr id = "tb-ft">
      <th colspan="7">Giỏ hàng rỗng</th>
    </tr>';
    }
  }
  public static function xoagh($id)
  {
    for ($i = 0; $i < sizeof($_SESSION["giohang"]); $i++) {
      if ($_SESSION["giohang"][$i][5] == $id) {
        unset($_SESSION["giohang"][$i]);
        break;
      }
    }
  }
}
