<?php include $_SERVER["DOCUMENT_ROOT"]."/inc/head.php"; ?>

<body>
  <div id="wrap">
    <div class="dashboard">
      <?php include $_SERVER["DOCUMENT_ROOT"]."/inc/header.php"; ?>
      <main class="main">
        <div class="contents">
          <div class="main_header">
            <div class="title">
              <h1>주간 보고서 조회</h1>
            </div>
            <ul class="breadcrumb">
              <li class="active">주간 보고서 조회</li>
              <li>관리자 보고관리</li>
              <li class="home"><span>HOME</span></li>
            </ul>
          </div>
          <div class="main_container">
            <div class="weekly-report__inner">
              <form action="" class="form_search mt20">
                <fieldset>
                  <div class="search__inner">
                    <div class="search">
                      <div class="search_content">
                        <select name="" id="" class="nice-select select-primary sm w160">
                          <option value="">전체</option>
                          <option value="">작성일</option>
                          <option value="">적용기간</option>
                        </select>
                      </div>
                    </div>
                    <div class="search">
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
                          <option value="">미작성</option>
                          <option value="">작성완료</option>
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
              <div class="btn_area end mt40">
                <select name="" id="" class="nice-select select-primary sm w216">
                  <option value="">전체</option>
                  <option value="">작성일</option>
                  <option value="">적용기간</option>
                </select>
              </div>
              <div class="tbl_list mt20">
                <table>
                  <colgroup>
                    <col style="width: 60px;">
                    <col style="width: 350px;">
                    <col style="width: 350px;">
                    <col style="width: 350px;">
                    <col style="width: 200px;">
                    <col style="width: 100px;">
                    <col style="width: 350px;">
                  </colgroup>
                  <thead>
                    <tr>
                      <th>번호</th>
                      <th>지점</th>
                      <th>작성일</th>
                      <th>기간</th>
                      <th>작성자</th>
                      <th>상태</th>
                      <th>비고</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>10</td>
                      <td><a href="./weekly_report_dtl.php">강남점</a></td>
                      <td>0000-00-00</td>
                      <td>0000-00-00 ~ 0000-00-00</td>
                      <td>누베베</td>
                      <td>작성완료</td>
                      <td>
                        <div class="tbl_list_btns">
                          <button class="btn btn-mini btn_outline_gray btn_p10">수정</button>
                          <button class="btn btn-mini btn_outline_gray btn_p10">삭제</button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>9</td>
                      <td><a href="./weekly_report_dtl.php">강남점</a></td>
                      <td>-</td>
                      <td>0000-00-00 ~ 0000-00-00</td>
                      <td>-</td>
                      <td>미작성</td>
                      <td>
                        <div class="tbl_list_btns">
                          <button class="btn btn-mini btn_outline_gray btn_p10">삭제</button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>8</td>
                      <td><a href="./weekly_report_dtl.php">강남점</a></td>
                      <td>-</td>
                      <td>0000-00-00 ~ 0000-00-00</td>
                      <td>-</td>
                      <td>미작성</td>
                      <td>
                        <div class="tbl_list_btns">
                          <button class="btn btn-mini btn_outline_gray btn_p10">삭제</button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>7</td>
                      <td><a href="./weekly_report_dtl.php">강남점</a></td>
                      <td>-</td>
                      <td>0000-00-00 ~ 0000-00-00</td>
                      <td>-</td>
                      <td>미작성</td>
                      <td>
                        <div class="tbl_list_btns">
                          <button class="btn btn-mini btn_outline_gray btn_p10">삭제</button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td><a href="./weekly_report_dtl.php">강남점</a></td>
                      <td>-</td>
                      <td>0000-00-00 ~ 0000-00-00</td>
                      <td>-</td>
                      <td>미작성</td>
                      <td>
                        <div class="tbl_list_btns">
                          <button class="btn btn-mini btn_outline_gray btn_p10">삭제</button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td><a href="./weekly_report_dtl.php">강남점</a></td>
                      <td>-</td>
                      <td>0000-00-00 ~ 0000-00-00</td>
                      <td>-</td>
                      <td>미작성</td>
                      <td>
                        <div class="tbl_list_btns">
                          <button class="btn btn-mini btn_outline_gray btn_p10">삭제</button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td><a href="./weekly_report_dtl.php">강남점</a></td>
                      <td>-</td>
                      <td>0000-00-00 ~ 0000-00-00</td>
                      <td>-</td>
                      <td>미작성</td>
                      <td>
                        <div class="tbl_list_btns">
                          <button class="btn btn-mini btn_outline_gray btn_p10">삭제</button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td><a href="./weekly_report_dtl.php">강남점</a></td>
                      <td>-</td>
                      <td>0000-00-00 ~ 0000-00-00</td>
                      <td>-</td>
                      <td>미작성</td>
                      <td>
                        <div class="tbl_list_btns">
                          <button class="btn btn-mini btn_outline_gray btn_p10">삭제</button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td><a href="./weekly_report_dtl.php">강남점</a></td>
                      <td>-</td>
                      <td>0000-00-00 ~ 0000-00-00</td>
                      <td>-</td>
                      <td>미작성</td>
                      <td>
                        <div class="tbl_list_btns">
                          <button class="btn btn-mini btn_outline_gray btn_p10">삭제</button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td><a href="./weekly_report_dtl.php">강남점</a></td>
                      <td>-</td>
                      <td>0000-00-00 ~ 0000-00-00</td>
                      <td>-</td>
                      <td>미작성</td>
                      <td>
                        <div class="tbl_list_btns">
                          <button class="btn btn-mini btn_outline_gray btn_p10">삭제</button>
                        </div>
                      </td>
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