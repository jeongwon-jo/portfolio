<?php include $_SERVER["DOCUMENT_ROOT"]."/inc/head.php"; ?>

<body>
  <div id="wrap">
    <div class="dashboard">
      <?php include $_SERVER["DOCUMENT_ROOT"]."/inc/header.php"; ?>
      <main class="main">
        <div class="contents">
          <div class="main_header">
            <div class="title">
              <h1>일정 등록</h1>
            </div>
            <ul class="breadcrumb">
              <li class="active">일정 등록</li>
              <li class="home"><span>HOME</span></li>
            </ul>
          </div>
          <div class="main_container">
            <div class="schedule__inner">
              <h2 class="tit">일정 정보를 선택해주세요.</h2>
              <form action="" class="form_search mt20">
                <fieldset>
                  <div class="search__inner">
                    <div class="search">
                      <label for="" class="search_label">근무날짜 설정</label>
                      <div class="search_content">
                        <div class="date_box">
                          <input type="text" id="" name="" value="" class="datepicker" placeholder="YYYY-MM-DD" readonly>
                        </div>
                      </div>
                    </div>
                    <div class="search">
                      <label for="" class="search_label">근무 지점 설정</label>
                      <div class="search_content">
                        <div class="search_checkbox short">
                          <div class="checkbox--typeA">
                            <label for="branch_chk1">
                              <input type="checkbox" id="branch_chk1"><em class="check"></em> 전체
                            </label>
                          </div>
                          <div class="checkbox--typeA">
                            <label for="branch_chk2">
                              <input type="checkbox" id="branch_chk2"><em class="check"></em> 홍대
                            </label>
                          </div>
                          <div class="checkbox--typeA">
                            <label for="branch_chk3">
                              <input type="checkbox" id="branch_chk3"><em class="check"></em> 분당
                            </label>
                          </div>
                          <div class="checkbox--typeA">
                            <label for="branch_chk4">
                              <input type="checkbox" id="branch_chk4"><em class="check"></em> 부천
                            </label>
                          </div>
                          <div class="checkbox--typeA">
                            <label for="branch_chk5">
                              <input type="checkbox" id="branch_chk5"><em class="check"></em> 잠실
                            </label>
                          </div>
                          <div class="checkbox--typeA">
                            <label for="branch_chk6">
                              <input type="checkbox" id="branch_chk6"><em class="check"></em> 부산
                            </label>
                          </div>
                          <div class="checkbox--typeA">
                            <label for="branch_chk7">
                              <input type="checkbox" id="branch_chk7"><em class="check"></em> 강남
                            </label>
                          </div>
                          <div class="checkbox--typeA">
                            <label for="branch_chk8">
                              <input type="checkbox" id="branch_chk8"><em class="check"></em> 인천
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="search__inner space-between mt10">
                    <div class="search">
                      <label for="" class="search_label">근무 인원 설정</label>
                      <div class="search_content">
                        <div class="search">
                          <input type="text" class="form_input" value="홍길동, 누베베" readonly>
                          <button type="button" class="btn_outline_brand" onclick="openModal('modal-select-member')">근무 인원 설정</button>
                        </div>
                      </div>
                    </div>
                    <div class="search short">
                      <button type="button" class="btn_outline_brand">추가</button>
                      <button type="button" class="btn_reset">초기화</button>
                    </div>
                  </div>
                </fieldset>
              </form>
              <div class="list_header mt20">
                <h3 class="tit">추가 인원 <span class="c_sub fw700">00</span>명</h3>
                <div class="btns">
                  <button type="button" class="btn btn-sm btn-round btn_p30 btn_black">선택 삭제</button>
                  <button type="button" class="btn btn-sm btn-round btn_p30 btn_brand">저장</button>
                </div>
              </div>
              <div class="tbl_list mt20">
                <table>
                  <colgroup>
                    <col style="width: 60px;">
                    <col style="width: 340px;">
                    <col style="width: 340px;">
                    <col style="width: 340px;">
                    <col style="width: 340px;">
                    <col style="width: 340px;">
                  </colgroup>
                  <thead>
                    <tr>
                      <th>
                        <div class="checkbox--typeA center">
                          <label for="chk_all">
                            <input type="checkbox" id="chk_all" name="" value="">
                            <em class="check"></em>
                          </label>
                        </div>
                      </th>
                      <th>권한구분</th>
                      <th>포지션</th>
                      <th>ID</th>
                      <th>이름</th>
                      <th>배정 된 지점</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="checkbox--typeA center">
                          <label for="chk1">
                            <input type="checkbox" id="chk1" name="chk_shedule" value="">
                            <em class="check"></em>
                          </label>
                        </div>
                      </td>
                      <td>CRM</td>
                      <td>포지션A</td>
                      <td>nubebebebebebebebebe</td>
                      <td>누베베</td>
                      <td>분당 강남 부천 인천</td>
                    </tr>
                    <tr>
                      <td>
                        <div class="checkbox--typeA center">
                          <label for="chk2">
                            <input type="checkbox" id="chk2" name="chk_shedule" value="">
                            <em class="check"></em>
                          </label>
                        </div>
                      </td>
                      <td>CRM</td>
                      <td>포지션A</td>
                      <td>nubebebebebebebebebe</td>
                      <td>누베베</td>
                      <td>분당 강남 부천 인천</td>
                    </tr>
                    <tr>
                      <td>
                        <div class="checkbox--typeA center">
                          <label for="chk3">
                            <input type="checkbox" id="chk3" name="chk_shedule" value="">
                            <em class="check"></em>
                          </label>
                        </div>
                      </td>
                      <td>CRM</td>
                      <td>포지션A</td>
                      <td>nubebebebebebebebebe</td>
                      <td>누베베</td>
                      <td>분당 강남 부천 인천</td>
                    </tr>
                    <tr>
                      <td>
                        <div class="checkbox--typeA center">
                          <label for="chk4">
                            <input type="checkbox" id="chk4" name="chk_shedule" value="">
                            <em class="check"></em>
                          </label>
                        </div>
                      </td>
                      <td>CRM</td>
                      <td>포지션A</td>
                      <td>nubebebebebebebebebe</td>
                      <td>누베베</td>
                      <td>분당 강남 부천 인천</td>
                    </tr>
                    <tr>
                      <td>
                        <div class="checkbox--typeA center">
                          <label for="chk5">
                            <input type="checkbox" id="chk5" name="chk_shedule" value="">
                            <em class="check"></em>
                          </label>
                        </div>
                      </td>
                      <td>CRM</td>
                      <td>포지션A</td>
                      <td>nubebebebebebebebebe</td>
                      <td>누베베</td>
                      <td>분당 강남 부천 인천</td>
                    </tr>
                    <tr>
                      <td>
                        <div class="checkbox--typeA center">
                          <label for="chk6">
                            <input type="checkbox" id="chk6" name="chk_shedule" value="">
                            <em class="check"></em>
                          </label>
                        </div>
                      </td>
                      <td>CRM</td>
                      <td>포지션A</td>
                      <td>nubebebebebebebebebe</td>
                      <td>누베베</td>
                      <td>분당 강남 부천 인천</td>
                    </tr>
                    <tr>
                      <td>
                        <div class="checkbox--typeA center">
                          <label for="chk7">
                            <input type="checkbox" id="chk7" name="chk_shedule" value="">
                            <em class="check"></em>
                          </label>
                        </div>
                      </td>
                      <td>CRM</td>
                      <td>포지션A</td>
                      <td>nubebebebebebebebebe</td>
                      <td>누베베</td>
                      <td>분당 강남 부천 인천</td>
                    </tr>
                    <tr>
                      <td>
                        <div class="checkbox--typeA center">
                          <label for="chk8">
                            <input type="checkbox" id="chk8" name="chk_shedule" value="">
                            <em class="check"></em>
                          </label>
                        </div>
                      </td>
                      <td>CRM</td>
                      <td>포지션A</td>
                      <td>nubebebebebebebebebe</td>
                      <td>누베베</td>
                      <td>분당 강남 부천 인천</td>
                    </tr>
                    <tr>
                      <td>
                        <div class="checkbox--typeA center">
                          <label for="chk9">
                            <input type="checkbox" id="chk9" name="chk_shedule" value="">
                            <em class="check"></em>
                          </label>
                        </div>
                      </td>
                      <td>CRM</td>
                      <td>포지션A</td>
                      <td>nubebebebebebebebebe</td>
                      <td>누베베</td>
                      <td>분당 강남 부천 인천</td>
                    </tr>
                    <tr>
                      <td>
                        <div class="checkbox--typeA center">
                          <label for="chk10">
                            <input type="checkbox" id="chk10" name="chk_shedule" value="">
                            <em class="check"></em>
                          </label>
                        </div>
                      </td>
                      <td>CRM</td>
                      <td>포지션A</td>
                      <td>nubebebebebebebebebe</td>
                      <td>누베베</td>
                      <td>분당 강남 부천 인천</td>
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
  <!-- 인원선택 모달 시작 -->
  <div id="modal-select-member" class="modal modal--typeA">
    <div class="modal_wrap">
      <div class="modal__inner">
        <div class="modal__header">
          <h3>인원 선택</h3>
          <button type="button" class="btn_modal-close" onclick="closeModal('modal-select-member')"></button>
        </div>
        <div class="modal__content">
          <form action="" class="form_search form_select_member">
            <fieldset>
              <div class="search__inner">
                <div class="search flex_1">
                  <label for="" class="search_label"></label>
                  <div class="search_content w100p">
                    <input type="text" class="w100p" placeholder="이름 및 아이디 입력">
                  </div>
                </div>
                <div class="search">
                  <button type="button" class="btn_search"><span>검색</span></button>
                </div>
              </div>
            </fieldset>
          </form>
          <div class="tbl_list scroll_fixed_y mt30">
            <div class="table_wrap">
              <table>
                <colgroup>
                  <col style="width: 60px;">
                  <col style="width: 330px;">
                  <col style="width: 200px;">
                </colgroup>
                <thead>
                  <tr>
                    <th>
                      <div class="checkbox--typeA center">
                        <label for="chk_member_all">
                          <input type="checkbox" id="chk_member_all" name="" value="">
                          <em class="check"></em>
                        </label>
                      </div>
                    </th>
                    <th>ID</th>
                    <th>이름</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="checkbox--typeA center">
                        <label for="member_chk1">
                          <input type="checkbox" id="member_chk1" name="chk_member" value="">
                          <em class="check"></em>
                        </label>
                      </div>
                    </td>
                    <td>nubebebebebebebebebe</td>
                    <td>누베베</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="checkbox--typeA center">
                        <label for="member_chk2">
                          <input type="checkbox" id="member_chk2" name="chk_member" value="">
                          <em class="check"></em>
                        </label>
                      </div>
                    </td>
                    <td>nubebebebebebebebebe</td>
                    <td>누베베</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="checkbox--typeA center">
                        <label for="member_chk3">
                          <input type="checkbox" id="member_chk3" name="chk_member" value="">
                          <em class="check"></em>
                        </label>
                      </div>
                    </td>
                    <td>nubebebebebebebebebe</td>
                    <td>누베베</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="checkbox--typeA center">
                        <label for="member_chk4">
                          <input type="checkbox" id="member_chk4" name="chk_member" value="">
                          <em class="check"></em>
                        </label>
                      </div>
                    </td>
                    <td>nubebebebebebebebebe</td>
                    <td>누베베</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="checkbox--typeA center">
                        <label for="member_chk5">
                          <input type="checkbox" id="member_chk5" name="chk_member" value="">
                          <em class="check"></em>
                        </label>
                      </div>
                    </td>
                    <td>nubebebebebebebebebe</td>
                    <td>누베베</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="checkbox--typeA center">
                        <label for="member_chk6">
                          <input type="checkbox" id="member_chk6" name="chk_member" value="">
                          <em class="check"></em>
                        </label>
                      </div>
                    </td>
                    <td>nubebebebebebebebebe</td>
                    <td>누베베</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="checkbox--typeA center">
                        <label for="member_chk4">
                          <input type="checkbox" id="member_chk4" name="chk_member" value="">
                          <em class="check"></em>
                        </label>
                      </div>
                    </td>
                    <td>nubebebebebebebebebe</td>
                    <td>누베베</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="checkbox--typeA center">
                        <label for="member_chk5">
                          <input type="checkbox" id="member_chk5" name="chk_member" value="">
                          <em class="check"></em>
                        </label>
                      </div>
                    </td>
                    <td>nubebebebebebebebebe</td>
                    <td>누베베</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="checkbox--typeA center">
                        <label for="member_chk6">
                          <input type="checkbox" id="member_chk6" name="chk_member" value="">
                          <em class="check"></em>
                        </label>
                      </div>
                    </td>
                    <td>nubebebebebebebebebe</td>
                    <td>누베베</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="checkbox--typeA center">
                        <label for="member_chk4">
                          <input type="checkbox" id="member_chk4" name="chk_member" value="">
                          <em class="check"></em>
                        </label>
                      </div>
                    </td>
                    <td>nubebebebebebebebebe</td>
                    <td>누베베</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="checkbox--typeA center">
                        <label for="member_chk5">
                          <input type="checkbox" id="member_chk5" name="chk_member" value="">
                          <em class="check"></em>
                        </label>
                      </div>
                    </td>
                    <td>nubebebebebebebebebe</td>
                    <td>누베베</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="checkbox--typeA center">
                        <label for="member_chk6">
                          <input type="checkbox" id="member_chk6" name="chk_member" value="">
                          <em class="check"></em>
                        </label>
                      </div>
                    </td>
                    <td>nubebebebebebebebebe</td>
                    <td>누베베</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="modal__btn mt30">
            <button type="button" class="btn-modal btn_brand">선택</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- 인원선택 모달 끝 -->
  <script>
    // 일정목록 전체선택 체크박스
    $("#chk_all").click(function () {
      if ($("#chk_all").is(":checked")) $("input[name=chk_shedule]").prop("checked", true);
      else $("input[name=chk_shedule]").prop("checked", false);
    });

    $("input[name=chk_shedule]").click(function () {
      var total = $("input[name=chk_shedule]").length;
      var checked = $("input[name=chk_shedule]:checked").length;

      if (total != checked) $("#chk_all").prop("checked", false);
      else $("#chk_all").prop("checked", true);
    });

    // 인원선택 전체선택 체크박스
    $("#chk_member_all").click(function () {
      if ($("#chk_member_all").is(":checked")) $("input[name=chk_member]").prop("checked", true);
      else $("input[name=chk_member]").prop("checked", false);
    });

    $("input[name=chk_member]").click(function () {
      var total = $("input[name=chk_member]").length;
      var checked = $("input[name=chk_member]:checked").length;

      if (total != checked) $("#chk_member_all").prop("checked", false);
      else $("#chk_member_all").prop("checked", true);
    });
  </script>
</body>

</html>