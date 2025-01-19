$(function () {
	AOS.init();

	SmoothScroll({
		// Scrolling Core
		animationTime: 800, // [ms]
		stepSize: 60, // [px]

		// Acceleration
		accelerationDelta: 50, // 50
		accelerationMax: 2, // 3

		// Keyboard Settings
		keyboardSupport: true, // option
		arrowScroll: 40, // [px]

		// Pulse (less tweakable)
		// ratio of &quot;tail&quot; to &quot;acceleration&quot;
		pulseAlgorithm: true,
		pulseScale: 4,
		pulseNormalize: 1,

		// Other
		touchpadSupport: false, // ignore touchpad by default
		fixedBackground: true,
		excluded: "",
  });

	// 마우스 커서
	let cursor = document.querySelector("#cursor")
	let x = 0, y = 0, mouseX = 0, mouseY = 0;

	// 마우스 위치 추적
	document.addEventListener('mousemove', (e) => {
			mouseX = e.clientX;
			mouseY = e.clientY;
	});

	// 애니메이션 함수
	function animate() {
			x += (mouseX - x) * 0.1;
			y += (mouseY - y) * 0.1;

			cursor.style.left = x + 'px';
			cursor.style.top = y + 'px';

			requestAnimationFrame(animate);
	}

	animate();

	setFlowBanner();
})

function setFlowBanner() {
	const $wrap = $('.footer__slider');
	const $list = $('.footer__slider .list');
	let wrapWidth = ''; //$wrap의 가로 크기
	let listWidth = ''; //$list의 가로 크기
	const speed = 48; //1초에 몇픽셀 이동하는지 설정

	//리스트 복제
	let $clone = $list.clone();
	$wrap.append($clone);
	flowBannerAct()

	//반응형 :: 디바이스가 변경 될 때마다 배너 롤링 초기화
	let oldWChk = window.innerWidth > 1279 ? 'pc' : window.innerWidth > 767 ? 'ta' : 'mo';
	$(window).on('resize', function () {
		let newWChk = window.innerWidth > 1279 ? 'pc' : window.innerWidth > 767 ? 'ta' : 'mo';
		if (newWChk != oldWChk) {
			oldWChk = newWChk;
			flowBannerAct();
		}
	});

	//배너 실행 함수
	function flowBannerAct() {
		//배너 롤링 초기화
		if (wrapWidth != '') {
			$wrap.find('.list').css({ 'animation': 'none' });
			$wrap.find('.list').slice(2).remove();
		}
		wrapWidth = $wrap.width();
		listWidth = $list.width();

		//무한 반복을 위해 리스트를 복제 후 배너에 추가
		if (listWidth < wrapWidth) {
			const listCount = Math.ceil(wrapWidth * 2 / listWidth);
			for (let i = 2; i < listCount; i++) {
				$clone = $clone.clone();
				$wrap.append($clone);
			}
		}
		$wrap.find('.list').css({ 'animation': `${listWidth / speed}s linear infinite flowRolling` });
	}
}

// 반응형 resize
$(window).on("resize", function () {
  let width = $(window).width();
});

// 스크롤 헤더 숨김 표시
let lastScrollTop = 0
function scrollHeader() {
	var _header = $('.header');
	var currentPos = $(window).scrollTop();
	var moveDistance = currentPos - lastScrollTop;
	var scrollRange = -10;
	if (moveDistance > 0) {
		_header.addClass('hide');  
	}
	else {
		if (moveDistance < scrollRange) {
			_header.removeClass('hide');
		}
	}
	lastScrollTop = currentPos;
}

$(window).scroll(function() {
	scrollHeader()
});