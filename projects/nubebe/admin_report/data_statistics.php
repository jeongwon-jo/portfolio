<?php include $_SERVER["DOCUMENT_ROOT"]."/inc/head.php"; ?>

<body>
  <div id="wrap">
    <div class="dashboard">
      <?php include $_SERVER["DOCUMENT_ROOT"]."/inc/header.php"; ?>
      <main class="main">
        <div class="contents">
          <div class="main_header">
            <div class="title">
              <h1>데이터 통계 조회</h1>
            </div>
            <ul class="breadcrumb">
              <li class="active">데이터 통계 조회</li>
              <li>관리자 보고관리</li>
              <li class="home"><span>HOME</span></li>
            </ul>
          </div>
          <div class="main_container">
            <div class="weekly-report__inner">
              <div class="statistics-tab">
                <ul class="tabs">
                  <li class="tabs__link on" data-tab="tab-1">주간 예약 건수</li>
                  <li class="tabs__link" data-tab="tab-2">연간 예약 건수</li>
                  <li class="tabs__link" data-tab="tab-3">루트별 예약 건수</li>
                </ul>
                <div id="tab-1" class="statistics-tab__content on">
                  <form action="" class="form_search">
                    <fieldset>
                      <div class="search__inner">
                        <div class="search">
                          <label for="" class="search_label">적용 날짜</label>
                          <div class="search_content">
                            <div class="date_box">
                              <input type="text" id="" name="" value="" class="datepicker" placeholder="YYYY-MM-DD" readonly>
                              <span>-</span>
                              <input type="text" id="" name="" value="" class="datepicker" placeholder="YYYY-MM-DD" readonly>
                            </div>
                          </div>
                        </div>
                        <div class="search">
                          <label for="" class="search_label">적용 지점</label>
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
                  <div class="daily-report__content mt20">
                    <div class="daily-report_head center">
                      <h3 class="daily-report_title"><span class="date">YYYY-MM-DD (요일) ~ YYYY-MM-DD (요일)</span></h3>
                      <div class="daily-report_summary">
                        <div class="summary">
                          <div class="tit">
                            <span>2024년</span><br>
                            <h3>인콜(주간 응답율)</h3>
                          </div>
                          <div class="result">
                            <h1>000.0<span class="percent">%</span></h1>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tbl_list tbl_weekly_report mt20">
                      <table>
                        <colgroup>
                          <col style="width: 307px;">
                          <col style="width: 207px;">
                          <col style="width: 207px;">
                          <col style="width: 207px;">
                          <col style="width: 207px;">
                          <col style="width: 207px;">
                          <col style="width: 207px;">
                          <col style="width: 207px;">
                        </colgroup>
                        <thead>
                          <tr>
                            <th class="tal">YYYY-MM-DD (요일) ~ YYYY-MM-DD (요일)</th>
                            <th class="bg_light_pink">인콜(주간 응답률 %)</th>
                            <th class="bg_light_pink">주간 예약(총 합)</th>
                            <th class="bg_light_pink">비대면 예약(총 합)</th>
                            <th>대면 APP 예약</th>
                            <th>대면 네이버 예약</th>
                            <th>대면 챗봇 예약</th>
                            <th>대면 전화 + 카카오톡 예약</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="tal">전주 주간 예약 건 비교</td>
                            <td class="tar bg_light_pink">000.0%</td>
                            <td class="tar bg_light_pink">0</td>
                            <td class="tar bg_light_pink">0</td>
                            <td class="tar">0</td>
                            <td class="tar">0</td>
                            <td class="tar">0</td>
                            <td class="tar">0</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="daily-report_chart mt40">
                      <div class="chart_content">
                        <canvas id="week-chart"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="tab-2" class="statistics-tab__content">
                  <form action="" class="form_search">
                    <fieldset>
                      <div class="search__inner">
                        <div class="search">
                          <label for="" class="search_label">조회 날짜</label>
                          <div class="search_content">
                            <select name="" id="" class="nice-select select-primary sm w216">
                              <option value="">2024년</option>
                              <option value="">2023년</option>
                              <option value="">2022년</option>
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
                  <div class="daily-report__content mt20">
                    <div class="daily-report_head center">
                      <h3 class="daily-report_title"><span class="date">YYYY</span></h3>
                    </div>
                    <div class="daily-report_chart mt40">
                      <div class="chart_content">
                        <canvas id="year-chart"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="tab-3" class="statistics-tab__content">
                  <form action="" class="form_search">
                    <fieldset>
                      <div class="search__inner">
                        <div class="search">
                          <label for="" class="search_label">조회 날짜</label>
                          <div class="search_content">
                            <select name="" id="" class="nice-select select-primary sm w216">
                              <option value="">2024년</option>
                              <option value="">2023년</option>
                              <option value="">2022년</option>
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
                  <div class="daily-report__content mt20">
                    <div class="daily-report_head center">
                      <h3 class="daily-report_title"><span class="date">YYYY</span></h3>
                    </div>
                    <div class="daily-report_chart mt40">
                      <div class="chart_content">
                        <canvas id="root-chart"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
  <script>
    let weekChartEl = document.getElementById('week-chart');
    let yearChartEl = document.getElementById('year-chart');
    let rootChartEl = document.getElementById('root-chart');
    let weekChart;
    let yearChart;
    let rootChart;
    $(function() {
      $('ul.tabs li.tabs__link').click(function () {
        var tab_id = $(this).attr('data-tab');

        $('ul.tabs li.tabs__link').removeClass('on');
        $('.statistics-tab__content').removeClass('on');

        $(this).addClass('on');
        $("#" + tab_id).addClass('on');

        weekChart.update();
        yearChart.update();
        rootChart.update();
      })
    })

    weekChart = new Chart(weekChartEl, {
      type: 'pie',
      options: {
        animation: false,
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            position: 'bottom',
            labels: {
              color: '#000',
              size: 13,
              family: 'NEXON Lv2 Gothic',
              style: 'normal',
              weight: 'normal',
              usePointStyle: true,
              pointStyle: 'rectRounded',
              padding: 16
            }
          },
          tooltip: {
            enabled: true,
            backgroundColor: '#000',
            padding: 10
          },
        },
      },
      data: {
        labels: ['비대면', '챗봇', '네이버', 'APP', '전화/카톡',],
        datasets: [
          {
            data : [20, 20, 20, 10, 30],
            backgroundColor: ["#601123", "#EF9D1A", "#009B00", "#9AA1EA", "#FB91D4", ],
            borderColor: ["#601123", "#EF9D1A", "#009B00", "#9AA1EA", "#FB91D4", ]
          }
        ]
      },
    });
    yearChart = new Chart(yearChartEl, {
      type: 'line',
      options: {
        animation: false,
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            position: 'bottom',
            labels: {
              color: '#000',
              size: 13,
              family: 'NEXON Lv2 Gothic',
              style: 'normal',
              weight: 'normal',
              usePointStyle: true,
              pointStyle: 'rectRounded',
              padding: 16
            }
          },
          tooltip: {
            enabled: true,
            backgroundColor: '#000',
            padding: 10
          },
          // title: {
          //   display: true,
          //   color: '#000000',
          //   font : {
          //     size: 18,
          //     family: 'NEXON Lv2 Gothic',
          //     style: 'normal',
          //     weight: 'bold'
          //   },
          //   padding: {
          //     bottom: 24
          //   },
          //   text: 'YYYY-MM-DD ~ YYYY-MM-DD 주간보고서'
          // },
        },
        scales: {
          x: {
            grid: {
              display: false,
            }
          },
          y: {
            min: 0,
            border: {
              dash: [5, 5]
            },
          }
        }
      },
      data: {
        labels: ['1월', '2월', '3월', '4월',
                '5월', '6월', '7월', '8월',
                '9월', '10월', '11월', '12월',
                ],
        datasets: [
          {
            label: '대면 예약(총합)',
            data: [210,180,120,350, 1000,180,120,350, 210,180,120,350],
            borderColor: '#601123',
            backgroundColor: '#601123'
          },
          {
            label: '비대면 예약(총합)',
            data: [105,210,145,120, 105,210,145,120, 105,210,145,120],
            borderColor: '#EF9D1A',
            backgroundColor: '#EF9D1A'
          },
        ]
      },
    });
    rootChart = new Chart(rootChartEl, {
      type: 'line',
      options: {
        animation: false,
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            position: 'bottom',
            labels: {
              color: '#000',
              size: 13,
              family: 'NEXON Lv2 Gothic',
              style: 'normal',
              weight: 'normal',
              usePointStyle: true,
              pointStyle: 'rectRounded',
              padding: 16
            }
          },
          tooltip: {
            enabled: true,
            backgroundColor: '#000',
            padding: 10
          },
          // title: {
          //   display: true,
          //   color: '#000000',
          //   font : {
          //     size: 18,
          //     family: 'NEXON Lv2 Gothic',
          //     style: 'normal',
          //     weight: 'bold'
          //   },
          //   padding: {
          //     bottom: 24
          //   },
          //   text: 'YYYY-MM-DD ~ YYYY-MM-DD 주간보고서'
          // },
        },
        scales: {
          x: {
            grid: {
              display: false,
            }
          },
          y: {
            min: 0,
            border: {
              dash: [5, 5]
            },
          }
        }
      },
      data: {
        labels: ['1월', '2월', '3월', '4월',
                '5월', '6월', '7월', '8월',
                '9월', '10월', '11월', '12월',
                ],
        datasets: [
          {
            label: '대면 전화 예약',
            data: [210,180,120,350, 1000,180,120,350, 210,180,120,350],
            borderColor: '#601123',
            backgroundColor: '#601123'
          },
          {
            label: '대면 카카오톡 예약',
            data: [105,210,145,120, 105,210,145,120, 105,210,145,120],
            borderColor: '#EF9D1A',
            backgroundColor: '#EF9D1A'
          },
          {
            label: '대면 APP 예약',
            data: [805,150,605,304, 451,249,506,150, 64,45,10,800],
            borderColor: '#009B00',
            backgroundColor: '#009B00'
          },
          {
            label: '대면 네이버 예약',
            data: [305,105,506,705, 206,506,405,379, 750,521,465,124],
            borderColor: '#9AA1EA',
            backgroundColor: '#9AA1EA'
          },
          {
            label: '대면 챗봇 예약',
            data: [205,156,789,216, 204,504,506,705, 205,165,570,105],
            borderColor: '#FB91D4',
            backgroundColor: '#FB91D4'
          },
          {
            label: '비대면 APP 예약',
            data: [89,26,406,305, 876,654,264,125, 150,875,652,340],
            borderColor: '#6CABDF',
            backgroundColor: '#6CABDF'
          },
          {
            label: '비대면 네이버 예약',
            data: [206,642,605,124, 203,240,408,862, 206,405,304,245],
            borderColor: '#4153C9',
            backgroundColor: '#4153C9'
          },
          {
            label: '비대면 챗봇 예약',
            data: [651,342,321,978, 125,150,205,106, 80,60,604,305],
            borderColor: '#EF9D1A',
            backgroundColor: '#EF9D1A'
          },
        ]
      },
    });
  </script>
</body>

</html>