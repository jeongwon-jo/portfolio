$(function() {    
  $('.fixed-btn .btn_share').click(function() {
    $('.fixed-btn_wrap').addClass('open')

    $("body").addClass("fixed");
    const pageY = window.scrollY;
    $("body.fixed").css("position", "fixed");
    $("body.fixed").css("left", "0");
    $("body.fixed").css("top", `${(-(pageY))}px`);
  })  

  $('.fixed-btn_wrap').click(function(e) {
    if(e.target.className.includes('fixed-btn_wrap')) {
      $('.fixed-btn_wrap').removeClass('open')

      const top = $("body").css("top").replace("px", "");
      const topNum = (Number(-top));

      $("body.fixed").css("top", `0px`);
      $("body.fixed").css("position", "static");
      $(window).scrollTop(topNum);
      $("body").removeClass("fixed");
    }
  })

  // 이벤트 스와이퍼
  var eventSwiper = new Swiper(".event-2-swiper", {
    slidesPerView: 3,
    effect: 'coverflow',
    speed: 500,
    coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 200,
      modifier: 2,
      slideShadows: false,
    },
    centeredSlides: true,
    loop: false,
    mousewheel: true,
    watchSlidesVisibility: true,
    watchOverflow: true
  });

  let currentWeek = '';
  let today = new Date();

  const start1weekDate = new Date('2024-09-24');
  const end1weekDate = new Date('2024-09-30');

  const start2weekDate = new Date('2024-10-01');
  const end2weekDate = new Date('2024-10-07');

  const start3weekDate = new Date('2024-10-08');
  const end3weekDate = new Date('2024-10-14');


  if (today.getTime() >= start1weekDate.getTime() && today.getTime() <= end1weekDate.getTime()) {
    currentWeek = '1'
  } else if (today.getTime() >= start2weekDate.getTime() && today.getTime() <= end2weekDate.getTime()) {
    currentWeek = '2'
  } else if (today.getTime() >= start3weekDate.getTime() && today.getTime() <= end3weekDate.getTime()) {
    currentWeek = '3'
  } else if(today.getTime() < start1weekDate.getTime()) {
    currentWeek = '0'
  } else if(today.getTime() > end3weekDate.getTime()) {
    currentWeek = '4'
  }

  // 하단 이벤트 오픈, 마감 띄우기
  if (currentWeek == '1') {
    $('.prize_list--typeA .prize_item--typeA.item2 .dim.open').css("display", "flex")
    $('.prize_list--typeA .prize_item--typeA.item3 .dim.open').css("display", "flex")
  } else if (currentWeek == '2') {
    $('.prize_list--typeA .prize_item--typeA.item1 .dim.close').css("display", "flex")
    $('.prize_list--typeA .prize_item--typeA.item3 .dim.open').css("display", "flex")
  } else if (currentWeek == '3') {
    $('.prize_list--typeA .prize_item--typeA.item1 .dim.close').css("display", "flex")
    $('.prize_list--typeA .prize_item--typeA.item2 .dim.close').css("display", "flex")
  } else if (currentWeek == '0') {
    $('.prize_list--typeA .prize_item--typeA.item1 .dim.open').css("display", "flex")
    $('.prize_list--typeA .prize_item--typeA.item2 .dim.open').css("display", "flex")
    $('.prize_list--typeA .prize_item--typeA.item3 .dim.open').css("display", "flex")
  } else if (currentWeek == '4') {
    $('.prize_list--typeA .prize_item--typeA.item1 .dim.close').css("display", "flex")
    $('.prize_list--typeA .prize_item--typeA.item2 .dim.close').css("display", "flex")
    $('.prize_list--typeA .prize_item--typeA.item3 .dim.close').css("display", "flex")
  }
})

const SERVER_URL = 'https://hereur.app/api/v1/pm'
let luckyCode;
let userId;
let week;

function Mobile() { return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent); }

function downloadHereUR() {
  if(Mobile()) {
    location.href = "https://wtl.im/c54b7e8a45"
  } else {
    openModal('modal-qr')
  }
  
}

function copyLink() {
  let link = window.location.href;

  var tempInput = document.createElement("input");
  tempInput.setAttribute("value", link);
  document.body.appendChild(tempInput);
  tempInput.select();
  document.execCommand("copy");
  document.body.removeChild(tempInput);

  alert("링크가 클립보드에 복사되었습니다.");
}

