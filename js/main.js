$(function () {
  AOS.init({
    disable: function () {
      var desktop = 768;
      return window.innerWidth < desktop;
    },
  });
  $("#fullpage").fullpage({
    //options here
    autoScrolling: true,
    navigation: true, //스크롤되는 구간별로 이동되는 버튼
    navigationPosition: "right",
    scrollHorizontally: true,
    responsiveWidth: 768,
    onLeave: function () {
      //풀페이지 전환되기 직전에 실행되는 콜백
      $(".section [data-aos]").each(function () {
        $(this).removeClass("aos-animate");
      });
    },

    afterLoad: function () {
      //풀페이지 화면이 전환되고 나서 실행
      $(".section.active [data-aos]").each(function () {
        $(this).addClass("aos-animate");
      });
    },
  });
});
