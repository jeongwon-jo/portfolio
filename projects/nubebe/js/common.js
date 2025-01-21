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

	// 헤더 접기 버튼 클릭 토글
	$(".header .btn_fold").click(function () {
		$(".dashboard").toggleClass("fold");
		$("#gnb ul li.depth_1").removeClass("open");
		$("#gnb ul.sub_menu").css("display", "none");
		$("#gnb ul.sub_menu").slideUp();

		$(".dashboard.fold li.depth_1").click(function () {
			$(".dashboard").removeClass("fold");
		});
	});

	// 1뎁스 메뉴 클릭시 하위2뎁스 메뉴 토글
	$("#gnb ul li.depth_1>a.link").click(function () {
		if ($(this).siblings("ul.sub_menu").length != 0) {
			$("#gnb ul li.depth_1")
				.not($(this).parents("li.depth_1"))
				.removeClass("open");
			$(this).parents("li.depth_1").toggleClass("open");
			$("#gnb ul.sub_menu").not($(this).siblings("ul.sub_menu")).slideUp();
			$(this).siblings("ul.sub_menu").slideToggle();
		}
	});

	// 1뎁스가 열려있는 상태에선 하위메뉴 보이게 초기셋팅
	$("#gnb ul li.depth_1.open").children("ul.sub_menu").show();
});

// ====== Header GNB
let currentUrl = window.location.pathname;
let findUrl = false;
let depth1List = document.querySelectorAll('nav#gnb li.depth_1>a.link');
let depth2List = document.querySelectorAll("nav#gnb li.depth_2>a.link");
// 1뎁스 일치 (일일보고, 일일보고조회, 사용자 계정관리, 관리자 계정관리, 일정등록)
depth1List.forEach((depth1) => {
	if (depth1.href.includes(currentUrl)) {
		depth1.parentElement.classList.add("active");
		findUrl = true;
	}
});

// 2뎁스 일치
if (!findUrl) {
	depth2List.forEach((depth2) => {
		if (depth2.href.includes(currentUrl)) {
			depth2.parentElement.classList.add("active");

			// li.depth_1에 open클래스 추가
			depth2.parentElement.parentElement.parentElement.classList.add("open");
		}
	});
}

// ====== Modal 공통
function openModal(id) {
	$("#" + id).addClass("open");
}
function closeModal(id) {
	$("#" + id).removeClass("open");
}
function closeAllModal() {
	$(".modal").removeClass("open");
}
$(document).keydown(function (event) {
	if (event.keyCode == 27 || event.which == 27) {
		$(".modal").removeClass("open");
	}
});


function fnOpenLoading() {
  let loadingContainer = document.querySelector('.loading-container');
  loadingContainer.style.display = 'flex'; 
}

function fnCloseLoading() {
  let loadingContainer = document.querySelector('.loading-container');
  if (loadingContainer) {
    loadingContainer.style.display = 'none';
  }
}

// DOM이 완전히 로드된 후 모든 리소스 로드가 완료되면 로딩 애니메이션을 닫음
window.addEventListener('load', function () {
  
  // 상품리스트 로딩시 제외
  if (typeof getUserProductList === 'undefined') {
    setTimeout(fnCloseLoading, 300); // 로딩 애니메이션을 300ms 후에 닫음
  }
	
	// 취소버튼
	const btnListgo = document.getElementById("btnListgo");
	if (btnListgo) {
		btnListgo.addEventListener("click", () => {
			history.back(-1);
		});
	}
});


// 연락처 자동하이픈
const phoneAutoHyphen = (target) => {
	target.value = target.value
		.replace(/[^0-9]/g, '')
		.replace(/^(\d{0,3})(\d{0,4})(\d{0,4})$/g, "$1-$2-$3").replace(/(\-{1,2})$/g, "");
}

// 사업자번호 자동하이픈
const businessAutoHyphen = (target) => {
	target.value = target.value
		.replace(/[^0-9]/g, '')
		.replace(/^(\d{0,3})(\d{0,2})(\d{0,5})$/g, "$1-$2-$3").replace(/(\-{1,2})$/g, "");
}

// 금액 자동 콤마
const moneyAutoComma = (target) => {
	target.value = target.value
		.replace(/[^0-9]/g, '')  // 숫자가 아닌 문자 제거
		.replace(/\B(?=(\d{3})+(?!\d))/g, ",");  // 세 자리마다 콤마 추가
}

// NUMBER_FORMAT
function numberFormat(number, decimals = 0, decPoint = '.', thousandsSep = ',') {
  const fixedNumber = number.toFixed(decimals);
  let [integerPart, decimalPart] = fixedNumber.split('.');
  integerPart = integerPart.replace(/\B(?=(\d{3})+(?!\d))/g, thousandsSep);
  return decimalPart ? integerPart + decPoint + decimalPart : integerPart;
}


// 문자열 체크
function strCheck(str, type) {
	let REGEX = {
		EMAIL    : /^[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*\.[a-zA-Z]{2,3}$/i,
		ID_RULE  : /^[a-z0-9_-]{6,20}$/,
		PWD_RULE : /^(?=.*[a-zA-Z])((?=.*\d)(?=.*\W)).{8,20}$/,
		NAME_RULE: /^[가-힣a-zA-Z]{2,5}$/,
		NUM_ONLY : /^\d+$/
	};

	if (type === "email") return REGEX.EMAIL.test(str);
	else if (type === "id") return REGEX.ID_RULE.test(str);
	else if (type === "pwd") return REGEX.PWD_RULE.test(str);
	else if (type === "name") return REGEX.NAME_RULE.test(str);
	else if (type === "number") return REGEX.NUM_ONLY.test(str);
	else return false;
}