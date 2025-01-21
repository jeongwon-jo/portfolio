<?php include $_SERVER["DOCUMENT_ROOT"]."/inc/head.php"; ?>
<body>
  <div id="wrap">
    <div class="dashboard">
      <?php include $_SERVER["DOCUMENT_ROOT"]."/inc/header.php"; ?>
      <main class="main">
        <div class="contents">
          <div class="main_header">
            <div class="title">
              <h1>일정 특이사항 및 조회</h1>
            </div>
            <ul class="breadcrumb">
              <li class="active">일정 특이사항 및 조회</li>
              <li>관리자 일정 관리</li>
              <li class="home"><span>HOME</span></li>
            </ul>
          </div>
          <div class="main_container">
            <div class="schedule__inner">
              <div class="list_header">
                <div class="daily_tit">
                  <h2 class="tit">일정 날짜</h2>
                  <input type="text" id="" name="" value="" class="datepicker" placeholder="YYYY-MM-DD" readonly>
                </div>
                <div class="btns">
                  <button type="button" class="btn btn-sm btn-round btn_p30 btn_brand">저장</button>
                </div>
              </div>
              <div class="tbl_list mt20">
                <table>
                  <colgroup>
                    <col style="width: 160px;">
                    <col style="width: 160px;">
                    <col style="width: 160px;">
                    <col style="width: 160px;">
                    <col style="width: 160px;">
                    <col style="width: 160px;">
                    <col style="width: 160px;">
                    <col style="width: 160px;">
                    <col style="width: 160px;">
                    <col style="width: 160px;">
                    <col style="width: 160px;">
                  </colgroup>
                  <thead>
                    <tr>
                      <th rowspan="3" class="bg_light_gray bdb_active">지점</th>
                      <th rowspan="2" colspan="5">포지션</th>
                      <th colspan="5">특이사항</th>
                    </tr>
                    <tr>
                      <th rowspan="2" class="bg_light_gray bdb_active">구분</th>
                      <th rowspan="2" class="bg_light_gray bdb_active">특이사항</th>
                      <th colspan="3">잔여건수</th>
                    </tr>
                    <tr>
                      <th class="bg_light_gray">A포지션</th>
                      <th class="bg_light_gray">B포지션</th>
                      <th class="bg_light_gray">C포지션</th>
                      <th class="bg_light_gray">D포지션</th>
                      <th class="bg_light_gray">E포지션</th>
                      <th class="bg_light_gray">카카오톡</th>
                      <th class="bg_light_gray">APP(약)</th>
                      <th class="bg_light_gray">APP(물품)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- 한 지점 시작 -->
                    <tr>
                      <td rowspan="3">분당(0)</td>
                      <td rowspan="3" class="tal">누베베</td>
                      <td rowspan="3" class="tal">누베베</td>
                      <td rowspan="3" class="tal">누베베</td>
                      <td rowspan="3" class="tal">누베베</td>
                      <td rowspan="3" class="tal">누베베</td>
                      <td>오전</td>
                      <td>
                        <!-- 특이사항 없음 : btn_outline_gray -->
                        <!-- 특이사항 보기 : btn_outline_brand -->
                        <button type="button" class="btn btn-mini btn_outline_gray btn_p10">특이사항 없음</button>
                      </td>
                      <td><input type="number" class="table_input" value="0" placeholder="입력"></td>
                      <td><input type="number" class="table_input" value="0" placeholder="입력"></td>
                      <td><input type="number" class="table_input" value="0" placeholder="입력"></td>
                    </tr>
                    <tr>
                      <td>오후</td>
                      <td>
                        <button type="button" class="btn btn-mini btn_outline_brand btn_p10" onclick="openModal('modal-modify-notes')">특이사항 보기</button>
                      </td>
                      <td><input type="number" class="table_input" placeholder="입력"></td>
                      <td><input type="number" class="table_input" placeholder="입력"></td>
                      <td><input type="number" class="table_input" placeholder="입력"></td>
                    </tr>
                    <tr>
                      <td>마감</td>
                      <td>
                        <button type="button" class="btn btn-mini btn_outline_gray btn_p10">특이사항 없음</button>
                      </td>
                      <td><input type="number" class="table_input" value="0" placeholder="입력"></td>
                      <td><input type="number" class="table_input" value="0" placeholder="입력"></td>
                      <td><input type="number" class="table_input" value="0" placeholder="입력"></td>
                    </tr>
                    <!-- 한 지점 끝 -->
                    <tr>
                      <td rowspan="3">잠실(0)</td>
                      <td rowspan="3" class="tal">누베베</td>
                      <td rowspan="3" class="tal">누베베</td>
                      <td rowspan="3" class="tal">누베베</td>
                      <td rowspan="3" class="tal">누베베</td>
                      <td rowspan="3" class="tal">누베베</td>
                      <td>오전</td>
                      <td>
                        <button type="button" class="btn btn-mini btn_outline_gray btn_p10">특이사항 없음</button>
                      </td>
                      <td><input type="number" class="table_input" value="0" placeholder="입력"></td>
                      <td><input type="number" class="table_input" value="0" placeholder="입력"></td>
                      <td><input type="number" class="table_input" value="0" placeholder="입력"></td>
                    </tr>
                    <tr>
                      <td>오후</td>
                      <td>
                        <button type="button" class="btn btn-mini btn_outline_brand btn_p10" onclick="openModal('modal-modify-notes')">특이사항 보기</button>
                      </td>
                      <td><input type="number" class="table_input" placeholder="입력"></td>
                      <td><input type="number" class="table_input" placeholder="입력"></td>
                      <td><input type="number" class="table_input" placeholder="입력"></td>
                    </tr>
                    <tr>
                      <td>마감</td>
                      <td>
                        <button type="button" class="btn btn-mini btn_outline_gray btn_p10">특이사항 없음</button>
                      </td>
                      <td><input type="number" class="table_input" value="0" placeholder="입력"></td>
                      <td><input type="number" class="table_input" value="0" placeholder="입력"></td>
                      <td><input type="number" class="table_input" value="0" placeholder="입력"></td>
                    </tr>
                    <tr>
                      <td rowspan="3">강남(0)</td>
                      <td rowspan="3" class="tal">누베베</td>
                      <td rowspan="3" class="tal">누베베</td>
                      <td rowspan="3" class="tal">누베베</td>
                      <td rowspan="3" class="tal">누베베</td>
                      <td rowspan="3" class="tal">누베베</td>
                      <td>오전</td>
                      <td>
                        <button type="button" class="btn btn-mini btn_outline_gray btn_p10">특이사항 없음</button>
                      </td>
                      <td><input type="number" class="table_input" value="0" placeholder="입력"></td>
                      <td><input type="number" class="table_input" value="0" placeholder="입력"></td>
                      <td><input type="number" class="table_input" value="0" placeholder="입력"></td>
                    </tr>
                    <tr>
                      <td>오후</td>
                      <td>
                        <button type="button" class="btn btn-mini btn_outline_brand btn_p10" onclick="openModal('modal-modify-notes')">특이사항 보기</button>
                      </td>
                      <td><input type="number" class="table_input" placeholder="입력"></td>
                      <td><input type="number" class="table_input" placeholder="입력"></td>
                      <td><input type="number" class="table_input" placeholder="입력"></td>
                    </tr>
                    <tr>
                      <td>마감</td>
                      <td>
                        <button type="button" class="btn btn-mini btn_outline_gray btn_p10">특이사항 없음</button>
                      </td>
                      <td><input type="number" class="table_input" value="0" placeholder="입력"></td>
                      <td><input type="number" class="table_input" value="0" placeholder="입력"></td>
                      <td><input type="number" class="table_input" value="0" placeholder="입력"></td>
                    </tr>
                    <tr>
                      <td rowspan="3">홍대(0)</td>
                      <td rowspan="3" class="tal">누베베</td>
                      <td rowspan="3" class="tal">누베베</td>
                      <td rowspan="3" class="tal">누베베</td>
                      <td rowspan="3" class="tal">누베베</td>
                      <td rowspan="3" class="tal">누베베</td>
                      <td>오전</td>
                      <td>
                        <button type="button" class="btn btn-mini btn_outline_gray btn_p10">특이사항 없음</button>
                      </td>
                      <td><input type="number" class="table_input" value="0" placeholder="입력"></td>
                      <td><input type="number" class="table_input" value="0" placeholder="입력"></td>
                      <td><input type="number" class="table_input" value="0" placeholder="입력"></td>
                    </tr>
                    <tr>
                      <td>오후</td>
                      <td>
                        <button type="button" class="btn btn-mini btn_outline_brand btn_p10" onclick="openModal('modal-modify-notes')">특이사항 보기</button>
                      </td>
                      <td><input type="number" class="table_input" placeholder="입력"></td>
                      <td><input type="number" class="table_input" placeholder="입력"></td>
                      <td><input type="number" class="table_input" placeholder="입력"></td>
                    </tr>
                    <tr>
                      <td>마감</td>
                      <td>
                        <button type="button" class="btn btn-mini btn_outline_gray btn_p10">특이사항 없음</button>
                      </td>
                      <td><input type="number" class="table_input" value="0" placeholder="입력"></td>
                      <td><input type="number" class="table_input" value="0" placeholder="입력"></td>
                      <td><input type="number" class="table_input" value="0" placeholder="입력"></td>
                    </tr>
                    <tr>
                      <td rowspan="3">부천(0)</td>
                      <td rowspan="3" class="tal">누베베</td>
                      <td rowspan="3" class="tal">누베베</td>
                      <td rowspan="3" class="tal">누베베</td>
                      <td rowspan="3" class="tal">누베베</td>
                      <td rowspan="3" class="tal">누베베</td>
                      <td>오전</td>
                      <td>
                        <button type="button" class="btn btn-mini btn_outline_gray btn_p10">특이사항 없음</button>
                      </td>
                      <td><input type="number" class="table_input" value="0" placeholder="입력"></td>
                      <td><input type="number" class="table_input" value="0" placeholder="입력"></td>
                      <td><input type="number" class="table_input" value="0" placeholder="입력"></td>
                    </tr>
                    <tr>
                      <td>오후</td>
                      <td>
                        <button type="button" class="btn btn-mini btn_outline_brand btn_p10" onclick="openModal('modal-modify-notes')">특이사항 보기</button>
                      </td>
                      <td><input type="number" class="table_input" placeholder="입력"></td>
                      <td><input type="number" class="table_input" placeholder="입력"></td>
                      <td><input type="number" class="table_input" placeholder="입력"></td>
                    </tr>
                    <tr>
                      <td>마감</td>
                      <td>
                        <button type="button" class="btn btn-mini btn_outline_gray btn_p10">특이사항 없음</button>
                      </td>
                      <td><input type="number" class="table_input" value="0" placeholder="입력"></td>
                      <td><input type="number" class="table_input" value="0" placeholder="입력"></td>
                      <td><input type="number" class="table_input" value="0" placeholder="입력"></td>
                    </tr>
                    <tr>
                      <td rowspan="3">부산(0)</td>
                      <td rowspan="3" class="tal">누베베</td>
                      <td rowspan="3" class="tal">누베베</td>
                      <td rowspan="3" class="tal">누베베</td>
                      <td rowspan="3" class="tal">누베베</td>
                      <td rowspan="3" class="tal">누베베</td>
                      <td>오전</td>
                      <td>
                        <button type="button" class="btn btn-mini btn_outline_gray btn_p10">특이사항 없음</button>
                      </td>
                      <td><input type="number" class="table_input" value="0" placeholder="입력"></td>
                      <td><input type="number" class="table_input" value="0" placeholder="입력"></td>
                      <td><input type="number" class="table_input" value="0" placeholder="입력"></td>
                    </tr>
                    <tr>
                      <td>오후</td>
                      <td>
                        <button type="button" class="btn btn-mini btn_outline_brand btn_p10" onclick="openModal('modal-modify-notes')">특이사항 보기</button>
                      </td>
                      <td><input type="number" class="table_input" placeholder="입력"></td>
                      <td><input type="number" class="table_input" placeholder="입력"></td>
                      <td><input type="number" class="table_input" placeholder="입력"></td>
                    </tr>
                    <tr>
                      <td>마감</td>
                      <td>
                        <button type="button" class="btn btn-mini btn_outline_gray btn_p10">특이사항 없음</button>
                      </td>
                      <td><input type="number" class="table_input" value="0" placeholder="입력"></td>
                      <td><input type="number" class="table_input" value="0" placeholder="입력"></td>
                      <td><input type="number" class="table_input" value="0" placeholder="입력"></td>
                    </tr>
                    <tr>
                      <td rowspan="3">인천(0)</td>
                      <td rowspan="3" class="tal">누베베</td>
                      <td rowspan="3" class="tal">누베베</td>
                      <td rowspan="3" class="tal">누베베</td>
                      <td rowspan="3" class="tal">누베베</td>
                      <td rowspan="3" class="tal">누베베</td>
                      <td>오전</td>
                      <td>
                        <button type="button" class="btn btn-mini btn_outline_gray btn_p10">특이사항 없음</button>
                      </td>
                      <td><input type="number" class="table_input" value="0" placeholder="입력"></td>
                      <td><input type="number" class="table_input" value="0" placeholder="입력"></td>
                      <td><input type="number" class="table_input" value="0" placeholder="입력"></td>
                    </tr>
                    <tr>
                      <td>오후</td>
                      <td>
                        <button type="button" class="btn btn-mini btn_outline_brand btn_p10" onclick="openModal('modal-modify-notes')">특이사항 보기</button>
                      </td>
                      <td><input type="number" class="table_input" placeholder="입력"></td>
                      <td><input type="number" class="table_input" placeholder="입력"></td>
                      <td><input type="number" class="table_input" placeholder="입력"></td>
                    </tr>
                    <tr>
                      <td>마감</td>
                      <td>
                        <button type="button" class="btn btn-mini btn_outline_gray btn_p10">특이사항 없음</button>
                      </td>
                      <td><input type="number" class="table_input" value="0" placeholder="입력"></td>
                      <td><input type="number" class="table_input" value="0" placeholder="입력"></td>
                      <td><input type="number" class="table_input" value="0" placeholder="입력"></td>
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
  <!-- 특이사항 수정 모달 시작 -->
  <div id="modal-modify-notes" class="modal">
    <div class="modal_wrap">
      <div class="modal__inner">
        <div class="modal__header">
          <h3>오전 특이사항</h3>
          <button type="button" class="btn_modal-close" onclick="closeModal('modal-modify-notes')"></button>
        </div>
        <div class="modal__content">
          <form action="">
            <fieldset>
              <div class="bg_container">
                <div class="form_input--typeB">
                  <label for="" class="form_label">오전 특이사항 수정하기</label>
                  <div class="input_content">
                    <textarea id="" name="" value="" required msg="" class="textarea--typeA" placeholder="특이사항을 입력하세요."></textarea>
                  </div>
                </div>
              </div>
            </fieldset>
          </form>
          <div class="modal__btn mt30">
            <button type="button" class="btn-modal btn_black">수정</button>
            <button type="button" class="btn-modal btn_brand">저장</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- 특이사항 수정 모달 끝 -->
</body>

</html>