$(function () {
	/* Nice Select */
  $(".nice-select").niceSelect();
  
  // ======= Common
  // SNB 탭 버튼 클릭
  $("ul.snb__tabs li.tabs__link").click(function () {
		var tab_id = $(this).attr("data-tab");

		$("ul.snb__tabs li.tabs__link").removeClass("on");
		$(".snb-tab__content").removeClass("on");

		$(this).addClass("on");
		$("#" + tab_id).addClass("on");
  });

  // 헤더 검색 버튼 클릭
  $(".header__menu .btn_search").click(function () {
    $(".header-search__wrap").show();
    setTimeout(function () {
      $(".header__search").slideDown();
    }, 100)
  });
  $(".header__search .btn_close").click(function () {
    $(".header__search").slideUp();
    setTimeout(function () {
			$(".header-search__wrap").fadeOut();
		}, 500);
  });
  $(".header__menu .btn_user").click(function () {
    $(this).siblings().slideToggle()
  });
  
  // Input (.form-control) 텍스트 입력시 btn_delete on/off
  $(".form-control").on("propertychange change paste input", function () { 
    if ($(this).val().length > 0) {
			$(this).siblings(".btns").find(".btn_delete").show();
		} else {
			$(this).siblings(".btns").find(".btn_delete").hide();
		}
  })

  $(".input__box .btn_delete").click(function () {
    $(this).parents('.btns').siblings('input').val("")
    $(this).hide()
  });

  // 비밀번호 숨김/보임
  $(".input__box .btn_eye").click(function () {
		$(this).toggleClass("show");
		if ($(this).hasClass("show")) {
			$(this).parents(".btns").siblings("input").prop("type", "text");
		} else {
			$(this).parents(".btns").siblings("input").prop("type", "password");
		}
	});

	//======== PAD & MOBILE
	// 헤더 메뉴 클릭
  $(".header .btn_mo_menu").click(function () {
    $("#snb").show()
    setTimeout(function () {
      $("#snb").toggleClass("open");
    }, 50)
	});
  $("#snb").click(function (e) {
    if (e.target.className.includes("sidebar_snb")) {
      $("#snb").removeClass("open");
      setTimeout(function () {
				$("#snb").hide();
			}, 500);
		}
  });
  
})

// 반응형 resize
$(window).on("resize", function () {
  let width = $(window).width();
});


// ====== Modal 공통
function openModal(id) {
  $("#" + id).addClass('open');
}

function closeModal(id) {
  $("#" + id).removeClass('open')
}

function closeAllModal() {
  $(".modal").removeClass('open')
}

$(document).keydown(function (event) {
  if (event.keyCode == 27 || event.which == 27) {
    $(".modal").removeClass('open')
  }
});

// Common Function
function handleOnInput(el, maxlength) {
	if (el.value.length > maxlength) {
		el.value = el.value.substr(0, maxlength);
	}
}

function inputNextStep(el, maxlength) {
	if (el.value.length >= maxlength) {
		$(el).next().focus();
	}
}