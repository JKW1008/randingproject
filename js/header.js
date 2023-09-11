$(function () {
  $(window).scroll(function () {
    if ($(window).scrollTop() > 60) {
      if (!$(".myheader").hasClass("expanded")) {
        $(".myheader").addClass("expanded");
      }
    } else {
      if ($(".myheader").hasClass("expanded")) {
        $(".myheader").removeClass("expanded");
      }
    }
  });
});
