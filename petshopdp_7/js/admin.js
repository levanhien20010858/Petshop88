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
// $(".dropdown-menu").hide();
$(document).ready(function () {
  $("#footer-button").click(function () {
    if ($("#footer").css("display") == "none") {
      $("#footer").css("display", "block");
      $("#len").css("display", "none");
      $("#xuong").css("display", "block");
    } else {
      $("#footer").css("display", "none");
      $("#len").css("display", "block");
      $("#xuong").css("display", "none");
    }
  });

  $("#mail-button").click(function () {
    if ($(".mail-content").css("display") == "none") {
      // $(".dropdown-menu").css("display", "block");
      $(".mail-content").slideDown();
    } else {
      $(".mail-content").slideUp();
    }
    $(".content , .logo , .dropdown ").on("click", function () {
      $(".mail-content").slideUp();
    });
  });

  $("#bar").click(function () {
    $(".bars").toggle();
    if ($(".bars").css("display") == "none") {
      // $(".dropdown-menu").css("display", "block");
      $(".content-right").css("width", "100%");
    } else {
      $(".content-right").css("width", "83.5%");
    }
  });
  $("#add").click(function () {
    $(".add-content").toggle();
    if ($(".add-content").css("display") == "none") {
      $("#add").html("Add");
    } else {
      $("#add").html("Cancel");
    }
  });
  // $("#qlkh").click(function () {
  //   $("#sub-menu").toggle(150);
  //   $("#sub-menu1").slideUp(150);
  // });
  // $("#qlsp").click(function () {
  //   $("#sub-menu1").toggle(150);
  //   $("#sub-menu").slideUp(150);
  // });

  $(window).resize(function () {
    var width =
      window.innerWidth ||
      document.documentElement.clientWidth ||
      document.body.clientWidth;
    if (width < 1050) {
      $(".bars").slideUp();
      $(".content-right").css("width", "100%");
    } else {
      $(".bars").slideDown();
      $(".content-right").css("width", "83.5%");
    }
  });
});
$(document).ready(function () {
  $("#example").DataTable();
  // $("#example").DataTable({
  //   dom: "Bfrtip",
  //   buttons: ["colvis", "excel", "print"],
  // });
});
$(document).ready(function () {
  $("#action_menu_btn").click(function () {
    $(".action_menu").toggle();
  });
});
