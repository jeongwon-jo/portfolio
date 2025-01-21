<?php include $_SERVER["DOCUMENT_ROOT"]."/_pro_inc/include_default_html.php"; ?>
<?php include $_SERVER["DOCUMENT_ROOT"]."/inc/head.php"; 



?>
<body>
  <div id="wrap">
    <div class="login">
      <div class="login__inner">
        <div class="login_form_area">

          <form name="loginForm" id="loginForm" class="form_login" method="post" novalidate>
            <input type = "text" id="pageMode" name="pageMode" value="L">
            <fieldset>
              <div class="login_logo">
                <img src="./img/common/logo_colored.png" alt="" width="308">
              </div>
              <div class="login_input">

                <!-- <select id="m_type" name="" class="nice-select select-primary" value="" required>
                  <option value="">사용자를 선택하세요.</option>
                  <option value="AD">마스터관리자</option>
                  <option value="COM">관리자</option>
                  <option value="GEN">CRM</option>
                </select> -->
              </div>
              <div class="login_input">
                <label for="id" class="login_label">아이디</label>
                <input type="text" id="userId" name="userId" value="" required msg="아이디" placeholder="아이디를 입력하세요">
              </div>

              <div class="login_input">
                <label for="pwd" class="login_label">비밀번호</label>
                <input type="password" id="userPw" name="userPw" value="" required msg="비밀번호" placeholder="비밀번호를 입력하세요">
              </div>
              
              <ul class="find_info">
                <li><button type="button" onclick="openModal('modal-find-id')">아이디 찾기</button></li>
                <li><button type="button" onclick="openModal('modal-find-pw')">패스워드 찾기</button></li>
              </ul>
              <div class="login_btn">
                <!-- <button type="button" class="btn btn-big btn_brand btn-w100p btn_login" id="btnLogin" onclick="location.href='/daily_settlement.php'">로그인</button> -->
                <button type="submit" class="btn btn-big btn_brand btn-w100p btn_login" id="butnLogin">로그인</button>
                <a href="./initial_login.php" class="btn btn-big btn-w100p btn_login btn_initial">최초 로그인</a>
              </div>
            </fieldset>
          </form>

        </div>
        <div class="login_img_area">
          <img src="./img/common/login_img.png" alt="">
        </div>
      </div>
    </div>
  </div>

  <!-- 아이디 찾기 모달 시작 -->
  <div id="modal-find-id" class="modal">
    <div class="modal_wrap">
      <div class="modal__inner">
        <div class="modal__header">
          <h3>아이디 찾기</h3>
          <button type="button" class="btn_modal-close" onclick="closeModal('modal-find-id')"></button>
        </div>
        <div class="modal__content">

          <form name="loginForm" id="loginForm" class="form_account_modal" method="post" novalidate>
            <input type = "text" id="pageMode" value="I">

            <fieldset>
              <div class="bg_container">
                <div class="form_input--typeB mb20">
                  <label for="" class="form_label">이름</label>
                  <div class="input_content">
                    <input type="text" id="userNm" name="userNm" value="" required msg="이름을" placeholder="이름을 입력하세요">
                  </div>
                </div>
                <div class="form_input--typeB mb20">
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
              </div>
              <div class="modal__btn mt30">
                <button type="button" class="btn-modal btn_black" onclick="closeModal('modal-find-id')">취소</button>
                <button type="button" class="btn-modal btn_brand" onclick="openModal('modal-id-email')">확인</button>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- 아이디 찾기 모달 끝 -->

  <!-- 아이디 이메일발송 모달 시작 -->
  <div id="modal-id-email" class="modal modal--typeA">
    <div class="modal_wrap">
      <div class="modal__inner">
        <div class="modal__header">
          <h3>아이디 찾기</h3>
          <button type="button" class="btn_modal-close" onclick="closeModal('modal-id-email')"></button>
        </div>
        <div class="modal__content">
          <div class="modal_textbox">
            <p>
              고객님의 ID가 등록된 메일로 발송 되었습니다.<br>
              고객님의 메일을 확인 바랍니다.
            </p>
          </div>
          <div class="modal__btn mt30">
            <button type="button" class="btn-modal btn_brand" onclick="openModal('modal-change-pw')">확인</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- 아이디 이메일발송 모달 끝 -->

  <!-- 패스워드 변경 모달 시작 -->
  <div id="modal-change-pw" class="modal">
    <div class="modal_wrap">
      <div class="modal__inner">
        <div class="modal__header">
          <h3>패스워드 변경</h3>
          <button type="button" class="btn_modal-close" onclick="closeModal('modal-change-pw')"></button>
        </div>
        <div class="modal__content">
          <div class="modal_textbox">
            <p>
              초기화된 패스워드입니다. 패스워드를 변경해 주세요.
            </p>
          </div>

          <form name="loginForm" id="loginForm" class="form_account_modal mt30" method="post" novalidate>
            <input type = "text" id="pageMode" value="P">

            <fieldset>
              <div class="bg_container">
                <div class="form_input--typeB mb20">
                  <label for="" class="form_label">패스워드</label>
                  <div class="input_content">
                    <input type="password" id="" name="" value="" required msg="" placeholder="비밀번호를 입력하세요">
                    <!-- 유효성 검사에 걸리면 error 클래스 (붉은 텍스트) 추가 -->
                    <p class="info_text">영문 대문자, 소문자, 숫자, 특수 문자 포함 6 ~ 20자 이내</p>
                  </div>
                </div>
                <div class="form_input--typeB mb20">
                  <label for="" class="form_label">패스워드 확인</label>
                  <div class="input_content">
                    <input type="password" id="" name="" value="" required msg="" placeholder="비밀번호를 다시 입력하세요">
                  </div>
                </div>
              </div>
              <div class="modal__btn mt30">
                <button type="button" class="btn-modal btn_black" onclick="closeModal('modal-change-pw')">취소</button>
                <button type="button" class="btn-modal btn_brand">등록</button>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- 패스워드 변경 모달 끝 -->

  <!-- 패스워드 찾기 모달 시작 -->
  <div id="modal-find-pw" class="modal">
    <div class="modal_wrap">
      <div class="modal__inner">
        <div class="modal__header">
          <h3>패스워드 찾기</h3>
          <button type="button" class="btn_modal-close" onclick="closeModal('modal-find-pw')"></button>
        </div>
        <div class="modal__content">

          <form name="loginForm" id="loginForm" class="form_account_modal" method="post" novalidate>
            <input type = "text" id="pageMode" value="RP">

            <fieldset>
              <div class="bg_container">
                <div class="form_input--typeB mb20">
                  <label for="" class="form_label">지점</label>
                  <div class="input_content">
                    <select id="" name="" value="" required msg="" class="nice-select select-primary">
                      <option value="">사용자를 선택하세요.</option>
                    </select>
                  </div>
                </div>
                <div class="form_input--typeB mb20">
                  <label for="" class="form_label">아이디</label>
                  <div class="input_content">
                    <input type="text" id="" name="" value="" required msg="" placeholder="아이디를 입력하세요">
                  </div>
                </div>
              </div>
              <div class="modal__btn mt30">
                <button type="button" class="btn-modal btn_brand" onclick="openModal('modal-reset-pw')">확인</button>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- 패스워드 찾기 모달 끝 -->

  <!-- 패스워드 초기화 모달 시작 -->
  <div id="modal-reset-pw" class="modal modal--typeA">
    <div class="modal_wrap">
      <div class="modal__inner">
        <div class="modal__header">
          <h3>패스워드 찾기</h3>
          <button type="button" class="btn_modal-close" onclick="closeModal('modal-reset-pw')"></button>
        </div>
        <div class="modal__content">
          <div class="modal_textbox">
            <p>
              고객님의 패스워드가 초기화 되었습니다.<br>
              반드시 패스워드 변경을 진행하시길 바랍니다.
            </p>
          </div>
          <div class="modal__btn mt30">
            <button type="button" class="btn-modal btn_brand" onclick="closeAllModal()">확인</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- 패스워드 초기화 모달 끝 -->



	<script src="<?PHP echo JS_URL?>fn.formcheck.js?v=<?PHP echo TIME_HIS?>"></script>
	<script src="<?PHP echo JS_URL?>getUserLoginAction.js?v=<?PHP echo TIME_HIS?>"></script>
</body>
</html>