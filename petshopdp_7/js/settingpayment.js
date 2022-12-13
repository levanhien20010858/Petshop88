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
document.getElementById("show-update").style.display = "none";
function input() {
  const inname = document.getElementById("show-update");
  const update = document.getElementById("update");
  var check = inname.style.display;
  if (check == "none") {
    inname.style.display = "block";
    update.innerText = "Cancel";
  } else {
    inname.style.display = "none";
    update.innerText = "Add";
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
