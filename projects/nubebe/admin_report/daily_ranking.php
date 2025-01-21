<?php include $_SERVER["DOCUMENT_ROOT"]."/inc/head.php"; ?>

<body>
  <div id="wrap">
    <div class="dashboard">
      <?php include $_SERVER["DOCUMENT_ROOT"]."/inc/header.php"; ?>
      <main class="main">
        <div class="contents">
          <div class="main_header">
            <div class="title">
              <h1>일일 결산 순위</h1>
            </div>
            <ul class="breadcrumb">
              <li class="active">일일 결산 순위</li>
              <li>관리자 보고 관리</li>
              <li class="home"><span>HOME</span></li>
            </ul>
          </div>
          <div class="main_container">
            <div class="daily-ranking__inner">
              <form action="" class="form_search">
                <fieldset>
                  <div class="search__inner">
                    <div class="search">
                      <label for="" class="search_label">날짜</label>
                      <div class="search_content">
                        <div class="date_box">
                          <input type="text" id="" name="" value="" class="datepicker short" placeholder="YYYY-MM-DD" readonly>
                          <span>-</span>
                          <input type="text" id="" name="" value="" class="datepicker short" placeholder="YYYY-MM-DD" readonly>
                        </div>
                      </div>
                    </div>
                    <div class="search">
                      <label for="" class="search_label">지점</label>
                      <div class="search_content">
                        <select name="" id="" class="nice-select select-primary sm w180">
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
                  <div class="search__inner mt26">
                    <div class="search_checkbox ml43">
                      <div class="checkbox--typeA">
                        <label for="position_chk1">
                          <input type="checkbox" id="position_chk1" name="" value="" checked>
                          <em class="check"></em> <span class="txt">전체</span>
                        </label>
                      </div>
                      <div class="checkbox--typeA">
                        <label for="position_chk2">
                          <input type="checkbox" id="position_chk2" name="" value="">
                          <em class="check"></em> <span class="txt">포지션A</span>
                        </label>
                      </div>
                      <div class="checkbox--typeA">
                        <label for="position_chk3">
                          <input type="checkbox" id="position_chk3" name="" value="">
                          <em class="check"></em> <span class="txt">포지션B</span>
                        </label>
                      </div>
                      <div class="checkbox--typeA">
                        <label for="position_chk4">
                          <input type="checkbox" id="position_chk4" name="" value="">
                          <em class="check"></em> <span class="txt">포지션C</span>
                        </label>
                      </div>
                      <div class="checkbox--typeA">
                        <label for="position_chk5">
                          <input type="checkbox" id="position_chk5" name="" value="">
                          <em class="check"></em> <span class="txt">포지션D</span>
                        </label>
                      </div>
                      <div class="checkbox--typeA">
                        <label for="position_chk6">
                          <input type="checkbox" id="position_chk6" name="" value="">
                          <em class="check"></em> <span class="txt">포지션E</span>
                        </label>
                      </div>
                    </div>
                  </div>
                </fieldset>
              </form>
              <!-- 검색 설정 전 노출 -->
              <!-- <div class="setting_search">
                <img src="../img/common/img_setting_search.png" alt="검색 아이콘" width="68">
                <p>검색을 설정해 주세요.</p>
              </div> -->
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
                  </colgroup>
                  <thead>
                    <tr>
                      <th>순위</th>
                      <th>포지션</th>
                      <th>이름</th>
                      <th>인콜</th>
                      <th>아웃콜A</th>
                      <th>아웃콜B</th>
                      <th>카카오톡</th>
                      <th>APP(약)</th>
                      <th>APP(물품)</th>
                      <th class="bg_light_pink">개별건수 합계</th>
                      <th class="bg_light_pink">총 합계</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>포지션</td>
                      <td>누베베</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar bg_light_pink">0</td>
                      <td class="tar bg_light_pink">0</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>포지션</td>
                      <td>누베베</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar bg_light_pink">0</td>
                      <td class="tar bg_light_pink">0</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>포지션</td>
                      <td>누베베</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar bg_light_pink">0</td>
                      <td class="tar bg_light_pink">0</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>포지션</td>
                      <td>누베베</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar bg_light_pink">0</td>
                      <td class="tar bg_light_pink">0</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>포지션</td>
                      <td>누베베</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar bg_light_pink">0</td>
                      <td class="tar bg_light_pink">0</td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>포지션</td>
                      <td>누베베</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar bg_light_pink">0</td>
                      <td class="tar bg_light_pink">0</td>
                    </tr>
                    <tr>
                      <td>7</td>
                      <td>포지션</td>
                      <td>누베베</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar bg_light_pink">0</td>
                      <td class="tar bg_light_pink">0</td>
                    </tr>
                    <tr>
                      <td>8</td>
                      <td>포지션</td>
                      <td>누베베</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar bg_light_pink">0</td>
                      <td class="tar bg_light_pink">0</td>
                    </tr>
                    <tr>
                      <td>9</td>
                      <td>포지션</td>
                      <td>누베베</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar">0</td>
                      <td class="tar bg_light_pink">0</td>
                      <td class="tar bg_light_pink">0</td>
                    </tr>
                    <tr>
                      <td>10</td>
                      <td>포지션</td>
                      <td>누베베</td>
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
</body>

</html>