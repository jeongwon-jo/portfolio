<?php 
include_once $_SERVER["DOCUMENT_ROOT"]."/_pro_inc/include_default_html.php";	
include_once $_SERVER["DOCUMENT_ROOT"]."/_pro_inc/checkLogin.php";	



include $_SERVER["DOCUMENT_ROOT"]."/inc/head.php"; 
?>
<body>

  <div class="loading-container">
    <div class="loading"></div>
    <div id="loading-text">loading</div>
  </div>

  <div id="wrap">
    <div class="dashboard">
      <?php include $_SERVER["DOCUMENT_ROOT"]."/inc/header.php"; ?>
      <main class="main">
        <div class="contents">
          <div class="main_header">
            <div class="title">
              <h1>일일 보고</h1>
            </div>
            <ul class="breadcrumb">
              <li class="active">일일 보고</li>
              <li class="home"><span>HOME</span></li>
            </ul>
          </div>
          <div class="main_container">
            <div class="daily-settlement__inner">
              <div class="daily_tit">
                <h2 class="tit"><span class="name">누베베</span>님 / <span class="position">포지션 A</span> 일일보고</h2>

                <!-- 관리자계정일 경우 드롭다운 가능 -->
                <!-- 관리자계정아니면 disabled처리 -->

                <select name="" id="" class="nice-select select-primary sm">
                  <option value="">누베베님(관리자)</option>
                </select>
                
              </div>
              <form action="" class="form_search mt20">
                <fieldset>
                  <div class="search__inner">
                    <div class="search">
                      <label for="" class="search_label">날짜</label>
                      <div class="search_content">
                        <select name="" id="" class="nice-select select-primary sm w237">
                          <option value="">날짜 선택</option>
                          <option value="">2024-11-26</option>
                          <option value="">2024-11-25 (완료)</option>
                          <option value="">2024-11-24 (완료)</option>
                        </select>
                      </div>
                    </div>
                    <div class="search">
                      <label for="" class="search_label">지점선택</label>
                      <div class="search_content">
                        <div class="branch_check">
                          <div class="checkbox--typeB">
                            <label for="chk1">
                              <input type="checkbox" id="chk1" checked> <em>강남</em>
                            </label>
                          </div>
                          <div class="checkbox--typeB">
                            <label for="chk2">
                              <input type="checkbox" id="chk2"> <em>분당</em>
                            </label>
                          </div>
                          <div class="checkbox--typeB">
                            <label for="chk3">
                              <input type="checkbox" id="chk3"> <em>강남</em>
                            </label>
                          </div>
                          <div class="checkbox--typeB">
                            <label for="chk4">
                              <input type="checkbox" id="chk4"> <em>분당</em>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="search">
                      <a href="#" class="btn_report"><span>일일보고서 작성</span></a>
                    </div>
                  </div>
                </fieldset>
              </form>
              <!-- 검색 설정 전 노출 -->
              <div class="setting_search">
                <img src="./img/common/img_setting_date.png" alt="체크 아이콘" width="68">
                <p>날짜 및 지점을 설정해주세요.</p>
              </div>
              <!-- 검색 설정 후 노출 -->
              <div class="tbl_list mt20">
                <table>
                  <colgroup>
                    <col style="width: 125px;">
                    <col style="width: 125px;">
                    <col style="width: 125px;">
                    <col style="width: 125px;">
                    <col style="width: 125px;">
                    <col style="width: 125px;">
                    <col style="width: 125px;">
                    <col style="width: 125px;">
                    <col style="width: 125px;">
                    <col style="width: 125px;">
                    <col style="width: 125px;">
                    <col style="width: 125px;">
                    <col style="width: 125px;">
                    <col style="width: 125px;">
                  </colgroup>
                  <thead>
                    <tr>
                      <th colspan="4">기본정보</th>
                      <th colspan="6">처리건수</th>
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
                      <td class="bg_gray">0000. 00. 00</td>
                      <td class="bg_gray tal">지점</td>
                      <td class="bg_gray">포지션</td>
                      <td class="bg_gray">누베베</td>
                      <td>
                        <input type="text" class="table_input" id="" name="" value="">
                      </td>
                      <td>
                        <input type="text" class="table_input" id="" name="" value="">
                      </td>
                      <td>
                        <input type="text" class="table_input" id="" name="" value="">
                      </td>
                      <td>
                        <input type="text" class="table_input" id="" name="" value="">
                      </td>
                      <td>
                        <input type="text" class="table_input" id="" name="" value="">
                      </td>
                      <td>
                        <input type="text" class="table_input" id="" name="" value="">
                      </td>
                      <td>
                        <input type="text" class="table_input" id="" name="" value="">
                      </td>
                      <td>
                        <input type="text" class="table_input" id="" name="" value="">
                      </td>
                      <td class="bg_gray tar">0</td>
                      <td class="bg_gray tar">0</td>
                    </tr>
                    <tr>
                      <td class="bg_gray">0000. 00. 00</td>
                      <td class="bg_gray tal">지점</td>
                      <td class="bg_gray">포지션</td>
                      <td class="bg_gray">누베베</td>
                      <td>
                        <input type="text" class="table_input" id="" name="" value="">
                      </td>
                      <td>
                        <input type="text" class="table_input" id="" name="" value="">
                      </td>
                      <td>
                        <input type="text" class="table_input" id="" name="" value="">
                      </td>
                      <td>
                        <input type="text" class="table_input" id="" name="" value="">
                      </td>
                      <td>
                        <input type="text" class="table_input" id="" name="" value="">
                      </td>
                      <td>
                        <input type="text" class="table_input" id="" name="" value="">
                      </td>
                      <td>
                        <input type="text" class="table_input" id="" name="" value="">
                      </td>
                      <td>
                        <input type="text" class="table_input" id="" name="" value="">
                      </td>
                      <td class="bg_gray tar">0</td>
                      <td class="bg_gray tar">0</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="btn_area mt30">
                <button type="button" class="btn btn-lg btn-round btn_black">삭제</button>
                <button type="button" class="btn btn-lg btn-round btn_brand">저장</button>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>

  <script type="module" src="<?PHP echo JS_URL?>setDailySettlement.js?v=<?PHP echo TIME_HIS?>"></script>
</body>
</html>