// 공통 모달 띄우기 (로그아웃, 설정 적용 등등..)
$(function () {
  // 로그아웃
  $(".header__menu .user_menu li.logout a").click(function () {
    $(".header__menu .user_menu").slideUp();
    let logoutSrc = `
      <div id="modal-logout" class="modal modal_sm">
        <div class="modal__inner">
          <div class="modal__header">
            <h3>알림</h3>
            <p>로그아웃 하시겠습니까?</p>
          </div>
          <div class="modal__btns center mt24">
            <button type="button" class="btn btn-modal btn-w100p btn_gray" onclick="closeModal('modal-logout')">취소</button>
            <button type="button" class="btn btn-modal btn-w100p btn_primary" onclick="location.href='/login.html'">확인</button>
          </div>
        </div>
      </div>
    `;

    if ($("#modal-logout").length == 0) {
      $("body").append(logoutSrc);
    }

    openModal("modal-logout");
  });

  // 비밀번호 변경
  $(".header__menu .user_menu li.change_pwd a").click(function () { 
    $(".header__menu .user_menu").slideUp();
		let changePwdSrc = `
      <div id="modal-change-pwd" class="modal modal_md">
        <div class="modal__inner">
          <div class="modal__header">
            <h3>비밀번호 재설정</h3>
            <p>공유기의 네트워크 통합 시스템에 접속하기 위한<br>
            관리자 암호를 재설정 합니다.</p>
          </div>
          <div class="modal__content">
            <ul class="change-pwd__info">
              <li>변경된 암호를 잊으셨을 경우, GAPD-7000을 초기화하면 최초 설정된
                  관리자 암호로 재설정됩니다.</li>
              <li>최초 설정된 관리자 암호는 GAPD-7000 하단부에 기재되어있습니다.</li>
            </ul>
            <form action="" class="form_change_pwd mt24">
              <fieldset>
                <div class="input--typeA">
                  <label for="" class="input__label">기존 비밀번호</label>
                  <div class="input__contents">
                    <div class="input__box">
                      <input type="password" class="form-control">
                      <div class="btns">
                        <button type="button" class="btn_delete"></button>
                        <button type="button" class="btn_eye"></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="input--typeA">
                  <label for="" class="input__label">변경할 비밀번호</label>
                  <div class="input__contents">
                    <div class="input__box">
                      <input type="password" class="form-control">
                      <div class="btns">
                        <button type="button" class="btn_delete"></button>
                        <button type="button" class="btn_eye"></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="input--typeA">
                  <label for="" class="input__label">비밀번호 확인</label>
                  <div class="input__contents">
                    <div class="input__box">
                      <input type="password" class="form-control">
                      <div class="btns">
                        <button type="button" class="btn_delete"></button>
                        <button type="button" class="btn_eye"></button>
                      </div>
                    </div>
                  </div>
                </div>
              </fieldset>
            </form>
          </div>
          <div class="modal__btns center mt24">
            <button type="button" class="btn btn-modal btn_gray" onclick="closeModal('modal-change-pwd')">취소</button>
            <button type="button" class="btn btn-modal btn_primary">확인</button>
          </div>
        </div>
      </div>
    `;
    
    if ($("#modal-change-pwd").length == 0) {
			$("body").append(changePwdSrc);
		}

    openModal("modal-change-pwd");
    
    $(".form-control").on("propertychange change paste input", function () {
			if ($(this).val().length > 0) {
				$(this).siblings(".btns").find(".btn_delete").show();
			} else {
				$(this).siblings(".btns").find(".btn_delete").hide();
			}
    });
    
    $(".input__box .btn_delete").click(function () {
			$(this).parents(".btns").siblings("input").val("");
			$(this).hide();
		});

		$(".input__box .btn_eye").click(function () {
			$(this).toggleClass("show");
			if ($(this).hasClass("show")) {
				$(this).parents(".btns").siblings("input").prop("type", "text");
			} else {
				$(this).parents(".btns").siblings("input").prop("type", "password");
			}
		});
  })

  // 설정 적용
  $(".btn_setting").click(function () {
		let settingSrc = `
      <div id="modal-confirm-save" class="modal modal_sm">
        <div class="modal__inner">
          <div class="modal__header">
            <h3>알림</h3>
            <p>설정을 적용 하겠습니까?</p>
          </div>
          <div class="modal__btns center mt24">
            <button type="button" class="btn btn-modal btn-w100p btn_gray"
              onclick="closeModal('modal-confirm-save')">아니요</button>
            <button type="button" id="btnSettingYes" class="btn btn-modal btn-w100p btn_primary">예</button>
          </div>
        </div>
      </div>
    `;

		if ($("#modal-confirm-save").length == 0) {
			$("body").append(settingSrc);
		}

		openModal("modal-confirm-save");

		// 설정 적용 예 버튼 클릭
    $("#btnSettingYes").click(function () {
      closeModal("modal-confirm-save");
			let loadingSrc = `
      <div id="modal-setting-ing" class="modal modal_md">
        <div class="modal__inner">
          <div class="modal__header">
            <h3>설정 적용중</h3>
          </div>
          <div class="modal__content">
            <div class="modal_loading">
              <div class="loader"></div>
              <p class="loading_txt">변경사항을 적용하는 중입니다.</p>
            </div>
          </div>
        </div>
      </div>
    `;

			$("body").append(loadingSrc);
      openModal("modal-setting-ing");

      // 2. 변경값 유효성 체크
      setTimeout(function () {
				$(".modal_loading .loading_txt").text("값이 유효한지 확인 중입니다.");

				// 3. 저장 진행 중
				setTimeout(function () {
					$(".modal_loading .loading_txt").text("");
					// 4. 완료 안내
					setTimeout(function () {
						$(".modal_loading .loading_txt").text("완료되었습니다.");

						// 5. 변경값 저장 안내
						setTimeout(function () {
							$(".modal_loading .loading_txt").text("변경사항을 적용합니다.");

							// 6. 저장 진행 중
							setTimeout(function () {
								$(".modal_loading .loading_txt").text("");

								// 7. 변경사항 적용 완료
								setTimeout(function () {
									$(".modal_loading .loader").hide();
									$("#modal-setting-ing").addClass("complete");
									$(".modal_loading .loading_txt").text(
										"변경사항이 적용되었습니다."
									);
									$(".modal_loading").addClass("complete");

									setTimeout(function () {
										closeModal("modal-setting-ing");
										// 초기화
										$(".modal_loading .loader").show();
										$("#modal-setting-ing").removeClass("complete");
										$(".modal_loading").removeClass("complete");
										showRestartModal();
									}, 3000);
								}, 3000);
							}, 3000);
						}, 3000);
					}, 3000);
				}, 3000);
			}, 3000);
      
      function showRestartModal() {
				let restartSrc = `
          <div id="modal-restart" class="modal modal_md">
            <div class="modal__inner">
              <div class="modal__header">
                <h3>설정 적용중</h3>
              </div>
              <div class="modal__content">
                <div class="modal_loading">
                  <div class="loader"></div>
                  <p class="loading_txt">시스템을 다시 시작하는 중입니다.</p>
                </div>
              </div>
            </div>
          </div>
        `;

        $("body").append(restartSrc);
        openModal("modal-restart");
        
        setTimeout(function () {
          $(".modal_loading .loading_txt").text("");

          setTimeout(function () {
						$(".modal_loading .loading_txt").text("N초 남았습니다.");

						setTimeout(function () {
							$(".modal_loading .loading_txt").text("잠시만 기다려 주세요.");

							setTimeout(function () {
								$(".modal_loading .loader").hide();
								$("#modal-restart").addClass("complete");
								$(".modal_loading .loading_txt").text(
									"변경사항이 적용되었습니다."
								);
								$(".modal_loading").addClass("complete");

								setTimeout(function () {
									closeModal("modal-restart");
									$(".modal_loading .loader").show();
									$("#modal-restart").removeClass("complete");
									$(".modal_loading").removeClass("complete");
								}, 3000);
							}, 3000);
						}, 3000);
					}, 3000);
				}, 3000);
      }
		});
	})
  
})