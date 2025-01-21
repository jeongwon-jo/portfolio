$(function () {
  AOS.init();
  // 헤더 GNB 호버이벤트
  $('.header_logo_gnb nav.gnb').mouseover(function () {
    $(".header").addClass('open');
  }).mouseout(function () {
    $(".header").removeClass("open");
  })

  $(".header_logo_gnb nav.gnb").on("touchstart", function () {
		$('.header').removeClass('open')
	});


  // 사이드바 노출/비노출
  $(".btn_open_menu").click(function () {
    $(this).fadeOut()
		$(".header_sidebar").addClass("open");
  });
  
  $(".btn_close_sidebar, .header_sidebar .sidebar_2depth a").click(function () {
		$(".btn_open_menu").fadeIn();
		$(".header_sidebar").removeClass("open");
	});

  // 사이드바 메뉴 열림/닫힘
  $("#sidebar .sidebar_1dpeth>a").click(function () {
    $("#sidebar .sidebar_1dpeth")
			.not($(this).parents(".sidebar_1dpeth"))
			.removeClass("open");
    $(this).parents(".sidebar_1dpeth").toggleClass("open");

    $("#sidebar .sidebar_2depth").not($(this).siblings()).slideUp();
    $(this).siblings().slideToggle()
  });

  $("#sidebar .sidebar_1dpeth.open").children(".sidebar_2depth").slideDown();

  // 모바일 사이드바 메뉴 열림/닫힘
  $(".btn_mo_menu").click(function () {
    $(".mo_header_sidebar").fadeIn();
    $("body").addClass("fixed");
		const pageY = window.scrollY;
		$("body.fixed").css("position", "fixed");
		$("body.fixed").css("left", "0");
		$("body.fixed").css("top", `${-pageY}px`);
  });

  $(".btn_close_mo_sidebar, .mo_header_sidebar .sidebar_2depth a").click(
		function () {
			$(".mo_header_sidebar").fadeOut();
			const top = $("body").css("top").replace("px", "");
			const topNum = Number(-top);

			$("body.fixed").css("top", `0px`);
			$("body.fixed").css("position", "static");
			$(window).scrollTop(topNum);
			$("body").removeClass("fixed");
		}
	);
  
  // 스크롤탑
  $(".scrolltop").click(function () {
    $('html, body').animate({scrollTop: 0}, 1000)
  });
})

const sidebarOuter = document.querySelector(".header_sidebar");
window.onclick = function (event) {
	// 모달 팝업 외부 클릭 시 이벤트 처리
  if (event.target == sidebarOuter) {
    $(".btn_open_menu").fadeIn(); 
		event.target.classList.remove('open')
	}
};

// 반응형 resize
$(window).on("resize", function () {
  let width = $(window).width();
  if (width > 767) {
    $(".mo_header_sidebar").hide();
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