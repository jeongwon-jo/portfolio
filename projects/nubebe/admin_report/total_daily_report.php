<?php 
include_once $_SERVER["DOCUMENT_ROOT"]."/_pro_inc/include_default_html.php";	
include_once $_SERVER["DOCUMENT_ROOT"]."/_pro_inc/checkLogin.php";	



include $_SERVER["DOCUMENT_ROOT"]."/inc/head.php"; 
?>
<body>
  <div id="wrap">
    <div class="dashboard">
      <?php include $_SERVER["DOCUMENT_ROOT"]."/inc/header.php"; ?>
      <main class="main">
        <div class="contents">
          <div class="main_header">
            <div class="title">
              <h1>일일 보고 조회</h1>
            </div>
            <ul class="breadcrumb">
              <li class="active">일일 보고 조회</li>
              <li>관리자 보고관리</li>
              <li class="home"><span>HOME</span></li>
            </ul>
          </div>
          <div class="main_container">
            <div class="total-report__inner">
              <h2 class="tit">일일 보고 조회</h2>
              <form action="" class="form_search mt20">
                <fieldset>
                  <div class="search__inner">
                    <div class="search">
                      <label for="" class="search_label">날짜</label>
                      <div class="search_content">
                        <div class="date_box">
                          <input type="text" id="" name="" value="" class="datepicker" placeholder="YYYY-MM-DD" readonly>
                          <span>-</span>
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
              <div class="report_statistics mt20">
                <h3 class="tit pt10">조회 통계</h3>
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
                        <th colspan="6">처리건수</th>
                        <th colspan="2">예약 건수</th>
                        <th colspan="2" class="bg_light_pink">처리 건수 합</th>
                      </tr>
                      <tr>
                        <th class="bg_light_gray">인콜</th>
                        <th class="bg_light_gray">아웃콜A</th>
                        <th class="bg_light_gray">아웃콜B</th>
                        <th class="bg_light_gray">카카오톡</th>
                        <th class="bg_light_gray">AAP(약)</th>
                        <th class="bg_light_gray">AAP(물품)</th>
                        <th class="bg_light_gray">전화예약</th>
                        <th class="bg_light_gray">카카오톡 예약</th>
                        <th class="bg_pink">개별건수 합계</th>
                        <th class="bg_pink">총 합계</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="tar">0</td>
                        <td class="tar">0</td>
                        <td class="tar">0</td>
                        <td class="tar">0</td>
                        <td class="tar">0</td>
                        <td class="tar">0</td>
                        <td class="tar">0</td>
                        <td class="tar">0</td>
                        <td class="bg_light_pink tar">0</td>
                        <td class="bg_light_pink tar">0</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="tbl_list mt20">
                <table>
                  <colgroup>
                    <col style="width: 110px;">
                    <col style="width: 110px;">
                    <col style="width: 110px;">
                    <col style="width: 110px;">
                    <col style="width: 110px;">
                    <col style="width: 110px;">
                    <col style="width: 110px;">
                    <col style="width: 110px;">
                    <col style="width: 110px;">
                    <col style="width: 110px;">
                    <col style="width: 110px;">
                    <col style="width: 110px;">
                    <col style="width: 110px;">
                    <col style="width: 110px;">
                    <col style="width: 110px;">
                    <col style="width: 110px;">
                  </colgroup>
                  <thead>
                    <tr>
                      <th colspan="4">기본정보</th>
                      <th colspan="6">처리건수</th>
                      <th colspan="2">예약 건수</th>
                      <th colspan="2" class="bg_light_pink">처리 건수 합</th>
                      <th rowspan="2" class="bg_light_gray">일일<br>보고서<br>완료여부</th>
                      <th rowspan="2" class="bg_light_gray">지점<br>보고서<br>완료여부</th>
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
                      <th class="bg_light_gray">AAP(약)</th>
                      <th class="bg_light_gray">AAP(물품)</th>
                      <th class="bg_light_gray">전화</th>
                      <th class="bg_light_gray">카카오톡</th>
                      <th class="bg_pink">개별건수 합계</th>
                      <th class="bg_pink">총 합계</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td onclick="openModal('modal-modify-report')">0000. 00. 00</td>
                      <td onclick="openModal('modal-modify-report')" class="tal">지점</td>
                      <td onclick="openModal('modal-modify-report')">포지션</td>
                      <td onclick="openModal('modal-modify-report')">누베베</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="bg_light_pink tar">0</td>
                      <td class="bg_light_pink tar">0</td>
                      <td>미완료</td>
                      <td>미완료</td>
                    </tr>
                    <tr>
                      <td onclick="openModal('modal-modify-report')">0000. 00. 00</td>
                      <td onclick="openModal('modal-modify-report')" class="tal">지점</td>
                      <td onclick="openModal('modal-modify-report')">포지션</td>
                      <td onclick="openModal('modal-modify-report')">누베베</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="bg_light_pink tar">0</td>
                      <td class="bg_light_pink tar">0</td>
                      <td>미완료</td>
                      <td>미완료</td>
                    </tr>
                    <tr>
                      <td onclick="openModal('modal-modify-report')">0000. 00. 00</td>
                      <td onclick="openModal('modal-modify-report')" class="tal">지점</td>
                      <td onclick="openModal('modal-modify-report')">포지션</td>
                      <td onclick="openModal('modal-modify-report')">누베베</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="bg_light_pink tar">0</td>
                      <td class="bg_light_pink tar">0</td>
                      <td>완료</td>
                      <td>완료</td>
                    </tr>
                    <tr>
                      <td onclick="openModal('modal-modify-report')">0000. 00. 00</td>
                      <td onclick="openModal('modal-modify-report')" class="tal">지점</td>
                      <td onclick="openModal('modal-modify-report')">포지션</td>
                      <td onclick="openModal('modal-modify-report')">누베베</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="bg_light_pink tar">0</td>
                      <td class="bg_light_pink tar">0</td>
                      <td>완료</td>
                      <td>완료</td>
                    </tr>
                    <tr>
                      <td onclick="openModal('modal-modify-report')">0000. 00. 00</td>
                      <td onclick="openModal('modal-modify-report')" class="tal">지점</td>
                      <td onclick="openModal('modal-modify-report')">포지션</td>
                      <td onclick="openModal('modal-modify-report')">누베베</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="bg_light_pink tar">0</td>
                      <td class="bg_light_pink tar">0</td>
                      <td>완료</td>
                      <td>완료</td>
                    </tr>
                    <tr>
                      <td onclick="openModal('modal-modify-report')">0000. 00. 00</td>
                      <td onclick="openModal('modal-modify-report')" class="tal">지점</td>
                      <td onclick="openModal('modal-modify-report')">포지션</td>
                      <td onclick="openModal('modal-modify-report')">누베베</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="bg_light_pink tar">0</td>
                      <td class="bg_light_pink tar">0</td>
                      <td>완료</td>
                      <td>완료</td>
                    </tr>
                    <tr>
                      <td onclick="openModal('modal-modify-report')">0000. 00. 00</td>
                      <td onclick="openModal('modal-modify-report')" class="tal">지점</td>
                      <td onclick="openModal('modal-modify-report')">포지션</td>
                      <td onclick="openModal('modal-modify-report')">누베베</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="bg_light_pink tar">0</td>
                      <td class="bg_light_pink tar">0</td>
                      <td>완료</td>
                      <td>완료</td>
                    </tr>
                    <tr>
                      <td onclick="openModal('modal-modify-report')">0000. 00. 00</td>
                      <td onclick="openModal('modal-modify-report')" class="tal">지점</td>
                      <td onclick="openModal('modal-modify-report')">포지션</td>
                      <td onclick="openModal('modal-modify-report')">누베베</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="bg_light_pink tar">0</td>
                      <td class="bg_light_pink tar">0</td>
                      <td>완료</td>
                      <td>완료</td>
                    </tr>
                    <tr>
                      <td onclick="openModal('modal-modify-report')">0000. 00. 00</td>
                      <td onclick="openModal('modal-modify-report')" class="tal">지점</td>
                      <td onclick="openModal('modal-modify-report')">포지션</td>
                      <td onclick="openModal('modal-modify-report')">누베베</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="bg_light_pink tar">0</td>
                      <td class="bg_light_pink tar">0</td>
                      <td>완료</td>
                      <td>완료</td>
                    </tr>
                    <tr>
                      <td onclick="openModal('modal-modify-report')">0000. 00. 00</td>
                      <td onclick="openModal('modal-modify-report')" class="tal">지점</td>
                      <td onclick="openModal('modal-modify-report')">포지션</td>
                      <td onclick="openModal('modal-modify-report')">누베베</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="bg_light_pink tar">0</td>
                      <td class="bg_light_pink tar">0</td>
                      <td>완료</td>
                      <td>완료</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <ul class="pagination mt20">
                <li class="prev"><a href="#"></a></li>
                <li class="on"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">6</a></li>
                <li><a href="#">7</a></li>
                <li><a href="#">8</a></li>
                <li><a href="#">9</a></li>
                <li><a href="#">10</a></li>
                <li class="next"><a href="#"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
  <!-- 일일결산 수정 모달 시작 -->
  <div id="modal-modify-report" class="modal modal--typeA">
    <div class="modal_wrap">
      <div class="modal__inner">
        <div class="modal__header">
          <h3>0000. 00. 00 (화) 분당지점 누베베 님의 일일결산 수정</h3>
          <button type="button" class="btn_modal-close" onclick="closeModal('modal-modify-report')"></button>
        </div>
        <div class="modal__content">
          <form action="" class="">
            <fieldset>
              <div class="tbl_list">
                <table>
                  <colgroup>
                    <col style="width: 89px;">
                    <col style="width: 89px;">
                    <col style="width: 89px;">
                    <col style="width: 89px;">
                    <col style="width: 89px;">
                    <col style="width: 89px;">
                    <col style="width: 89px;">
                    <col style="width: 89px;">
                    <col style="width: 89px;">
                    <col style="width: 89px;">
                  </colgroup>
                  <thead>
                    <tr>
                      <th colspan="6">처리건수</th>
                      <th colspan="2">예약 건수</th>
                      <th colspan="2" class="bg_light_pink">처리 건수 합</th>
                    </tr>
                    <tr>
                      <th class="bg_light_gray">인콜</th>
                      <th class="bg_light_gray">아웃콜A</th>
                      <th class="bg_light_gray">아웃콜B</th>
                      <th class="bg_light_gray">카카오톡</th>
                      <th class="bg_light_gray">AAP(약)</th>
                      <th class="bg_light_gray">AAP(물품)</th>
                      <th class="bg_light_gray">전화예약</th>
                      <th class="bg_light_gray">카카오톡 예약</th>
                      <th class="bg_pink">개별건수 합계</th>
                      <th class="bg_pink">총 합계</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><input type="text" class="table_input" id="" name="" value=""></td>
                      <td><input type="text" class="table_input" id="" name="" value=""></td>
                      <td><input type="text" class="table_input" id="" name="" value=""></td>
                      <td><input type="text" class="table_input" id="" name="" value=""></td>
                      <td><input type="text" class="table_input" id="" name="" value=""></td>
                      <td><input type="text" class="table_input" id="" name="" value=""></td>
                      <td><input type="text" class="table_input" id="" name="" value=""></td>
                      <td><input type="text" class="table_input" id="" name="" value=""></td>
                      <td class="tar bg_light_pink">0</td>
                      <td class="tar bg_light_pink">0</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="modal__btn mt30">
                <button type="button" class="btn-modal btn_brand">저장</button>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- 일일결산 수정 모달 끝 -->
</body>

</html>