<?php 
include_once $_SERVER["DOCUMENT_ROOT"]."/_pro_inc/include_default_html.php";	
include_once $_SERVER["DOCUMENT_ROOT"]."/_pro_inc/checkLogin.php";	
include $_SERVER["DOCUMENT_ROOT"]."/inc/head.php"; 

try {

	$MEMBER = servicelocator::get('MEMBER', $DB);
	$return = $MEMBER->getMemberInfo($_SESSION['user']['m_idx']);
  
} catch (Exception $e) {

  $UTIL->alertTour($e->getMessage(), "/index.php");
  exit;
}
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
              <h1>정보수정</h1>
            </div>
            <ul class="breadcrumb">
              <li class="active">정보수정</li>
              <li class="home"><span>HOME</span></li>
            </ul>
          </div>
          <div class="main_container">
            <div class="modify-info__inner">
              <h2 class="tit">회원 정보수정</h2>
              <div class="modify_content mt20">
                <div class="modify_content_tit">
                  <h3 class="tit">회원 정보</h3>
                </div>
                <ul class="information_content">
                  <li>
                    <span>아이디</span>
                    <div class="info">
                      <b class="info_txt"><?PHP echo $return['userId']?></b>
                    </div>
                  </li>

                  <li>
                    <span>비밀번호</span>
                    <div class="info">
                      <button type="button" class="btn btn-mini btn_outline_brand btn_p10" onclick="openModal('modal-change-pw')">패스워드 수정</button>
                    </div>
                  </li>


                  <li>
                    <span>이름</span>
                    <div class="info">
                      <input type="text" id="userNm" name="userNm" value="<?PHP echo $return['userNm']?>" required msg="이름" placeholder="이름을 입력하세요">
                    </div>
                  </li>
                  <li>
                    <span>전화번호</span>
                    <div class="info">
                      <input type="text" id="cell" name="cell" value="<?PHP echo $return['cell']?>" required msg="전화번호" placeholder="전화번호를 입력하세요">
                    </div>
                  </li>
                  <li>
                    <span>이메일</span>
                    <div class="input_content">
                      <div class="info id_box">
                        <input type="email" id="" name="" value="" required msg="" placeholder="이메일을 입력하세요">
                        <button type="button" class="btn btn-lg btn_outline_brand">인증 발송</button>
                      </div>
                    </div>
                  </li>


                  <!-- <div class="form_input--typeA mb10">
                    <label for="" class="form_label">이메일 인증<span class="asterisk"></span></label>
                    <div class="input_content">
                      <div class="id_box">
                        <input type="email" id="" name="" value="" required msg="" placeholder="이메일을 입력하세요">
                        <button type="button" class="btn btn-lg btn_outline_brand">인증 발송</button>
                      </div>
                      <p class="info_text confirm">이메일로 인증번호가 발송되었습니다.</p>
                    </div>
                  </div>
                  
                  <div class="form_input--typeA mb10">
                    <label for="" class="form_label">인증번호<span class="asterisk"></span></label>
                    <div class="input_content">
                      <div class="id_box">
                        <input type="number" id="" name="" value="" required msg="" placeholder="인증번호를 입력하세요">
                        <button type="button" class="btn btn-lg btn_outline_brand">확인</button>
                      </div>
                      <p class="info_text confirm">인증되었습니다.</p>
                      <p class="info_text error">인증번호를 다시 입력해 주세요.</p>
                    </div>
                  </div> -->

                </ul>
              </div>
              <div class="modify_content mt20">
                <div class="modify_content_tit">
                  <h3 class="tit">권한 및 지점 정보</h3>
                </div>
                <ul class="information_content">
                  <li>
                    <span>권한 분류</span>
                    <div class="info">
                      <b class="info_txt"><?PHP echo $return['mTypeNm']?></b>
                    </div>
                  </li>
                  <li>
                    <span>포지션</span>
                    <div class="info">
                      <b class="info_txt">포지션A</b>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="btn_area mt30">
                <button type="button" class="btn btn-lg btn_brand btn-round btn_exit" onclick="openModal('modal-exit')">회원탈퇴</button>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>

  <!-- 회원정보 변경 모달 시작 -->
  <div id="modal-modify-info" class="modal modal--typeA">
    <div class="modal_wrap">
      <div class="modal__inner">
        <div class="modal__header">
          <h3>회원 정보 변경</h3>
          <button type="button" class="btn_modal-close" onclick="closeModal('modal-modify-info')"></button>
        </div>
        <div class="modal__content">
          <form action="" class="form_account_modal">
            <fieldset>
              <div class="bg_container">
                <div class="form_input--typeA mb10">
                  <label for="" class="form_label">담당자 성함<span class="asterisk"></span></label>
                  <div class="input_content">
                    <input type="text" id="" name="" value="" required msg="" placeholder="이름을 입력하세요">
                  </div>
                </div>
                <div class="form_input--typeA mb10">
                  <label for="" class="form_label">휴대폰 번호<span class="asterisk"></span></label>
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
                <div class="form_input--typeA mb10">
                  <label for="" class="form_label">이메일 인증<span class="asterisk"></span></label>
                  <div class="input_content">
                    <div class="id_box">
                      <input type="email" id="" name="" value="" required msg="" placeholder="이메일을 입력하세요">
                      <button type="button" class="btn btn-lg btn_outline_brand">인증 발송</button>
                    </div>
                    <p class="info_text confirm">이메일로 인증번호가 발송되었습니다.</p>
                  </div>
                </div>
                <div class="form_input--typeA mb10">
                  <label for="" class="form_label">인증번호<span class="asterisk"></span></label>
                  <div class="input_content">
                    <div class="id_box">
                      <input type="number" id="" name="" value="" required msg="" placeholder="인증번호를 입력하세요">
                      <button type="button" class="btn btn-lg btn_outline_brand">확인</button>
                    </div>
                    <p class="info_text confirm">인증되었습니다.</p>
                    <p class="info_text error">인증번호를 다시 입력해 주세요.</p>
                  </div>
                </div>
              </div>
              <div class="modal__btn mt30">
                <button type="button" class="btn-modal btn_black" onclick="closeModal('modal-modify-info')">취소</button>
                <button type="button" class="btn-modal btn_brand">변경</button>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- 회원정보 변경 모달 끝 -->
  <!-- 패스워드 변경 모달 시작 -->
  <div id="modal-change-pw" class="modal">
    <div class="modal_wrap">
      <div class="modal__inner">
        <div class="modal__header">
          <h3>패스워드 변경</h3>
          <button type="button" class="btn_modal-close" onclick="closeModal('modal-change-pw')"></button>
        </div>
        <div class="modal__content">
          <form action="" class="form_account_modal">
            <fieldset>
              <div class="bg_container">
                <div class="form_input--typeB mb10">
                  <label for="" class="form_label">현재 패스워드</label>
                  <div class="input_content">
                    <input type="password" id="" name="" value="" required msg="" placeholder="비밀번호를 입력하세요">
                    <p class="info_text">영문 대문자, 소문자, 숫자, 특수 문자 포함 6 ~ 20자 이내</p>
                  </div>
                </div>
                <div class="form_input--typeB mb10">
                  <label for="" class="form_label">패스워드</label>
                  <div class="input_content">
                    <input type="password" id="" name="" value="" required msg="" placeholder="비밀번호를 입력하세요">
                    <!-- 유효성 검사에 걸리면 error 클래스 (붉은 텍스트) 추가 -->
                    <p class="info_text">영문 대문자, 소문자, 숫자, 특수 문자 포함 6 ~ 20자 이내</p>
                  </div>
                </div>
                <div class="form_input--typeB mb10">
                  <label for="" class="form_label">패스워드 확인</label>
                  <div class="input_content">
                    <input type="password" id="" name="" value="" required msg="" placeholder="비밀번호를 다시 입력하세요">
                  </div>
                </div>
              </div>
              <div class="modal__btn mt30">
                <button type="button" class="btn-modal btn_black" onclick="closeModal('modal-change-pw')">취소</button>
                <button type="button" class="btn-modal btn_brand">변경</button>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- 패스워드 변경 모달 끝 -->
  <!-- 회원탈퇴 모달 시작 -->
  <div id="modal-exit" class="modal modal--typeA">
    <div class="modal_wrap">
      <div class="modal__inner">
        <div class="modal__header">
          <h3>회원 탈퇴</h3>
          <button type="button" class="btn_modal-close" onclick="closeModal('modal-exit')"></button>
        </div>
        <div class="modal__content">
          <div class="modal_textbox">
            <p>
              탈퇴 후 모든 정보가 삭제되며 되돌릴 수 없습니다.<br>
              정말 탈퇴하시겠습니까?
            </p>
          </div>
          <div class="modal__btn mt30">
            <button type="button" class="btn-modal btn_black" onclick="closeModal('modal-exit')">취소</button>
            <button type="button" class="btn-modal btn_brand">확인</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- 회원탈퇴 모달 끝 -->
</body>

</html>