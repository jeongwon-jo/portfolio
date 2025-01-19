const content = document.getElementById("main");
const viewport = document.getElementById("container");
const zoomButton = document.getElementById("btn_zoom");

let isZoomed = false;
let scale = 1;
let posX = 0;
let posY = 0;
let startX = 0;
let startY = 0;
let isDragging = false;

// 고정된 크기
const viewportWidth = viewport.offsetWidth;
const viewportHeight = viewport.offsetHeight;

//=============== Zoom 기능 유지
let zoom = (window.localStorage.getItem("zoom") === "true");

if ($("#btn_zoom")) {
	if (zoom) {
		$("#btn_zoom").addClass("active");
	} else {
		$("#btn_zoom").removeClass("active");
	}	
}

if (zoom) {
	isZoomed = !isZoomed;

	scale = 2; // 200% zoom
	content.style.cursor = "grab";
	document.querySelector("body").style.userSelect = "none";

	updateTransform();
}

// Toggle zoom
if (zoomButton) {
  zoomButton.addEventListener("click", () => {
    isZoomed = !isZoomed;
    if (isZoomed) {
      scale = 2; // 200% zoom
      content.style.cursor = "grab";
      document.querySelector("body").style.userSelect = "none";
    } else {
      scale = 1; // Reset zoom
      posX = 0;
      posY = 0;
      content.style.cursor = "default";
      document.querySelector("body").style.userSelect = "unset";
    }
    updateTransform();
  });
}

// Update content transform
function updateTransform() {
	// 초과 이동 제한: 콘텐츠 크기와 뷰포트 크기 비교
	const maxX = content.offsetWidth - viewportWidth / 2;
	const maxY = content.offsetHeight - viewportHeight / 2;

	// posX와 posY가 콘텐츠의 크기 범위 내에 있도록 제한
	// posX: 왼쪽, 오른쪽으로의 이동 제한 (오른쪽 초과 방지)
	console.log("posX: ", posX);
	console.log("-maxX: ", -maxX);

	posX = Math.max(Math.min(0, posX), -maxX); // 왼쪽과 오른쪽 모두 이동 방지

	// posY: 위, 아래로의 이동 제한 (위, 아래 초과 방지)
	posY = Math.max(Math.min(0, posY), -maxY); // 위쪽과 아래쪽 모두 이동 방지

	console.log(scale);

	setTimeout(function () {
		content.style.transform = `scale(${scale}) translate(${posX}px, ${posY}px)`;
	});
}

// Start drag
content.addEventListener("mousedown", (e) => {
	if (!isZoomed) return;
	isDragging = true;
	content.classList.add("grabbing");
	startX = e.clientX;
	startY = e.clientY;
});

content.addEventListener("touchstart", (e) => {
	if (!isZoomed) return;
	isDragging = true;
	const touch = e.touches[0];
	startX = touch.clientX;
	startY = touch.clientY;
});

// Dragging
content.addEventListener("mousemove", (e) => {
	if (!isDragging || !isZoomed) return;
	const dx = e.clientX - startX;
	const dy = e.clientY - startY;
	startX = e.clientX;
	startY = e.clientY;
	posX += dx / scale;
	posY += dy / scale;

	// Update transform after dragging
	updateTransform();
});

content.addEventListener("touchmove", (e) => {
	if (!isDragging || !isZoomed) return;
	const touch = e.touches[0];
	const dx = touch.clientX - startX;
	const dy = touch.clientY - startY;
	startX = touch.clientX;
	startY = touch.clientY;
	posX += dx / scale;
	posY += dy / scale;

	// Update transform after dragging
	updateTransform();
});

// Stop drag
content.addEventListener("mouseup", () => {
	isDragging = false;
	content.classList.remove("grabbing");
});

content.addEventListener("mouseleave", () => {
	isDragging = false;
	content.classList.remove("grabbing");
});

content.addEventListener("touchend", () => {
	isDragging = false;
});
