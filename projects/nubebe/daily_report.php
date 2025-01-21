<?php include $_SERVER["DOCUMENT_ROOT"]."/inc/head.php"; ?>
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
              <li class="home"><span>HOME</span></li>
            </ul>
          </div>
          <div class="main_container">
            <div class="daily-report__inner">
              <div class="daily_tit">
                <h2 class="tit"><span class="name">누베베</span>님 일일 보고 조회</h2>
              </div>
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
              <div class="report_content mt30">
                <h3 class="tit">조회 통계</h3>
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
                <div class="tbl_list mt20">
                  <table>
                    <colgroup>
                      <col style="width: 117px;">
                      <col style="width: 117px;">
                      <col style="width: 117px;">
                      <col style="width: 117px;">
                      <col style="width: 117px;">
                      <col style="width: 117px;">
                      <col style="width: 117px;">
                      <col style="width: 117px;">
                      <col style="width: 117px;">
                      <col style="width: 117px;">
                      <col style="width: 117px;">
                      <col style="width: 117px;">
                      <col style="width: 117px;">
                      <col style="width: 117px;">
                      <col style="width: 117px;">
                    </colgroup>
                    <thead>
                      <tr>
                        <th colspan="4">기본정보</th>
                        <th colspan="6">처리건수</th>
                        <th colspan="2">예약 건수</th>
                        <th colspan="2" class="bg_light_pink">처리 건수 합</th>
                        <th rowspan="2" class="bg_light_gray">일일<br>보고서<br>완료여부</th>
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
                        <th class="bg_light_gray">전화예약</th>
                        <th class="bg_light_gray">카카오톡 예약</th>
                        <th class="bg_pink">개별건수 합계</th>
                        <th class="bg_pink">총 합계</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>0000. 00. 00</td>
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
                        <td class="bg_light_pink tar">0</td>
                        <td class="bg_light_pink tar">0</td>
                        <td>
                          <button type="button" class="btn btn-mini btn_outline_gray btn_p10">수정</button>
                        </td>
                      </tr>
                      <tr>
                        <td>0000. 00. 00</td>
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
                        <td class="bg_light_pink tar">0</td>
                        <td class="bg_light_pink tar">0</td>
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
        </div>
      </main>
    </div>
  </div>
</body>

</html>