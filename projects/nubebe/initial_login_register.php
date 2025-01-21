<?php include $_SERVER["DOCUMENT_ROOT"]."/inc/head.php"; ?>
<body>
  <div id="wrap">
    <div class="dashboard">
      <?php include $_SERVER["DOCUMENT_ROOT"]."/inc/header.php"; ?>
      <main class="main">
        <div class="contents">
          <div class="main_header">
            <div class="title">
              <h1>최초 로그인</h1>
            </div>
            <ul class="breadcrumb">
              <li class="active">최초 로그인</li>
              <li class="home"><span>HOME</span></li>
            </ul>
          </div>
          <div class="main_container">
            <div class="initial-login__inner">
              <h2 class="tit">
                환영합니다!<br>
                사용하실 계정 정보를 등록해 주세요.
              </h2>
              <div class="account_info_box">
                <div class="account_info">
                  <span>구분</span>
                  <b>구분</b>
                </div>
                <div class="account_info">
                  <span>이름</span>
                  <b>누베베</b>
                </div>
                <div class="account_info">
                  <span>이메일</span>
                  <b>email@email.com</b>
                </div>
                <div class="account_info">
                  <span>포지션</span>
                  <b>포지션A</b>
                </div>
                <div class="account_info">
                  <span>연락처</span>
                  <b>010 - 0000 - 0000</b>
                </div>
              </div>
              <form action="" class="form_initial-login mt30">
                <fieldset>
                  <div class="form_input--typeB mb30">
                    <label for="" class="form_label">아이디</label>
                    <div class="input_content">
                      <div class="id_box">
                        <input type="text" id="" name="" value="" required msg="" placeholder="아이디를 입력하세요">
                        <button type="button" class="btn btn-lg btn_duplicate_check">중복확인</button>
                      </div>
                      <!-- 유효성 검사에 걸리면 error 클래스 (붉은 텍스트) 추가 -->
                      <p class="info_text error">영문 대문자, 소문자, 숫자, 포함 6 ~ 20자 이내, 특수 문자는 밑줄 (_), 하이픈(-)만 사용 가능합니다.</p>
                    </div>
                  </div>
                  <div class="form_input--typeB mb30">
                    <label for="" class="form_label">패스워드</label>
                    <div class="input_content">
                      <input type="password" id="" name="" value="" required msg="" placeholder="비밀번호를 입력하세요">
                      <!-- 유효성 검사에 걸리면 error 클래스 (붉은 텍스트) 추가 -->
                      <p class="info_text">영문 대문자, 소문자, 숫자, 특수 문자 포함 6 ~ 20자 이내</p>
                    </div>
                  </div>
                  <div class="form_input--typeB mb30">
                    <label for="" class="form_label">패스워드 확인</label>
                    <div class="input_content">
                      <input type="password" id="" name="" value="" required msg="" placeholder="비밀번호를 다시 입력하세요">
                    </div>
                  </div>
                  <div class="btn_area mt40">
                    <button type="button" class="btn btn-lg btn_brand btn-round btn_confirm">아이디/패스워드 등록</button>
                  </div>
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
</body>

</html>