<?php include $_SERVER["DOCUMENT_ROOT"]."/inc/head.php"; ?>

<body>
  <div id="wrap">
    <div class="dashboard">
      <?php include $_SERVER["DOCUMENT_ROOT"]."/inc/header.php"; ?>
      <main class="main">
        <div class="contents">
          <div class="main_header">
            <div class="title">
              <h1>주간 보고서</h1>
            </div>
            <ul class="breadcrumb">
              <li class="active">주간 보고서</li>
              <li>관리자 보고관리</li>
              <li class="home"><span>HOME</span></li>
            </ul>
          </div>
          <div class="main_container">
            <div class="weekly-report__inner">
              <div class="daily-report__content">
                <div class="report_area">
                  <div id="report">
                    <div class="tbl_report">
                      <table>
                        <colgroup>
                          <col style="width: 100px">
                          <col style="width: 420px">
                          <col style="width: 100px">
                          <col style="width: 90px">
                          <col style="width: 90px">
                        </colgroup>
                        <tbody>
                          <tr>
                            <th rowspan="2" colspan="2">
                              <div class="report_title">
                                <h1>보고서</h1>
                                <p>0000년 00월 00일 (요일)</p>
                              </div>
                            </th>
                            <th rowspan="2">결재</th>
                            <th>실장매니저</th>
                            <th>대표원장</th>
                          </tr>
                          <tr>
                            <th>
                              <div class="payment_area">
                                <!-- 이미지로 노출 -->
                              </div>
                            </th>
                            <th>
                              <div class="payment_area">
                                <!-- 이미지로 노출 -->
                              </div>
                            </th>
                          </tr>
                          <tr>
                            <th>소속</th>
                            <th>소속</th>
                            <th>성명</th>
                            <th colspan="2">누베베</th>
                          </tr>
                          <tr>
                            <th>보고서명</th>
                            <th>고객 관리 주간 보고서</th>
                            <th>취급</th>
                            <th colspan="2">기밀</th>
                          </tr>
                          <tr>
                            <th>기간</th>
                            <th colspan="4">00월 00일 (요일) ~ 00월 00일 (요일)</th>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="report_content mt20">
                      <h4 class="sub_tit">1. 주간 초진 예약 현황</h4>
                      <div class="tbl_report mt10">
                        <table>
                          <colgroup>
                            <col style="width: calc(100% / 6)">
                            <col style="width: calc(100% / 6)">
                            <col style="width: calc(100% / 6)">
                            <col style="width: calc(100% / 6)">
                            <col style="width: calc(100% / 6)">
                            <col style="width: calc(100% / 6)">
                          </colgroup>
                          <thead>
                            <tr>
                              <th>총 예약 건수</th>
                              <th>챗봇</th>
                              <th>NAVER</th>
                              <th>APP</th>
                              <th>전화</th>
                              <th>카카오톡</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="tar"><span class="fw700">000</span> 건</td>
                              <td class="tar"><span class="fw700">000</span> 건</td>
                              <td class="tar"><span class="fw700">000</span> 건</td>
                              <td class="tar"><span class="fw700">000</span> 건</td>
                              <td class="tar"><span class="fw700">000</span> 건</td>
                              <td class="tar"><span class="fw700">000</span> 건</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="report_content mt20">
                      <h4 class="sub_tit">2. 주간 전화 상담</h4>
                      <div class="tbl_report mt10">
                        <table>
                          <colgroup>
                            <col style="width: 25%">
                            <col style="width: 25%">
                            <col style="width: 25%">
                            <col style="width: 25%">
                          </colgroup>
                          <thead>
                            <tr>
                              <th></th>
                              <th>인입</th>
                              <th>응답</th>
                              <th>응답률</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th>건수</th>
                              <td class="tar"><span class="fw700">000</span> 건</td>
                              <td class="tar"><span class="fw700">000</span> 건</td>
                              <td class="tar"><span class="fw700">000</span> 건</td>
                            </tr>
                            <tr>
                              <th>전주 대비</th>
                              <td>
                                <p class="increase"><span>000.0% 증가</span></p>
                              </td>
                              <td>
                                <p class="decrease"><span>000.0% 감소</span></p>
                              </td>
                              <td>
                                <p class="increase"><span>000.0% 증가</span></p>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="report_content mt20">
                      <h4 class="sub_tit">3. 주간 모바일 상담</h4>
                      <div class="tbl_report mt10">
                        <table>
                          <colgroup>
                            <col style="width: 135px">
                            <col style="width: calc(100% - 135px)">
                          </colgroup>
                          <thead>
                            <tr>
                              <th></th>
                              <th>카카오톡</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th>총 처리 건수</th>
                              <td class="tar"><span class="fw700">000</span> 건</td>
                            </tr>
                            <tr>
                              <th>처리 완료 시점</th>
                              <td>0/0 (0) 오후 0시 00 분</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="report_content mt20">
                      <h4 class="sub_tit">4. 주간 약, 물품 접수</h4>
                      <div class="tbl_report mt10">
                        <table>
                          <colgroup>
                            <col style="width: 135px">
                            <col style="width: calc((100% - 135px) / 2)">
                            <col style="width: calc((100% - 135px) / 2)">
                          </colgroup>
                          <thead>
                            <tr>
                              <th></th>
                              <th>App_약 접수</th>
                              <th>App_물품 접수</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th>총 처리 건수</th>
                              <td class="tar"><span class="fw700">000</span> 건</td>
                              <td class="tar"><span class="fw700">000</span> 건</td>
                            </tr>
                            <tr>
                              <th>처리 완료 시점</th>
                              <td>0/0 (0) 오후 0시 00 분</td>
                              <td>0/0 (0) 오후 0시 00 분</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="report_content mt20">
                      <h4 class="sub_tit">5. 주간 아웃콜 상담</h4>
                      <div class="tbl_report mt10">
                        <table>
                          <tbody>
                            <tr>
                              <td>
                                <textarea name="" id="" class="textarea--typeA" placeholder="내용을 입력하세요."></textarea>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="report_logo mt20">
                      <img src="../img/common/logo_colored.png" alt="누베베 로고" width="100">
                    </div>
                  </div>
                  <div class="btn_area mt40">
                    <button type="button" class="btn btn-lg btn-round btn_brand btn_download"><span>엑셀 다운로드</span></button>
                    <button type="button" class="btn btn-lg btn-round btn_brand btn_download" onclick=' window.open("report.html","보고서 팝업","width=857, height=1210, top=10, left=10");'><span>PDF 다운로드</span></button>
                    <button type="button" class="btn btn-lg btn-round btn_brand btn_save">저장</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
</body>

</html>