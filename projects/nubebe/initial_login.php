<?php include $_SERVER["DOCUMENT_ROOT"]."/inc/head.php"; ?>
<body>
  <div id="wrap">
    <div class="login">
      <div class="login__inner">
        <div class="login_form_area">
          <form action="" class="form_login">
            <fieldset>
              <div class="login_logo">
                <a href="./" class="btn_back"></a>
                <img src="./img/common/logo_colored.png" alt="" width="308">
              </div>
              <div class="login_input">
                <select id="" name="" value="" required msg="" class="nice-select select-primary" required>
                  <option value="">사용자를 선택하세요.</option>
                </select>
              </div>
              <div class="login_input">
                <label for="id" class="login_label">아이디</label>
                <input type="text" id="id" name="" value="" required msg="" placeholder="아이디를 입력하세요" required>
              </div>
              <div class="login_input">
                <label for="email" class="login_label">이메일</label>
                <input type="email" id="email" name="" value="" required msg="" placeholder="이메일을 입력하세요" required>
              </div>
              <div class="login_btn">
                <button type="button" class="btn btn-big btn_brand btn-w100p btn_login"
                  onclick="openModal('modal-confirm-user')">최초 로그인 등록</button>
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
  <!-- 사용자 확인 모달 시작 -->
  <div id="modal-confirm-user" class="modal modal--typeA">
    <div class="modal_wrap">
      <div class="modal__inner">
        <div class="modal__header">
          <h3>사용자 확인</h3>
          <button type="button" class="btn_modal-close" onclick="closeModal('modal-confirm-user')"></button>
        </div>
        <div class="modal__content">
          <div class="modal_textbox">
            <p>
              입력하신 정보를 찾을 수 없습니다.<br>
              관리자에게 문의해 주세요.
            </p>
          </div>
          <div class="modal__btn mt30">
            <button type="button" class="btn-modal btn_brand" onclick="closeModal('modal-confirm-user')">확인</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- 사용자 확인 모달 끝 -->
  <!-- 로그인정보 존재 모달 시작 -->
  <div id="modal-confirm-user" class="modal modal--typeA">
    <div class="modal_wrap">
      <div class="modal__inner">
        <div class="modal__header">
          <h3>계정 확인</h3>
          <button type="button" class="btn_modal-close" onclick="closeModal('modal-confirm-user')"></button>
        </div>
        <div class="modal__content">
          <div class="modal_textbox">
            <p>
              입력하신 정보는 이미 로그인 계정 정보가 존재하여<br>
              최초 로그인 등록이 불가능합니다.
            </p>
          </div>
          <div class="modal__btn mt30">
            <button type="button" class="btn-modal btn_brand" onclick="closeModal('modal-confirm-user')">확인</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- 로그인정보 존재 모달 끝 -->
</body>

</html>