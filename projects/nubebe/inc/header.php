<header class="header">
  <div class="header__inner">
    <button type="button" class="btn_fold"></button>
    <a href="../daily_settlement.php" class="header_logo">
      <img class="big_logo" src="../img/common/logo.png" alt="로고">
      <img class="small_logo" src="../img/common/logo_icon.png" alt="로고 아이콘">
    </a>


    <div class="header_gnb">
      <nav id="gnb">
        <ul>

          <!-- 해당 메뉴에 진입했을 때 .depth_1에 active 클래스 추가 -->
          <li class="depth_1">
            <a href="../daily_settlement.php" class="link no_arrow">
              <i class="menu_icon menu1"></i>
              <span>일일 보고</span>
            </a>
          </li>


          <?PHP 
          switch ($_SESSION['user']['m_type']){
            case "AD":
            case "SD":
          ?>

            <li class="depth_1">
              <a href="javascript:void(0);" class="link">
                <i class="menu_icon menu3"></i>
                <span>관리자 보고관리</span>
              </a>
              <ul class="sub_menu">
                <li class="depth_2">
                  <a href="../admin_report/total_daily_report.php" class="link">일일 보고 조회</a>
                </li>
                <li class="depth_2">
                  <a href="../admin_report/branch_daily_report.php" class="link">지점별 일일보고 등록</a>
                </li>
                <li class="depth_2">
                  <a href="../admin_report/daily_report.php" class="link">일일 보고서 조회</a>
                </li>
                <li class="depth_2">
                  <a href="../admin_report/weekly_report.php" class="link">주간 보고서 조회</a>
                </li>

                <?PHP if($_SESSION['user']['m_type'] == "AD"){?>
                <li class="depth_2">
                  <a href="../admin_report/data_statistics.php" class="link">데이터 통계 조회</a>
                </li>
                <li class="depth_2">
                  <a href="../admin_report/daily_ranking.php" class="link">일일 결산 순위</a>
                </li>
                <?PHP } ?>
              </ul>
            </li>


            <li class="depth_1">
              <a href="javascript:void(0);" class="link">
                <i class="menu_icon menu4"></i>
                <span>관리자 일정 관리</span>
              </a>
              <ul class="sub_menu">
                <li class="depth_2">
                  <a href="../admin_schedule/schedule_register.php" class="link">일정 등록</a>
                </li>
                <li class="depth_2">
                  <!-- 권한 : CRM, 진료지원 -->
                  <a href="../admin_schedule/work_schedule.php" class="link">근무 일정 조회</a>
                  <!-- 권한 : 관리자 -->
                  <!-- <a href="../admin_schedule/work_schedule_admin.php" class="link">근무 일정 조회</a> -->
                </li>
              </ul>
            </li>

            <?PHP if($_SESSION['user']['m_type'] == "AD"){?>

            <li class="depth_1">
              <a href="javascript:void(0);" class="link">
                <i class="menu_icon menu5"></i>
                <span>설정 관리</span>
              </a>
              <ul class="sub_menu">
                <!-- 해당 메뉴에 진입했을 때 .depth_2 active 클래스 추가 -->
                <li class="depth_2">
                  <a href="../setting/setting_branch.php" class="link">지점 관리</a>
                </li>
                <li class="depth_2">
                  <a href="../setting/setting_position.php" class="link">포지션 관리</a>
                </li>
                <li class="depth_2">
                  <a href="../setting/setting_item.php" class="link">항목 관리</a>
                </li>
              </ul>
            </li>
            <li class="depth_1">
              <a href="../admin_account.php" class="link no_arrow">
                <i class="menu_icon menu7"></i>
                <span>관리자 계정관리</span>
              </a>
            </li>

            <?PHP } ?>

            <li class="depth_1">
              <a href="../user_account.php" class="link no_arrow">
                <i class="menu_icon menu6"></i>
                <span>사용자 계정관리</span>
              </a>
            </li>


          <?PHP

            break;
            case "CRM":
            case "SUB":
          ?>

            <li class="depth_1">
              <a href="../daily_report.php" class="link no_arrow">
                <i class="menu_icon menu2"></i>
                <span>일일 보고 조회</span>
              </a>
            </li>

            <li class="depth_1">
              <a href="../schedule_register.php" class="link no_arrow">
                <i class="menu_icon menu8"></i>
                <span>일정 등록</span>
              </a>
            </li>

            <li class="depth_1">
              <a href="../work_schedule.php" class="link no_arrow">
                <i class="menu_icon menu4"></i>
                <span>근무 일정 조회</span>
              </a>
            </li>

          <?PHP 
            break;
          } 
          ?>

        </ul>
      </nav>
    </div>
    <div class="header_info">
      <div class="header_profile">
        <div class="profile active">
          <img src="../img/common/profile_img.png" alt="">
        </div>
        <span class="name"><b><?PHP echo $_SESSION['user']['typeNm']?></b> <?PHP echo $_SESSION['user']['userNm']?>님</span>
      </div>
      <ul class="header_info_menu">
        <li>
          <a href="../modify_info.php" class="link">
            <i class="icon_modify_info"></i>
            <span>정보수정</span>
          </a>
        </li>
        <li>
          <a href="../_controller/setLogout.php" class="link">
            <i class="icon_logout"></i>
            <span>로그아웃</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</header>