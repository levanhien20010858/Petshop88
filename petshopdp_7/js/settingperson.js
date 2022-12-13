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
//
document.getElementById("name").style.display = "none";
document.getElementById("gender").style.display = "none";
document.getElementById("email").style.display = "none";
document.getElementById("phone").style.display = "none";
document.getElementById("address").style.display = "none";
function input(id) {
  const inname = document.getElementById(id);
  var check = inname.style.display;
  if (check == "none") {
    inname.style.display = "block";
  } else {
    inname.style.display = "none";
  }
}
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
