<?php 
include_once $_SERVER["DOCUMENT_ROOT"]."/_pro_inc/include_default_html.php";	
include_once $_SERVER["DOCUMENT_ROOT"]."/_pro_inc/checkLoginSD.php";	



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
              <h1>사용자 계정관리</h1>
            </div>
            <ul class="breadcrumb">
              <li class="active">사용자 계정관리</li>
              <li class="home"><span>HOME</span></li>
            </ul>
          </div>


          <div class="main_container">
            <div class="user-account__inner">

              <form name="srhFrm" id="srhFrm" action="javascript:void(0);" class="form_search mt20">
                <input type="hidden" id="csrfToken" value="<?php echo $_SESSION['admin']['csrfToken']?>">
                <input type="hidden" id="t_page" value="1">

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
                      <label for="" class="search_label">포지션</label>
                      <div class="search_content">
                        <select name="" id="" class="nice-select select-primary sm w160">
                          <option value="">전체</option>
                          <option value="">포지션A</option>
                          <option value="">포지션B</option>
                        </select>
                      </div>
                    </div>
                    <div class="search">
                      <label for="" class="search_label">권한</label>
                      <div class="search_content">
                        <select name="" id="" class="nice-select select-primary sm w160">
                          <option value="">전체</option>
                        </select>
                      </div>
                    </div>
                    <div class="search">
                      <div class="search_content">
                        <input type="text" class="form_input w336" placeholder="아이디, 이름, 이메일, 전화번호">
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
                        <label for="member_chk1">
                          <input type="checkbox" id="member_chk1" name="" value="">
                          <em class="check"></em> <span class="txt">정상회원</span>
                        </label>
                      </div>
                      <div class="checkbox--typeA">
                        <label for="member_chk2">
                          <input type="checkbox" id="member_chk2" name="" value="">
                          <em class="check"></em> <span class="txt">탈퇴회원</span>
                        </label>
                      </div>
                      <div class="checkbox--typeA">
                        <label for="member_chk3">
                          <input type="checkbox" id="member_chk3" name="" value="">
                          <em class="check"></em> <span class="txt">로그인 정지 회원</span>
                        </label>
                      </div>
                      <div class="checkbox--typeA">
                        <label for="member_chk4">
                          <input type="checkbox" id="member_chk4" name="" value="">
                          <em class="check"></em> <span class="txt">미등록</span>
                        </label>
                      </div>
                      <div class="checkbox--typeA">
                        <label for="member_chk5">
                          <input type="checkbox" id="member_chk5" name="" value="">
                          <em class="check"></em> <span class="txt">초기화</span>
                        </label>
                      </div>
                    </div>
                  </div>
                </fieldset>
              </form>

              <div class="user-account_btns mt40">
                <div class="btn_group">
                  <button type="button" class="btn btn-sm btn-round btn_black">선택 로그인 정지</button>
                  <button type="button" class="btn btn-sm btn-round btn_black">선택 로그인 정지 해지</button>
                  <button type="button" class="btn btn-sm btn-round btn_black">선택 패스워드 초기화</button>
                  <button type="button" class="btn btn-sm btn-round btn_black">선택 삭제</button>
                </div>
                <button type="button" class="btn btn-sm btn-round btn_brand" onclick="openModal('modal-register-user')">신규등록</button>
              </div>
              <div class="tbl_list mt20">
                <table>
                  <colgroup>
                    <col style="width: 60px;">
                    <col style="width: 168px;">
                    <col style="width: 168px;">
                    <col style="width: 168px;">
                    <col style="width: 168px;">
                    <col style="width: 200px;">
                    <col style="width: 168px;">
                    <col style="width: 320px;">
                    <col style="width: 168px;">
                    <col style="width: 168px;">
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
                      <th>권한구분</th>
                      <th>지점</th>
                      <th>포지션</th>
                      <th>ID</th>
                      <th>이름</th>
                      <th>이메일</th>
                      <th>전화번호</th>
                      <th>상태</th>
                    </tr>
                  </thead>

                  <tbody id="strList">
                    <!-- <tr>
                      <td>
                        <div class="checkbox--typeA center">
                          <label for="chk1">
                            <input type="checkbox" id="chk1" name="chk_user" value="">
                            <em class="check"></em>
                          </label>
                        </div>
                      </td>
                      <td>0000-00-00</td>
                      <td>권한구분</td>
                      <td>지점명</td>
                      <td>포지션</td>
                      <td class="tal">긴 텍스트의 아이디긴 텍스트의 아이디긴 텍스트의 아이디긴 텍스트의 아이디</td>
                      <td>누베베</td>
                      <td class="tal">email@gmail.com</td>
                      <td>010-1234-5678</td>
                      <td>상태</td>
                    </tr> -->
                   
                  </tbody>
                </table>
              </div>

              <!-- <ul class="pagination mt20">
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
              </ul> -->




              <div class="d-flex justify-content-center mt-5">
                <div class="pagination-wrap hstack gap-2" id="pageList"></div>
              </div>


            </div>
          </div>
        </div>
      </main>
    </div>
  </div>


  <!-- 사용자 계정 추가 모달 시작 -->
  <div id="modal-register-user" class="modal modal--typeA">
    <div class="modal_wrap">
      <div class="modal__inner">
        <div class="modal__header">
          <h3>사용자 계정</h3>
          <button type="button" class="btn_modal-close" onclick="closeModal('modal-register-user')"></button>
        </div>
        <div class="modal__content">
          <form action="" class="form_account_modal">
            <fieldset>
              <div class="bg_container">
                <div class="form_input--typeA mb10">
                  <label for="" class="form_label">이름</label>
                  <div class="input_content">
                    <input type="text" id="" name="" value="" required msg="" placeholder="이름을 입력하세요">
                  </div>
                </div>
                <div class="form_input--typeA mb10">
                  <label for="" class="form_label">전화번호</label>
                  <div class="input_content">
                    <div class="phone_box">
                      <select id="" name="" value="" required msg="" class="nice-select select-primary">
                        <option value="">010</option>
                        <option value="">011</option>
                      </select>
                      <span>-</span>
                      <input type="number" id="" name="" value="" required msg="">
                      <span>-</span>
                      <input type="number" id="" name="" value="" required msg="">
                    </div>
                  </div>
                </div>
                <div class="form_input--typeA">
                  <label for="" class="form_label">이메일</label>
                  <div class="input_content">
                    <input type="email" id="" name="" value="" required msg="" placeholder="이메일을 입력하세요">
                  </div>
                </div>
                <div class="register_auth">
                  <div class="form_input--typeA">
                    <label for="" class="form_label">권한</label>
                    <div class="input_content">
                      <div class="auth_box">
                        <select id="" name="" value="" required msg="" class="nice-select select-primary">
                          <option value="">권한을 선택하세요</option>
                          <option value="">CRM</option>
                          <option value="">관리자</option>
                        </select>
                        <button type="button" class="btn btn-lg btn_outline_brand" onclick="openModal('modal-register-position')">포지션 등록</button>
                      </div>
                    </div>
                  </div>
                  <div class="form_input--typeA">
                    <label for="" class="form_label"></label>
                    <div class="input_content">
                      <div class="selected_branch mt10">
                        <p>포지션A</p>
                      </div>
                    </div>
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
  <!-- 사용자 계정 추가 모달 끝 -->

  <!-- 포지션등록 모달 시작 -->
  <div id="modal-register-position" class="modal modal--typeA">
    <div class="modal_wrap">
      <div class="modal__inner">
        <div class="modal__header">
          <h3>포지션등록</h3>
          <button type="button" class="btn_modal-close" onclick="closeModal('modal-register-position')"></button>
        </div>
        <div class="modal__content">
          <form action="" class="form_account_modal">
            <fieldset>
              <div class="tbl_list">
                <table>
                  <colgroup>
                    <col style="width: 300px;">
                    <col style="width: 300px;">
                  </colgroup>
                  <thead>
                    <tr>
                      <th>구분</th>
                      <th>선택</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>포지션A</td>
                      <td>
                        <div class="radio--typeA center">
                          <label for="chk_branch_1">
                            <input type="radio" id="chk_branch_1" name="chk_branch" value="" checked>
                            <em class="check"></em>
                          </label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>포지션B</td>
                      <td>
                        <div class="radio--typeA center">
                          <label for="chk_branch_2">
                            <input type="radio" id="chk_branch_2" name="chk_branch" value="">
                            <em class="check"></em>
                          </label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>포지션C</td>
                      <td>
                        <div class="radio--typeA center">
                          <label for="chk_branch_3">
                            <input type="radio" id="chk_branch_3" name="chk_branch" value="">
                            <em class="check"></em>
                          </label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>포지션D</td>
                      <td>
                        <div class="radio--typeA center">
                          <label for="chk_branch_4">
                            <input type="radio" id="chk_branch_4" name="chk_branch" value="">
                            <em class="check"></em>
                          </label>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
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
  <!-- 포지션등록 모달 끝 -->



  <script>
    // 회원목록 전체선택 체크박스
    $("#chk_all").click(function () {
      if ($("#chk_all").is(":checked")) $("input[name=chk_user]").prop("checked", true);
      else $("input[name=chk_user]").prop("checked", false);
    });
  
    $("input[name=chk_user]").click(function () {
      var total = $("input[name=chk_user]").length;
      var checked = $("input[name=chk_user]:checked").length;
  
      if (total != checked) $("#chk_all").prop("checked", false);
      else $("#chk_all").prop("checked", true);
    });
  
    // 지점목록 전체선택 체크박스
    $("#chk_branch_all").click(function () {
      if ($("#chk_branch_all").is(":checked")) $("input[name=chk_branch]").prop("checked", true);
      else $("input[name=chk_branch]").prop("checked", false);
    });
  
    $("input[name=chk_branch]").click(function () {
      var total = $("input[name=chk_branch]").length;
      var checked = $("input[name=chk_branch]:checked").length;
  
      if (total != checked) $("#chk_branch_all").prop("checked", false);
      else $("#chk_branch_all").prop("checked", true);
    });
  </script>

  <script type="module" src="<?PHP echo JS_URL?>getUserAccount.js?v=<?PHP echo TIME_HIS?>"></script>
</body>
</html>