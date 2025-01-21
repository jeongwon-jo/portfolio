<?php include $_SERVER["DOCUMENT_ROOT"]."/inc/head.php"; ?>
<body>
  <div id="wrap">
    <div class="dashboard">
      <?php include $_SERVER["DOCUMENT_ROOT"]."/inc/header.php"; ?>
      <main class="main">
        <div class="contents">
          <div class="main_header">
            <div class="title">
              <h1>지점별 일일보고</h1>
            </div>
            <ul class="breadcrumb">
              <li class="active">지점별 일일보고</li>
              <li>관리자 보고관리</li>
              <li class="home"><span>HOME</span></li>
            </ul>
          </div>
          <div class="main_container">
            <div class="branch-daily__inner">
              <form action="" class="form_search mt20">
                <fieldset>
                  <div class="search__inner">
                    <div class="search">
                      <label for="" class="search_label">날짜</label>
                      <div class="search_content">
                        <div class="date_box">
                          <input type="text" id="" name="" value="" class="datepicker" placeholder="YYYY-MM-DD" readonly>
                        </div>
                      </div>
                    </div>
                    <div class="search">
                      <label for="" class="search_label">지점</label>
                      <div class="search_content">
                        <select name="" id="" class="nice-select select-primary sm w216">
                          <option value="">전체</option>
                          <option value="">강남점</option>
                          <option value="">부산점</option>
                        </select>
                      </div>
                    </div>
                    <div class="search">
                      <button type="button" class="btn_search"><span>검색</span></button>
                      <button type="button" class="btn_reset">초기화</button>
                    </div>
                  </div>
                </fieldset>
              </form>
              <div class="branch-daily-report mt30">
                <div class="branch-daily_header">
                  <h3 class="tit">
                    YYYY-MM-DD (요일)<br>분당 지점 고객관리팀 일일보고서
                  </h3>
                  <button type="button" class="btn btn-sm btn-round btn_brand btn_p30" onclick="openModal('modal-branch-daily-report')">일일 결산 리스트 <b class="c_sub">00</b>건</button>
                </div>
                <div class="tbl_list tbl_branch_daily_report scroll_x mt20">
                  <div class="table_wrap">
                    <div class="table_border">
                      <table>
                        <colgroup>
                          <col style="width: 104px;">
                          <col style="width: 100px;">
                          <col style="width: 56px;">
                          <col style="width: 56px;">
                          <col style="width: 56px;">
                          <col style="width: 56px;">
                          <col style="width: 56px;">
                          <col style="width: 56px;">
                          <col style="width: 56px;">
                          <col style="width: 56px;">
                          <col style="width: 56px;">
                          <col style="width: 56px;">
                          <col style="width: 56px;">
                          <col style="width: 56px;">
                          <col style="width: 56px;">
                          <col style="width: 164px;">
                          <col style="width: 164px;">
                          <col style="width: 164px;">
                          <col style="width: 56px;">
                          <col style="width: 56px;">
                          <col style="width: 56px;">
                          <col style="width: 56px;">
                          <col style="width: 56px;">
                          <col style="width: 56px;">
                          <col style="width: 56px;">
                          <col style="width: 56px;">
                          <col style="width: 56px;">
                          <col style="width: 56px;">
                          <col style="width: 56px;">
                          <col style="width: 56px;">
                          <col style="width: 56px;">
                          <col style="width: 56px;">
                        </colgroup>
                        <thead>
                          <tr>
                            <th rowspan="3">날짜</th>
                            <th rowspan="3">지점</th>
                            <th colspan="10">일일 평균 처리량</th>
                            <th colspan="3">모바일 잔여건수</th>
                            <th colspan="3">모바일 처리완료시점</th>
                            <th colspan="14">예약 건수</th>
                          </tr>
                          <tr>
                            <th colspan="4" class="bg_light_pink">인콜</th>
                            <th colspan="3">아웃콜</th>
                            <th colspan="3">모바일</th>
                            <th rowspan="2">카카오톡</th>
                            <th rowspan="2">APP<br>(약)</th>
                            <th rowspan="2">APP<br>(물품)</th>
                            <th rowspan="2">카카오톡</th>
                            <th rowspan="2">APP (약)</th>
                            <th rowspan="2">APP (물품)</th>
                            <th class="bg_light_pink">대면+<br>비대면</th>
                            <th colspan="7">대면</th>
                            <th colspan="6">비대면</th>
                          </tr>
                          <tr>
                            <th class="bg_pink">총 인입</th>
                            <th class="bg_pink">총 응답</th>
                            <th class="bg_pink">응답률<br>(%)</th>
                            <th class="bg_pink">연간<br>응답률<br>(%)</th>
                            <th class="bg_pink">총합</th>
                            <th>아웃콜A</th>
                            <th>아웃콜B</th>
                            <th>카카오톡</th>
                            <th>APP<br>(약)</th>
                            <th>APP<br>(물품)</th>
                            <th class="bg_pink">총합</th>
                            <th class="bg_pink">총합</th>
                            <th>전화+<br>카카오톡</th>
                            <th>전화</th>
                            <th>카카오톡</th>
                            <th>APP</th>
                            <th>네이버</th>
                            <th>챗봇</th>
                            <th class="bg_pink">총합</th>
                            <th>완료</th>
                            <th>미완료</th>
                            <th>APP</th>
                            <th>네이버</th>
                            <th>챗봇</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="bg_gray">YYYY-MM-DD</td>
                            <td class="bg_gray">분당</td>
                            <td class="tar">0</td>
                            <td class="tar bg_gray">0</td>
                            <td class="tar bg_gray">0</td>
                            <td class="tar">0</td>
                            <td class="tar bg_gray">0</td>
                            <td class="tar bg_gray">0</td>
                            <td class="tar bg_gray">0</td>
                            <td class="tar bg_gray">0</td>
                            <td class="tar bg_gray">0</td>
                            <td class="tar bg_gray">0</td>
                            <td class="tar">0</td>
                            <td class="tar">0</td>
                            <td class="tar">0</td>
                            <td>
                              <div class="completed_date">
                                <input type="text" id="" name="" value="" class="datepicker mini" placeholder="YYYY-MM-DD" readonly>
                                <select name="" id="" class="nice-select select-primary sm">
                                  <option value="">처리 완료</option>
                                </select>
                              </div>
                            </td>
                            <td>
                              <div class="completed_date">
                                <input type="text" id="" name="" value="" class="datepicker mini" placeholder="YYYY-MM-DD" readonly>
                                <select name="" id="" class="nice-select select-primary sm">
                                  <option value="">처리 완료</option>
                                </select>
                              </div>
                            </td>
                            <td>
                              <div class="completed_date">
                                <input type="text" id="" name="" value="" class="datepicker mini" placeholder="YYYY-MM-DD" readonly>
                                <select name="" id="" class="nice-select select-primary sm">
                                  <option value="">처리 완료</option>
                                </select>
                              </div>
                            </td>
                            <td class="tar bg_gray">0</td>
                            <td class="tar bg_gray">0</td>
                            <td class="tar bg_gray">0</td>
                            <td class="tar bg_gray">0</td>
                            <td class="tar bg_gray">0</td>
                            <td class="tar">0</td>
                            <td class="tar">0</td>
                            <td class="tar">0</td>
                            <td class="tar bg_gray">0</td>
                            <td class="tar">0</td>
                            <td class="tar">0</td>
                            <td class="tar">0</td>
                            <td class="tar">0</td>
                            <td class="tar">0</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="branch_daily_note mt20">
                  <textarea name="" id="" class="textarea--typeA" placeholder="특이사항을 입력하세요."></textarea>
                </div>
                <div class="btn_area mt30">
                  <button type="button" class="btn btn-lg btn_black btn-round">임시 저장</button>
                  <button type="button" class="btn btn-lg btn_brand btn-round">확정</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
  <!-- 일일보고서 모달 시작 -->
  <div id="modal-branch-daily-report" class="modal">
    <div class="modal_wrap">
      <div class="modal__inner">
        <div class="modal__header">
          <h3>YYYY-MM-DD (요일) 전 지점  고객관리팀 일일보고서</h3>
          <button type="button" class="btn_modal-close" onclick="closeModal('modal-branch-daily-report')"></button>
        </div>
        <div class="modal__content">
          <div class="tbl_list">
            <table>
              <colgroup>
                <col style="width: 120px;">
                <col style="width: 90px;">
                <col style="width: 90px;">
                <col style="width: 90px;">
                <col style="width: 90px;">
                <col style="width: 90px;">
                <col style="width: 90px;">
                <col style="width: 90px;">
                <col style="width: 90px;">
                <col style="width: 90px;">
                <col style="width: 90px;">
                <col style="width: 90px;">
                <col style="width: 90px;">
                <col style="width: 90px;">
              </colgroup>
              <thead>
                <tr>
                  <th colspan="4">기본정보</th>
                  <th colspan="6">처리 건수</th>
                  <th colspan="2">예약 건수</th>
                  <th colspan="2" class="bg_light_pink">처리 건수 합</th>
                </tr>
                <tr>
                  <th class="bg_light_gray">날짜</th>
                  <th class="bg_light_gray">지점</th>
                  <th class="bg_light_gray">포지션</th>
                  <th class="bg_light_gray">이름</th>
                  <th class="bg_light_gray">인콜</th>
                  <th class="bg_light_gray">아웃콜A</th>
                  <th class="bg_light_gray">아웃콜B</th>
                  <th class="bg_light_gray">카카오톡</th>
                  <th class="bg_light_gray">APP<br>(약)</th>
                  <th class="bg_light_gray">APP<br>(물품)</th>
                  <th class="bg_light_gray">전화</th>
                  <th class="bg_light_gray">카카오톡</th>
                  <th class="bg_pink">개별건수<br>합계</th>
                  <th class="bg_pink">총 합계</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>YYYY-MM-DD</td>
                  <td class="tal">지점</td>
                  <td>포지션</td>
                  <td>누베베</td>
                  <td class="tar">0</td>
                  <td class="tar">0</td>
                  <td class="tar">0</td>
                  <td class="tar">0</td>
                  <td class="tar">0</td>
                  <td class="tar">0</td>
                  <td class="tar">0</td>
                  <td class="tar">0</td>
                  <td class="tar bg_light_pink">0</td>
                  <td class="tar bg_light_pink">0</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="modal__btn mt30">
            <button type="button" class="btn-modal btn_brand" onclick="closeModal('modal-branch-daily-report')">확인</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- 일일보고서 모달 끝 -->
  <script>
    // 헤더 접기 버튼 클릭 토글
    $(".header .btn_fold").click(function () {
      setTimeout(function(){
        calculateWidth()
      }, 300)
    });

    let contentWidth;;
  
    function calculateWidth() {
      let headerWidth = $('header').width();
      let padding = 64
      
      contentWidth = $(window).width() - headerWidth  - padding;

      $('.tbl_branch_daily_report .table_wrap').css("width", `${contentWidth}px`)
    }

    $(window).resize(function() {
      calculateWidth()
    })

    calculateWidth()
  </script>
</body>

</html>