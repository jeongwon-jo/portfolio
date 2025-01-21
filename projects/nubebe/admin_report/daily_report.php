<?php include $_SERVER["DOCUMENT_ROOT"]."/inc/head.php"; ?>

<body>
  <div id="wrap">
    <div class="dashboard">
      <?php include $_SERVER["DOCUMENT_ROOT"]."/inc/header.php"; ?>
      <main class="main">
        <div class="contents">
          <div class="main_header">
            <div class="title">
              <h1>일일 보고서 조회</h1>
            </div>
            <ul class="breadcrumb">
              <li class="active">일일 보고서 조회</li>
              <li>관리자 보고관리</li>
              <li class="home"><span>HOME</span></li>
            </ul>
          </div>
          <div class="main_container">
            <div class="daily-report__inner">
              <h2 class="tit">일일 보고</h2>
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
                      <button type="button" class="btn_search"><span>검색</span></button>
                    </div>
                  </div>
                </fieldset>
              </form>
              <div class="daily-report__content mt20">
                <div class="daily-report_head">
                  <h3 class="daily-report_title"><span class="date">0000. 00. 00 (요일)</span><br>CRM 일일보고서 </h3>
                  <div class="daily-report_summary">
                    <div class="summary">
                      <div class="tit">
                        <span>2024년</span><br>
                        <h3>인콜(연간 응답율)</h3>
                      </div>
                      <div class="result">
                        <h1>000.0<span class="percent">%</span></h1>
                      </div>
                    </div>
                    <div class="summary">
                      <div class="tit">
                        <span>총</span><br>
                        <h3>초진 예약</h3>
                      </div>
                      <div class="result result_reserv">
                        <h1>999</h1>
                        <div class="last_week">
                          <span>전주</span>
                          <h2>99</h2>
                        </div>
                        <div class="last_week">
                          <span>2주전</span>
                          <h2>99</h2>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tbl_list mt20">
                  <table>
                    <colgroup>
                      <col style="width: 150px;">
                      <col style="width: 134px;">
                      <col style="width: 134px;">
                      <col style="width: 134px;">
                      <col style="width: 134px;">
                      <col style="width: 134px;">
                      <col style="width: 134px;">
                      <col style="width: 134px;">
                      <col style="width: 134px;">
                      <col style="width: 134px;">
                      <col style="width: 134px;">
                      <col style="width: 134px;">
                      <col style="width: 134px;">
                    </colgroup>
                    <thead>
                      <tr>
                        <th></th>
                        <th class="bg_light_pink">예약(총합)</th>
                        <th class="bg_light_pink">대면 예약(총합)</th>
                        <th class="bg_light_pink">비대면 예약(총합)</th>
                        <th>대면 APP 예약</th>
                        <th>대면 네이버 예약</th>
                        <th>대면 챗봇 예약</th>
                        <th>대면 전화 +<br>카카오톡 예약</th>
                        <th>비대면 APP 예약</th>
                        <th>비대면 네이버 예약</th>
                        <th>비대면 챗봇 예약</th>
                        <th>비대면 예약(완료)</th>
                        <th>비대면 예약(미완료)</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="tal">0000. 00. 00 (요일)</td>
                        <td class="tar bg_pink no_border">0000</td>
                        <td class="tar bg_light_pink">0000</td>
                        <td class="tar bg_light_pink">0000</td>
                        <td class="tar">0000</td>
                        <td class="tar">0000</td>
                        <td class="tar">0000</td>
                        <td class="tar">0000</td>
                        <td class="tar">0000</td>
                        <td class="tar">0000</td>
                        <td class="tar">0000</td>
                        <td class="tar">0000</td>
                        <td class="tar">0000</td>
                      </tr>
                      <tr>
                        <td class="tal">전주 동일 요일 대비</td>
                        <td class="tar bg_blue">000.0% +</td>
                        <td class="tar bg_light_blue">000.0%</td>
                        <td class="tar bg_light_blue">000.0%</td>
                        <td class="tar bg_light_blue">000.0%</td>
                        <td class="tar bg_light_blue">000.0%</td>
                        <td class="tar bg_light_blue">000.0%</td>
                        <td class="tar bg_light_blue">000.0%</td>
                        <td class="tar bg_light_blue">000.0%</td>
                        <td class="tar bg_light_blue">000.0%</td>
                        <td class="tar bg_light_blue">000.0%</td>
                        <td class="tar bg_light_blue">000.0%</td>
                        <td class="tar bg_light_blue">000.0%</td>
                      </tr>
                      <tr>
                        <td class="tal">2주 전 동일 요일 대비</td>
                        <td class="tar bg_purple">000.0% +</td>
                        <td class="tar bg_light_purple">000.0%</td>
                        <td class="tar bg_light_purple">000.0%</td>
                        <td class="tar bg_light_purple">000.0%</td>
                        <td class="tar bg_light_purple">000.0%</td>
                        <td class="tar bg_light_purple">000.0%</td>
                        <td class="tar bg_light_purple">000.0%</td>
                        <td class="tar bg_light_purple">000.0%</td>
                        <td class="tar bg_light_purple">000.0%</td>
                        <td class="tar bg_light_purple">000.0%</td>
                        <td class="tar bg_light_purple">000.0%</td>
                        <td class="tar bg_light_purple">000.0%</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="tbl_list mt20">
                  <table>
                    <colgroup>
                      <col style="width: 176px;">
                      <col style="width: 176px;">
                      <col style="width: 176px;">
                      <col style="width: 176px;">
                      <col style="width: 176px;">
                      <col style="width: 176px;">
                      <col style="width: 176px;">
                      <col style="width: 176px;">
                      <col style="width: 176px;">
                      <col style="width: 176px;">
                    </colgroup>
                    <thead>
                      <tr>
                        <th colspan="2">비고</th>
                        <th class="bg_light_pink">전지점</th>
                        <th>분당(미확정)</th>
                        <th>잠실</th>
                        <th>강남</th>
                        <th>홍대</th>
                        <th>부천</th>
                        <th>부산</th>
                        <th>인천</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td rowspan="3" class="bg_light_gray">인콜</td>
                        <td>총 인입</td>
                        <td class="tar bg_light_pink">0</td>
                        <td class="tar">0</td>
                        <td class="tar">0</td>
                        <td class="tar">0</td>
                        <td class="tar">0</td>
                        <td class="tar">0</td>
                        <td class="tar">0</td>
                        <td class="tar">0</td>
                      </tr>
                      <tr>
                        <td>총 응답</td>
                        <td class="tar bg_light_pink">0</td>
                        <td class="tar">0</td>
                        <td class="tar">0</td>
                        <td class="tar">0</td>
                        <td class="tar">0</td>
                        <td class="tar">0</td>
                        <td class="tar">0</td>
                        <td class="tar">0</td>
                      </tr>
                      <tr>
                        <td class="bg_light_gray">응답률</td>
                        <td class="tar bg_pink no_border">000.0%</td>
                        <td class="tar">000.0%</td>
                        <td class="tar">000.0%</td>
                        <td class="tar">000.0%</td>
                        <td class="tar">000.0%</td>
                        <td class="tar">000.0%</td>
                        <td class="tar">000.0%</td>
                        <td class="tar">000.0%</td>
                      </tr>
                      <tr>
                        <td rowspan="2" class="bg_light_gray">카톡</td>
                        <td>총 합</td>
                        <td class="tar bg_light_pink">0000</td>
                        <td class="tar">0</td>
                        <td class="tar">0</td>
                        <td class="tar">0</td>
                        <td class="tar">0</td>
                        <td class="tar">0</td>
                        <td class="tar">0</td>
                        <td class="tar">0</td>
                      </tr>
                      <tr>
                        <td class="bg_light_gray">잔여 건수</td>
                        <td class="tar bg_pink no_border">000</td>
                        <td class="tar">000</td>
                        <td class="tar">000</td>
                        <td class="tar">000</td>
                        <td class="tar">000</td>
                        <td class="tar">000</td>
                        <td class="tar">000</td>
                        <td class="tar">000</td>
                      </tr>
                      <tr>
                        <td rowspan="3" class="bg_light_gray">예약</td>
                        <td>대면 예약</td>
                        <td class="tar bg_light_pink">0</td>
                        <td class="tar">0</td>
                        <td class="tar">0</td>
                        <td class="tar">0</td>
                        <td class="tar">0</td>
                        <td class="tar">0</td>
                        <td class="tar">0</td>
                        <td class="tar">0</td>
                      </tr>
                      <tr>
                        <td>비대면 예약</td>
                        <td class="tar bg_light_pink">0</td>
                        <td class="tar">0</td>
                        <td class="tar">0</td>
                        <td class="tar">0</td>
                        <td class="tar">0</td>
                        <td class="tar">0</td>
                        <td class="tar">0</td>
                        <td class="tar">0</td>
                      </tr>
                      <tr>
                        <td class="bg_light_gray">총합</td>
                        <td class="tar bg_pink no_border">0</td>
                        <td class="tar">0</td>
                        <td class="tar">0</td>
                        <td class="tar">0</td>
                        <td class="tar">0</td>
                        <td class="tar">0</td>
                        <td class="tar">0</td>
                        <td class="tar">0</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="btn_area end mt20">
                  <button type="button" class="btn btn-lg btn-round btn_brand btn_p40" onclick="openModal('modal-branch-issue')">지점별 특이사항 확인</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
  <!-- 지점별 특이사항 모달 시작 -->
  <div id="modal-branch-issue" class="modal modal--typeA">
    <div class="modal_wrap">
      <div class="modal__inner">
        <div class="modal__header">
          <h3>지점별 특이사항</h3>
          <button type="button" class="btn_modal-close" onclick="closeModal('modal-branch-issue')"></button>
        </div>
        <div class="modal__content">
          <div class="tbl_list">
            <table>
              <colgroup>
                <col style="width: 140px;">
                <col style="width: auto;">
              </colgroup>
              <tbody>
                <tr>
                  <th>분당</th>
                  <td>
                    <textarea class="textarea--typeA" id="" name="" value="" msg="" placeholder="특이사항을 입력해주세요."></textarea>
                  </td>
                </tr>
                <tr>
                  <th>강남</th>
                  <td>
                    <textarea class="textarea--typeA" id="" name="" value="" msg="" placeholder="특이사항을 입력해주세요."></textarea>
                  </td>
                </tr>
                <tr>
                  <th>부천</th>
                  <td>
                    <textarea class="textarea--typeA" id="" name="" value="" msg="" placeholder="특이사항을 입력해주세요."></textarea>
                  </td>
                </tr>
                <tr>
                  <th>부산</th>
                  <td>
                    <textarea class="textarea--typeA" id="" name="" value="" msg="" placeholder="특이사항을 입력해주세요."></textarea>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="modal__btn mt30">
            <button type="button" class="btn-modal btn_brand" onclick="closeModal('modal-branch-issue')">확인</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- 지점별 특이사항 모달 끝 -->
</body>

</html>