// 당첨결과 확인하기
function confirmWinner() {
  // 행운코드, 유저 아이디 초기화
  luckyCode = '';
  userId = '';

  let code = $('#code').val()

  if (code) {
    // 한글 입력 방지
    const korean = /[ㄱ-ㅎ|ㅏ-ㅣ|가-힣]/;
    if (korean.test(code)) {
      alert('영문,숫자만 입력 가능합니다')
      return false;
    }

    // 6자리 미만 입력시
    if (code.length < 6) {
      alert('정확한 초대코드를 입력해 주세요')
      return false;
    }

    // 당첨 결과 확인하기 API 연동
    axios({
      method: 'post',
      url: `${SERVER_URL}`,
      header: { "Content-Type": "application/json", "Accept" : "application/json"},
      data: { "inviteCode": code }
    })
      .then(response => {
        // console.log(response.data);

        luckyCode = response.data.result.luckyCode.join();
        $('#eventId').val(response.data.result.id)
        $('#userId').val(response.data.result.userId)
        $('#weekNumber').val(response.data.result.week)
        userId = response.data.result.userId;
        week = response.data.result.week;

        // 결과에 따른 모달 노출
        if (response.data.result.isDrawn) {
          showWinnerModal(response.data.result);
        } else {
          showFailedModal(response.data.result)
        }
      })
      .catch(error => {
        let errMessage = '';

        if(error.response.data.code == '4000101' && (week == 1 || week == 2)) {
          errMessage = '이번주 수령 가능한 상품을 모두 받았습니다. <br> 다음주에 다시 도전해주세요!'
        } else if (error.response.data.code == '4000101' && week == 3) {
          errMessage = '이번주에 수령 가능한 상품을 모두 받았습니다. <br>참여해 주셔서 감사합니다.'
        } else if (error.response.data.code == '4000007') {
          errMessage = '존재하지 않는 초대 코드입니다. <br> 다시 확인해 주세요.'
        }

        
        $('.not_correct_title').text('')
        if (errMessage != '') {
          $('.not_correct_title').html(errMessage)
        } else {
          $('.not_correct_title').html(error.response.data.message)
        }
      
        openModal('modal-info-notcorrect')
      })
  } else {
    alert("코드를 입력해 주세요.")
  }
}

// ========= 당첨 모달 띄우기
function showWinnerModal(result) {
  // 당첨 모달 띄우기
  $('#telNo').val('')
  $('#chk').prop("checked", false)
  $('#chk2').prop("checked", false)
  openModal('modal-code-winner')
  // 오늘의 행운코드 노출
  $('.luckyCode').text(luckyCode)

  $('#winner_img').attr("src", `./_img/winner_${result.pz}.png`);

  // 선착순 모달
  if (result.pz == "sb" || result.pz == "cv" || result.pz == "bv") {
    // 당첨 코드, 몇주차 타이틀 설정 & 이미지
    $('.winner_tit').innerHTML(
      `<span id="week">${result.week}</span>주차 행운의 경품 당첨`
    )
  }

  // 스페셜 모달
  else if (result.pz == "ck" || result.pz == "bg") {
    // 당첨 코드, 몇주차 타이틀 설정 & 이미지
    $('.winner_tit').text('스페셜 경품 당첨')
  }
}

// ========= 낙첨 모달 띄우기
function showFailedModal(result) {
  // 나의 당첨 이력 노출
  getWinnerHistory(result.userId)

  // 모달띄우기
  openModal('modal-code-fail')
}

// ========= 당첨 이력 리스트 띄우기
function getWinnerHistory(userId) {
  $('.my_winner_list_content').show()
  axios({
    method: 'get',
    url: `${SERVER_URL}/user/${userId}`,
    header: { "Content-Type": "application/json", "Accept": "application/json" },
  })
    .then(response => {
      let winnerList = response.data.result;

      $('.my_winner_list').text('')
      if(winnerList.length > 0) {
        winnerList.forEach(winner => {
          let prizeProduct;
          if (winner.pz == "sb") {
            prizeProduct = '스타벅스 아메리카노 교환권'
          } else if(winner.pz == "cv") {
            prizeProduct = 'CU편의점 상품권 (5천원)'
          } else if (winner.pz == "bv") {
            prizeProduct = '배달의민족 상품권 (5천원)'
          } else if (winner.pz == "ck") {
            prizeProduct = '교촌치킨 반반오리지날 + 콜라SET'
          } else if (winner.pz == "bg") {
            prizeProduct = '배달의민족 상품권 5만 원권'
          }

          let li = `
            <li>
              <span>${winner.createdAt}</span>
              <p>${prizeProduct}</p>
            </li>
          `;

          $('.my_winner_list').append(li)
        });
      } else {
        $('.my_winner_list_content').hide()
      }

      // 오늘의 행운코드 노출
      $('.luckyCode').text(luckyCode)
    })
    .catch(error => {
      console.log(error);
    })
}

// ========= 전화번호 제출
function submitTelNo() {
  let telNo = $('#telNo').val()
  let eventId = $('#eventId').val()

  if(telNo == "") {
    alert('전화번호를 입력해 주세요')
    return false;
  }

  if(!$('#chk').is(':checked') || !$('#chk2').is(':checked')) {
    alert('개인 정보 수집 이용에 동의해 주세요')
    return false;
  }

  if(telNo.length != 11) {
    alert('정확한 전화번호를 입력해 주세요')
    return false;
  }


  if(telNo && eventId) {
    axios({
      method: 'patch',
      url: `${SERVER_URL}/${eventId}/phone`,
      header: { "Content-Type": "application/json", "Accept": "*/*" },
      data: { "phone": telNo }
    })
      .then(response => {
        // console.log(response);

        closeModal('modal-code-winner')
        
        // 나의 당첨 이력 노출
        getWinnerHistory($('#userId').val())

        // 정보제출완료 모달 띄우기
        openModal('modal-info-confirm')
      })
      .catch(error => {
        $('.not_correct_title').text('')
        $('.not_correct_title').html(`입력하신 정보와<br>
          히어유알 가입 정보가 일치하지 않습니다.`)
        openModal('modal-info-notcorrect')

      })
  }
  
}