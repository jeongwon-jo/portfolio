<?php include $_SERVER["DOCUMENT_ROOT"]."/inc/head.php"; ?>
<body>
  <div id="wrap">
    <div class="dashboard">
      <?php include $_SERVER["DOCUMENT_ROOT"]."/inc/header.php"; ?>
      <main class="main">
        <div class="contents">
          <div class="main_header">
            <div class="title">
              <h1>지점 관리</h1>
            </div>
            <ul class="breadcrumb">
              <li class="active">지점 관리</li>
              <li>설정 관리</li>
              <li class="home"><span>HOME</span></li>
            </ul>
          </div>
          <div class="main_container">
            <div class="setting__inner">
              <div class="btn_area end">
                <button type="button" class="btn btn-sm btn_p30 btn-round btn_black">선택 삭제</button>
                <button type="button" class="btn btn-sm btn_p30 btn-round btn_brand"
                  onclick="openModal('modal-register-s_branch')">신규 등록</button>
              </div>
              <div class="tbl_list mt20">
                <table>
                  <colgroup>
                    <col style="width: 60px;">
                    <col style="width: 425px;">
                    <col style="width: 425px;">
                    <col style="width: 425px;">
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
                      <th>등록일</th>
                      <th>지점코드</th>
                      <th>지점명</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="checkbox--typeA center">
                          <label for="chk1">
                            <input type="checkbox" id="chk1" name="chk_branch" value="">
                            <em class="check"></em>
                          </label>
                        </div>
                      </td>
                      <td>0000-00-00</td>
                      <td>지점코드</td>
                      <td>지점명</td>
                    </tr>
                    <tr>
                      <td>
                        <div class="checkbox--typeA center">
                          <label for="chk2">
                            <input type="checkbox" id="chk2" name="chk_branch" value="">
                            <em class="check"></em>
                          </label>
                        </div>
                      </td>
                      <td>0000-00-00</td>
                      <td>지점코드</td>
                      <td>지점명</td>
                    </tr>
                    <tr>
                      <td>
                        <div class="checkbox--typeA center">
                          <label for="chk3">
                            <input type="checkbox" id="chk3" name="chk_branch" value="">
                            <em class="check"></em>
                          </label>
                        </div>
                      </td>
                      <td>0000-00-00</td>
                      <td>지점코드</td>
                      <td>지점명</td>
                    </tr>
                    <tr>
                      <td>
                        <div class="checkbox--typeA center">
                          <label for="chk4">
                            <input type="checkbox" id="chk4" name="chk_branch" value="">
                            <em class="check"></em>
                          </label>
                        </div>
                      </td>
                      <td>0000-00-00</td>
                      <td>지점코드</td>
                      <td>지점명</td>
                    </tr>
                    <tr>
                      <td>
                        <div class="checkbox--typeA center">
                          <label for="chk5">
                            <input type="checkbox" id="chk5" name="chk_branch" value="">
                            <em class="check"></em>
                          </label>
                        </div>
                      </td>
                      <td>0000-00-00</td>
                      <td>지점코드</td>
                      <td>지점명</td>
                    </tr>
                    <tr>
                      <td>
                        <div class="checkbox--typeA center">
                          <label for="chk6">
                            <input type="checkbox" id="chk6" name="chk_branch" value="">
                            <em class="check"></em>
                          </label>
                        </div>
                      </td>
                      <td>0000-00-00</td>
                      <td>지점코드</td>
                      <td>지점명</td>
                    </tr>
                    <tr>
                      <td>
                        <div class="checkbox--typeA center">
                          <label for="chk7">
                            <input type="checkbox" id="chk7" name="chk_branch" value="">
                            <em class="check"></em>
                          </label>
                        </div>
                      </td>
                      <td>0000-00-00</td>
                      <td>지점코드</td>
                      <td>지점명</td>
                    </tr>
                    <tr>
                      <td>
                        <div class="checkbox--typeA center">
                          <label for="chk8">
                            <input type="checkbox" id="chk8" name="chk_branch" value="">
                            <em class="check"></em>
                          </label>
                        </div>
                      </td>
                      <td>0000-00-00</td>
                      <td>지점코드</td>
                      <td>지점명</td>
                    </tr>
                    <tr>
                      <td>
                        <div class="checkbox--typeA center">
                          <label for="chk9">
                            <input type="checkbox" id="chk9" name="chk_branch" value="">
                            <em class="check"></em>
                          </label>
                        </div>
                      </td>
                      <td>0000-00-00</td>
                      <td>지점코드</td>
                      <td>지점명</td>
                    </tr>
                    <tr>
                      <td>
                        <div class="checkbox--typeA center">
                          <label for="chk10">
                            <input type="checkbox" id="chk10" name="chk_branch" value="">
                            <em class="check"></em>
                          </label>
                        </div>
                      </td>
                      <td>0000-00-00</td>
                      <td>지점코드</td>
                      <td>지점명</td>
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
  <!-- 신규 등록 모달 시작 -->
  <div id="modal-register-s_branch" class="modal">
    <div class="modal_wrap">
      <div class="modal__inner">
        <div class="modal__header">
          <h3>지점 등록</h3>
          <button type="button" class="btn_modal-close" onclick="closeModal('modal-register-s_branch')"></button>
        </div>
        <div class="modal__content">
          <form action="" class="">
            <fieldset>
              <div class="bg_container">
                <div class="form_input--typeB">
                  <label for="" class="form_label">지점 등록</label>
                  <div class="input_content">
                    <input type="text" id="" name="" value="" required msg="" placeholder="지점명을 입력하세요.">
                    <!-- 유효성 검사에 걸리면 error 클래스 (붉은 텍스트) 추가 -->
                    <p class="info_text">최소2자리에서 최대 8자리까지 한글,영문,숫자 입력 / 특수문자 불가</p>
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
  <script>
    // 지점목록 전체선택 체크박스
    $("#chk_all").click(function () {
      if ($("#chk_all").is(":checked")) $("input[name=chk_branch]").prop("checked", true);
      else $("input[name=chk_branch]").prop("checked", false);
    });

    $("input[name=chk_branch]").click(function () {
      var total = $("input[name=chk_branch]").length;
      var checked = $("input[name=chk_branch]:checked").length;

      if (total != checked) $("#chk_all").prop("checked", false);
      else $("#chk_all").prop("checked", true);
    });
  </script>
</body>

</html>