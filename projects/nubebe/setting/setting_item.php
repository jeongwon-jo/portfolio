<?php include $_SERVER["DOCUMENT_ROOT"]."/inc/head.php"; ?>
<body>
  <div id="wrap">
    <div class="dashboard">
      <?php include $_SERVER["DOCUMENT_ROOT"]."/inc/header.php"; ?>
      <main class="main">
        <div class="contents">
          <div class="main_header">
            <div class="title">
              <h1>항목관리</h1>
            </div>
            <ul class="breadcrumb">
              <li class="active">항목관리</li>
              <li>설정관리</li>
              <li class="home"><span>HOME</span></li>
            </ul>
          </div>
          <div class="main_container">
            <div class="setting-item__inner">
              <div class="setting-item">
                <div class="item_title">
                  <h2 class="tit">일일결산<br>처리건수 항목관리</h2>
                  <button type="button" class="btn btn-sm btn-round btn_p30 btn_brand" onclick="openModal('modal-register-item')">신규 등록</button>
                </div>
                <div class="tbl_list mt20">
                  <table>
                    <colgroup>
                      <col style="width: 60px;">
                      <col style="width: 117px;">
                      <col style="width: 200px;">
                    </colgroup>
                    <thead>
                      <tr>
                        <th>번호</th>
                        <th>등록일</th>
                        <th>항목명</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>0000-00-00</td>
                        <td class="tal">카카오톡</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>0000-00-00</td>
                        <td class="tal">카카오톡</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>0000-00-00</td>
                        <td class="tal">카카오톡</td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>0000-00-00</td>
                        <td class="tal">카카오톡</td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td>0000-00-00</td>
                        <td class="tal">카카오톡</td>
                      </tr>
                      <tr>
                        <td>6</td>
                        <td>0000-00-00</td>
                        <td class="tal">카카오톡</td>
                      </tr>
                      <tr>
                        <td>7</td>
                        <td>0000-00-00</td>
                        <td class="tal">카카오톡</td>
                      </tr>
                      <tr>
                        <td>8</td>
                        <td>0000-00-00</td>
                        <td class="tal">카카오톡</td>
                      </tr>
                      <tr>
                        <td>9</td>
                        <td>0000-00-00</td>
                        <td class="tal">카카오톡</td>
                      </tr>
                      <tr>
                        <td>10</td>
                        <td>0000-00-00</td>
                        <td class="tal">카카오톡</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="setting-item">
                <div class="item_title">
                  <h2 class="tit">일일결산<br>예약건수 항목관리</h2>
                  <button type="button" class="btn btn-sm btn-round btn_p30 btn_brand" onclick="openModal('modal-register-item')">신규 등록</button>
                </div>
                <div class="tbl_list mt20">
                  <table>
                    <colgroup>
                      <col style="width: 60px;">
                      <col style="width: 117px;">
                      <col style="width: 200px;">
                    </colgroup>
                    <thead>
                      <tr>
                        <th>번호</th>
                        <th>등록일</th>
                        <th>항목명</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>0000-00-00</td>
                        <td class="tal">카카오톡 예약</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>0000-00-00</td>
                        <td class="tal">카카오톡 예약</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>0000-00-00</td>
                        <td class="tal">카카오톡 예약</td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>0000-00-00</td>
                        <td class="tal">카카오톡 예약</td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td>0000-00-00</td>
                        <td class="tal">카카오톡 예약</td>
                      </tr>
                      <tr>
                        <td>6</td>
                        <td>0000-00-00</td>
                        <td class="tal">카카오톡 예약</td>
                      </tr>
                      <tr>
                        <td>7</td>
                        <td>0000-00-00</td>
                        <td class="tal">카카오톡 예약</td>
                      </tr>
                      <tr>
                        <td>8</td>
                        <td>0000-00-00</td>
                        <td class="tal">카카오톡 예약</td>
                      </tr>
                      <tr>
                        <td>9</td>
                        <td>0000-00-00</td>
                        <td class="tal">카카오톡 예약</td>
                      </tr>
                      <tr>
                        <td>10</td>
                        <td>0000-00-00</td>
                        <td class="tal">카카오톡 예약</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="setting-item">
                <div class="item_title">
                  <h2 class="tit">지점별 일일보고<br>대면 예약건수 항목관리</h2>
                  <button type="button" class="btn btn-sm btn-round btn_p30 btn_brand" onclick="openModal('modal-register-item')">신규 등록</button>
                </div>
                <div class="tbl_list mt20">
                  <table>
                    <colgroup>
                      <col style="width: 60px;">
                      <col style="width: 117px;">
                      <col style="width: 200px;">
                    </colgroup>
                    <thead>
                      <tr>
                        <th>번호</th>
                        <th>등록일</th>
                        <th>항목명</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>0000-00-00</td>
                        <td class="tal">대면 App 예약</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>0000-00-00</td>
                        <td class="tal">대면 App 예약</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>0000-00-00</td>
                        <td class="tal">대면 App 예약</td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>0000-00-00</td>
                        <td class="tal">대면 App 예약</td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td>0000-00-00</td>
                        <td class="tal">대면 App 예약</td>
                      </tr>
                      <tr>
                        <td>6</td>
                        <td>0000-00-00</td>
                        <td class="tal">대면 App 예약</td>
                      </tr>
                      <tr>
                        <td>7</td>
                        <td>0000-00-00</td>
                        <td class="tal">대면 App 예약</td>
                      </tr>
                      <tr>
                        <td>8</td>
                        <td>0000-00-00</td>
                        <td class="tal">대면 App 예약</td>
                      </tr>
                      <tr>
                        <td>9</td>
                        <td>0000-00-00</td>
                        <td class="tal">대면 App 예약</td>
                      </tr>
                      <tr>
                        <td>10</td>
                        <td>0000-00-00</td>
                        <td class="tal">대면 App 예약</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="setting-item">
                <div class="item_title">
                  <h2 class="tit">지점별 일일보고<br>비대면 예약건수 항목관리</h2>
                  <button type="button" class="btn btn-sm btn-round btn_p30 btn_brand" onclick="openModal('modal-register-item')">신규 등록</button>
                </div>
                <div class="tbl_list mt20">
                  <table>
                    <colgroup>
                      <col style="width: 60px;">
                      <col style="width: 117px;">
                      <col style="width: 200px;">
                    </colgroup>
                    <thead>
                      <tr>
                        <th>번호</th>
                        <th>등록일</th>
                        <th>항목명</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>0000-00-00</td>
                        <td class="tal">비대면 예약(완료)</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>0000-00-00</td>
                        <td class="tal">비대면 예약(미완료)</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>0000-00-00</td>
                        <td class="tal">비대면 App 예약</td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>0000-00-00</td>
                        <td class="tal">비대면 네이버 예약</td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td>0000-00-00</td>
                        <td class="tal">대면 전화 + 카카오톡 예약</td>
                      </tr>
                      <tr>
                        <td>6</td>
                        <td>0000-00-00</td>
                        <td class="tal">비대면 챗봇 예약</td>
                      </tr>
                      <tr>
                        <td>7</td>
                        <td>0000-00-00</td>
                        <td class="tal">비대면 예약(완료)</td>
                      </tr>
                      <tr>
                        <td>8</td>
                        <td>0000-00-00</td>
                        <td class="tal">비대면 예약(완료)</td>
                      </tr>
                      <tr>
                        <td>9</td>
                        <td>0000-00-00</td>
                        <td class="tal">비대면 예약(완료)</td>
                      </tr>
                      <tr>
                        <td>10</td>
                        <td>0000-00-00</td>
                        <td class="tal">비대면 예약(완료)</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
  <!-- 신규 등록 모달 시작 -->
  <div id="modal-register-item" class="modal">
    <div class="modal_wrap">
      <div class="modal__inner">
        <div class="modal__header">
          <h3>신규 등록</h3>
          <button type="button" class="btn_modal-close" onclick="closeModal('modal-register-item')"></button>
        </div>
        <div class="modal__content">
          <form action="" class="">
            <fieldset>
              <div class="bg_container">
                <div class="form_input--typeB">
                  <label for="" class="form_label">처리건수 항목명</label>
                  <div class="input_content">
                    <input type="text" id="" name="" value="" required msg="" placeholder="항목명을 입력하세요">
                  </div>
                </div>
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
  <!-- 신규 등록 추가 모달 끝 -->
</body>

</html>