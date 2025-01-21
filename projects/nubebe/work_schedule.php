<?php include $_SERVER["DOCUMENT_ROOT"]."/inc/head.php"; ?>
<body>
  <div id="wrap">
    <div class="dashboard">
      <?php include $_SERVER["DOCUMENT_ROOT"]."/inc/header.php"; ?>
      <main class="main">
        <div class="contents">
          <div class="main_header">
            <div class="title">
              <h1>일정 조회</h1>
            </div>
            <ul class="breadcrumb">
              <li class="active">일정 조회</li>
              <li>관리자 일정 관리</li>
              <li class="home"><span>HOME</span></li>
            </ul>
          </div>
          <div class="main_container">
            <div class="schedule__inner">
              <div class="daily_tit">
                <h2 class="tit">근무날짜</h2>
                <input type="text" id="" name="" value="" class="datepicker" placeholder="YYYY-MM-DD" readonly>
              </div>
              <div class="tbl_list tbl_schdule_view mt20">
                <table>
                  <colgroup>
                    <col style="width: 290px;">
                    <col style="width: 290px;">
                    <col style="width: 290px;">
                    <col style="width: 290px;">
                    <col style="width: 290px;">
                    <col style="width: 290px;">
                  </colgroup>
                  <thead>
                    <tr>
                      <th rowspan="2" class="bg_light_gray bdb_active">지점</th>
                      <th colspan="5">포지션</th>
                    </tr>
                    <tr>
                      <th class="bg_light_gray">A포지션</th>
                      <th class="bg_light_gray">B포지션</th>
                      <th class="bg_light_gray">C포지션</th>
                      <th class="bg_light_gray">D포지션</th>
                      <th class="bg_light_gray">E포지션</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>분당(8)</td>
                      <td class="tal">누베베<br>누베베베</td>
                      <td class="tal">누베베<br>누베베베</td>
                      <td class="tal">누베베<br>누베베베</td>
                      <td class="tal">누베베<br>누베베베</td>
                      <td class="tal">누베베<br>누베베베</td>
                    </tr>
                    <tr>
                      <td>잠실(8)</td>
                      <td class="tal">누베베<br>누베베베</td>
                      <td class="tal">누베베<br>누베베베</td>
                      <td class="tal">누베베<br>누베베베</td>
                      <td class="tal">누베베<br>누베베베</td>
                      <td class="tal">누베베<br>누베베베</td>
                    </tr>
                    <tr>
                      <td>강남(8)</td>
                      <td class="tal">누베베<br>누베베베</td>
                      <td class="tal">누베베<br>누베베베</td>
                      <td class="tal">누베베<br>누베베베</td>
                      <td class="tal">누베베<br>누베베베</td>
                      <td class="tal">누베베<br>누베베베</td>
                    </tr>
                    <tr>
                      <td>홍대(8)</td>
                      <td class="tal">누베베<br>누베베베</td>
                      <td class="tal">누베베<br>누베베베</td>
                      <td class="tal">누베베<br>누베베베</td>
                      <td class="tal">누베베<br>누베베베</td>
                      <td class="tal">누베베<br>누베베베</td>
                    </tr>
                    <tr>
                      <td>부천(8)</td>
                      <td class="tal">누베베<br>누베베베</td>
                      <td class="tal">누베베<br>누베베베</td>
                      <td class="tal">누베베<br>누베베베</td>
                      <td class="tal">누베베<br>누베베베</td>
                      <td class="tal">누베베<br>누베베베</td>
                    </tr>
                    <tr>
                      <td>부산(8)</td>
                      <td class="tal">누베베<br>누베베베</td>
                      <td class="tal">누베베<br>누베베베</td>
                      <td class="tal">누베베<br>누베베베</td>
                      <td class="tal">누베베<br>누베베베</td>
                      <td class="tal">누베베<br>누베베베</td>
                    </tr>
                    <tr>
                      <td>인천(8)</td>
                      <td class="tal">누베베<br>누베베베</td>
                      <td class="tal">누베베<br>누베베베</td>
                      <td class="tal">누베베<br>누베베베</td>
                      <td class="tal">누베베<br>누베베베</td>
                      <td class="tal">누베베<br>누베베베</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
</body>

</html>