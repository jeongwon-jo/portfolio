$(function () {
	//=============== 장바구니 Up, Down 버튼 (스크롤 기능)
	let lastClickTime = 0;
	$(".cart-product__arrow .btn")
		.off("click")
		.on("click", function (e) {
			const currentTime = new Date().getTime();
			const timeDiff = currentTime - lastClickTime;

			// 일정 시간(예: 500ms) 이내에 다시 클릭한 경우 이벤트를 무시 (더블클릭 방지)
			if (timeDiff < 500) {
				e.preventDefault();
				return;
			}

			lastClickTime = currentTime;

			// true : 다운 버튼 누름, false: 업 버튼 누름
			let isDown = $(this).hasClass("btn_down");
			let cartProductList = $(this)
				.parent(".cart-product__arrow")
				.siblings(".cart-product__wrap")
				.find(".cart-product__list");

			let productRow = Number($(cartProductList).data("row"));
			let cartProductItemCnt = Number(
				cartProductList.children(".cart-product__item").length
			);
			let transformY = cartProductList.css("transform");

			const matrixValues = transformY.match(/matrix.*\((.+)\)/)[1].split(", ");
			const y = Number(matrixValues[5]);

			if (isDown) {
				let activeItem = cartProductList.find(".cart-product__item.active");
				let activeItemHeight = activeItem.height() + 40;

				if (activeItem.index() + 1 == 1) {
					$(this).siblings(".btn_up").attr("disabled", false);
				}
				if (activeItem.index() + 1 == cartProductItemCnt - productRow) {
					$(this).attr("disabled", true);
				}

				activeItem.next().addClass("active");
				activeItem.removeClass("active");

				cartProductList.css(
					"transform",
					`translateY(${y - activeItemHeight}px)`
				);
			} else {
				let activeItem = cartProductList.find(".cart-product__item.active");
				let activePrevItem = cartProductList
					.find(".cart-product__item.active")
					.prev();
				let activeItemHeight = activePrevItem.height() + 40;

				if (activeItem.index() + 1 == 2) {
					$(this).attr("disabled", true);
				}

				if (activeItem.index() + 1 == cartProductItemCnt - (productRow - 1)) {
					$(this).siblings(".btn_down").attr("disabled", false);
				}

				activeItem.prev().addClass("active");
				activeItem.removeClass("active");

				cartProductList.css(
					"transform",
					`translateY(${y + activeItemHeight}px)`
				);
			}
		});
})

// ====== Modal 공통
function openModal(id) {
	$("#" + id).show();
}

function closeModal(id) {
	$("#" + id).hide();
}

//=============== 수량 조절 버튼
// 수량 UP
function clickIncreaseBtn(e, start, max) {
	let productCount = Number($(e.target).siblings(".count").text());
	productCount++;

	if (productCount > start) {
		$(e.target).siblings(".btn_decrease").attr("disabled", false);
	}

	if (max && (productCount == max)) {
		$(e.target).attr("disabled", true);
	} else {
		$(e.target).attr("disabled", false);
	}

	$(e.target).siblings(".count").text(productCount);
	
}

// 수량 DOWN
function clickDecreaseBtn(e, min , max) {
	let productCount = Number($(e.target).siblings(".count").text());
	productCount--;
	
	if (productCount == min) {
		$(e.target).attr("disabled", true);
	}

	if (max && productCount == (max - 1)) {
		$(e.target).siblings(".btn_increase").attr("disabled", true);
	} else {
		$(e.target).siblings(".btn_increase").attr("disabled", false);
	}

	$(e.target).siblings(".count").text(productCount);
}