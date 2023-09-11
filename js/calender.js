$(function () {
  // .sec3 - pc/tablet
  $(".multi-select-calendar").pignoseCalendar({
    lang: "ko",

    multiple: false,
    select: onSelectHandler,
    minDate: moment().format("YYYY-MM-DD"), // 지난날짜 선택 못함
  });
  function onSelectHandler(date, context) {
    var $element = context.element;
    var $calendar = context.calendar;
    var $box = $element.siblings(".box").hide();
    var text = "선택하신 날짜 :  ";

    if (date[0] !== null) {
      text += date[0].format("YYYY-MM-DD");
      $(".reserve-select").slideDown(500);
    }

    if (date[0] !== null && date[1] !== null) {
      text += " ~ ";
    } else if (date[0] === null && date[1] == null) {
      text += "nothing";
      $(".reserve-select").slideUp(500);
    }

    if (date[1] !== null) {
      text += date[1].format("YYYY-MM-DD");
    }

    $box.text(text);
  }
  //시간선택시 클래스 추가
  $(".select-time").on("click", function (e) {
    $(e.target).addClass("select");
    $(e.target).siblings().removeClass("select");
  });

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
