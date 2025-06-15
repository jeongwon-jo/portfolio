var floatPosition = parseInt($(".sidebar").css("top"));

// scroll 인식
$(window).scroll(function () {
	var currentTop = $(window).scrollTop();
  var bannerTop = currentTop + floatPosition + "px";
  
	$(".sidebar").stop().animate(
		{ top: bannerTop }, 800
	);
});

$(window).on("resize", function () {
  let width = $(window).width();
});

$(function () {
	AOS.init();

	$(".nav_li_depth1")
		.mouseover(function () {
			let subMenuId = $(this).attr("data-subMenuId");
			$(`#${subMenuId}`).addClass("active");
		})
		.mouseout(function () {
			let subMenuId = $(this).attr("data-subMenuId");
			$(`#${subMenuId}`).removeClass("active");
		});

  $('.btn_mo_menu').click(function() {
    $('.mo_header_sidebar').show()
    setTimeout(function() {
      $('.mo_header_sidebar').addClass('open')
    }, 50)
  })

  $('.mo_header_sidebar').click(function(e) {
    if(e.target.className.includes('mo_header_sidebar')) {
      $('.mo_header_sidebar').hide()
      $('.mo_header_sidebar').removeClass('open')
    }
  })
  
  // Mobile Sidebar GNB Open
  $('.sidebar_gnb--1depth>li>a').click(function(e) {
    $('.sidebar_gnb--1depth>li').not($(this).parents('li')).removeClass('open')
    $(this).parents('li').toggleClass('open')
    $('.sidebar_gnb--2depth').not($(this).siblings()).slideUp()
    $(this).siblings(".sidebar_gnb--2depth").slideToggle()
  })
})

const urlParams = new URL(location.href).searchParams;
const targetName = urlParams.get("target");

if (targetName) {
  const scrollPosition = document.querySelector(`#${targetName}`).offsetTop;
  window.scrollTo({ top: scrollPosition - 185, behavior: "smooth" });
  
  $(".page__tabs li").removeClass("active"); 
  
  if ($(`[data-target="#${targetName}"]`).parents("li").is(":first-child")) {
		$(".page__tabs").addClass("active_first");
	} else if ($(`[data-target="#${targetName}"]`).parents("li").is(":last-child")) {
		$(".page__tabs").removeClass("active_first");
		$(".page__tabs").addClass("active_last");
	} else {
		$(".page__tabs").removeClass("active_first");
		$(".page__tabs").removeClass("active_last");
	}
  
  $(`[data-target="#${targetName}"]`).parents("li").addClass("active");
}

const tabButton = document.querySelectorAll(".page__tabs ul li button");
for (const button of tabButton) {
  button.addEventListener("click", function () {
		const scrollPosition = document.querySelector(
			this.dataset.target
    ).offsetTop;

		window.scrollTo({ top: scrollPosition - 185, behavior: "smooth" });
	});
}


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
