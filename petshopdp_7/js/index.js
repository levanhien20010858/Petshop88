$(document).ready(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop()) {
      $(".select").addClass("sticky");
    } else {
      $(".select").removeClass("sticky");
    }
  });
});
document.addEventListener("click", (e) => {
  const isDropdownButton = e.target.matches("[data-dropdown-button]");
  if (!isDropdownButton && e.target.closest("[data-dropdown]") != null) return;

  let currentDropdown;
  if (isDropdownButton) {
    currentDropdown = e.target.closest("[data-dropdown]");
    currentDropdown.classList.toggle("active");
  }

  document.querySelectorAll("[data-dropdown].active").forEach((dropdown) => {
    if (dropdown == currentDropdown) return;
    dropdown.classList.remove("active");
  });
});
// ẩn hiện cart
document.getElementById("showcart").style.display = "none";
function showcart() {
  var x = document.getElementById("showcart");
  if (x.style.display == "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
// tăng giảm product
let amountElement = document.getElementById("amount");
let amount = amountElement.value;
let moneyElement = document.getElementById("Money");
let money = moneyElement.innerText;
var totalMoney = 0;
let render = (amount) => {
  amountElement.value = amount;
};
let render1 = (money) => {
  moneyElement.innerText = money;
};
let Plus = () => {
  amount++;
  totalMoney = money * amount;
  render1(totalMoney);
  render(amount);
};
let Minus = () => {
  amount--;

  if (amount < 1) {
    amount = 1;
  }
  totalMoney = money * amount;
  render1(totalMoney);
  render(amount);
};
amountElement.addEventListener("input", () => {
  amount = amountElement.value;
  amount = parseInt(amount);
  amount = isNaN(amount) || amount == 0 ? 1 : amount;
  totalMoney = money * amount;
  render1(totalMoney);
  render(amount);
});

//
const sname = document.getElementById("s-name");
const inname = document.getElementById("inputname");
sname.addEventListener("click", () => {
  inname.style.display = "block";
});
sname.addEventListener("click", () => {
  inname.style.display = "none";
});
//
function ft() {
  let footer = document.getElementById("footer");
  let len = document.getElementById("len");
  let xuong = document.getElementById("xuong");
  var check = footer.style.display;
  if (check == "none") {
    footer.style.display = "block";
    len.style.display = "none";
    xuong.style.display = "block";
  } else {
    footer.style.display = "none";
    len.style.display = "block";
    xuong.style.display = "none";
  }
}
//
