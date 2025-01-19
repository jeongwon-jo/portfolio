$(function () {
	/* Nice Select */
	$(".nice-select").niceSelect();

	/* Datepicker */
  $(".datepicker").datepicker({
    dateFormat: "yy-mm-dd",
    dayNamesMin: ["일", "월", "화", "수", "목", "금", "토"],
    monthNames: [
      "1월",
      "2월",
      "3월",
      "4월",
      "5월",
      "6월",
      "7월",
      "8월",
      "9월",
      "10월",
      "11월",
      "12월",
    ],
    monthNamesShort: [
      "1월",
      "2월",
      "3월",
      "4월",
      "5월",
      "6월",
      "7월",
      "8월",
      "9월",
      "10월",
      "11월",
      "12월",
    ],
  });

  $('nav.gnb li.gnb_hover').mouseover(function () {
    $(this).children('.gnb_ul_2depth').stop().slideDown()
  }).mouseout(function () {
    $(this).children('.gnb_ul_2depth').stop().slideUp()
  })

  $('nav.mobile_gnb li.gnb_hover').click(function () {
    $(this).toggleClass('active')
    $(this).children('.gnb_ul_2depth').stop().slideToggle()
  })

  $('.header_mo_menu').click(function () {
    $('.mobile_sidebar').fadeIn()
    $("body").addClass("fixed");
    const pageY = window.scrollY;
    $("body.fixed").css("position", "fixed");
    $("body.fixed").css("left", "0");
    $("body.fixed").css("top", `${(-(pageY))}px`);
  })

  $('.header_mo_close_menu').click(function () {
    $('.mobile_sidebar').fadeOut()
    const top = $("body").css("top").replace("px", "");
    const topNum = (Number(-top));

    $("body.fixed").css("top", `0px`);
    $("body.fixed").css("position", "static");
    $(window).scrollTop(topNum);
    $("body").removeClass("fixed");
  })
})

// 반응형 resize
let windowWidth = $(window).width();
$(window).on("resize", function () {
  windowWidth = $(window).width();
  if (windowWidth > 768) {
    $('.mobile_sidebar').fadeOut()
    const top = $("body").css("top").replace("px", "");
    const topNum = (Number(-top));

    $("body.fixed").css("top", `0px`);
    $("body.fixed").css("position", "static");
    $(window).scrollTop(topNum);
    $("body").removeClass("fixed");
  }
});


// ====== Modal 공통
function openModal(id) {
  $("#" + id).addClass('open');
  $("body").addClass("fixed");
  const pageY = window.scrollY;
  $("body.fixed").css("position", "fixed");
  $("body.fixed").css("left", "0");
  $("body.fixed").css("top", `${(-(pageY))}px`);
}

function closeModal(id) {
  $("#" + id).removeClass('open')
  const top = $("body").css("top").replace("px", "");
  const topNum = (Number(-top));

  $("body.fixed").css("top", `0px`);
  $("body.fixed").css("position", "static");
  $(window).scrollTop(topNum);
  $("body").removeClass("fixed");
}

function closeAllModal() {
  $(".modal").removeClass('open')
  const top = $("body").css("top").replace("px", "");
  const topNum = (Number(-top));

  $("body.fixed").css("top", `0px`);
  $("body.fixed").css("position", "static");
  $(window).scrollTop(topNum);
  $("body").removeClass("fixed");
}

$(document).keydown(function (event) {
  if (event.keyCode == 27 || event.which == 27) {
    $(".modal").removeClass('open')

    const top = $("body").css("top").replace("px", "");
    const topNum = (Number(-top));

    $("body.fixed").css("top", `0px`);
    $("body.fixed").css("position", "static");
    $(window).scrollTop(topNum);
    $("body").removeClass("fixed");
  }
});