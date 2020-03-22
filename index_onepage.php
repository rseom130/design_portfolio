<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> -->
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1"/>
  <title></title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

  <style>
    @import url(//fonts.googleapis.com/earlyaccess/notosanskr.css);

    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  html, body {
    font-family: "Noto Sans KR", sans-serif !important;
    line-height: 1.5;
    width: 100%;
    height: 100%;
  }
  a, a:active, a:hover, a:visited, a:focus {
    color: inherit;
    text-decoration: inherit;
    cursor: pointer;
  }
  button, button:active, button:hover, button:visited, button:focus {
    color: inherit;
    text-decoration: inherit;
    outline: inherit;
    cursor: pointer;
  }

  /* 왼쪽메뉴 nav */
  nav { /* 왼쪽메뉴 전체 */
    width: 280px;
    height: 100%;
    position: fixed;
    z-index: 100;
    left: 0;
    top: 0;
    background-color: #2da38e;
    padding: 20px;
    display: flex;
    align-content: center;
    align-items: center;
    flex-direction: column;justify-content: center;
  }
  nav #profile_img { /* 프로필 이미지 박스 */
    width: 200px;
    padding-bottom: 8px;
  }
  nav #profile_img img { /* 프로필 이미지 */
    width: 100%;
    padding: 10px;
    background-color: rgba(255, 255, 255, 0.15);
    border-radius: 50%;
  }
  nav #left_menu { /* 메뉴 */
    display: block;
    width: 100%;
  }
  nav #left_menu li { /* 메뉴 항목 */
    display: block;
    width: 100%;
    list-style: none;
    text-align: center;
    font-weight: bold;
    font-size: 1.1rem;
    text-transform: uppercase;
    letter-spacing: 0.2rem;
  }
  nav #left_menu li a { /* 메뉴 항목 링크 */
    display: block;
    padding: 8px;
    color: rgba(255, 255, 255, 0.5);
  }
  nav #left_menu li a.on { /* 멤뉴 항목 링크 선택 */
    color: rgba(255, 255, 255, 1);
  }
  nav #copyright { /* 카피라이트 */
    color: rgba(255, 255, 255, 0.7);
    font-size: 0.75rem;
    width: 100%;
    text-align: center;
    position: absolute;
    bottom: 20px;
  }
  /* 왼쪽메뉴 nav 끝 */

  /* main */
  .main { /* main 클래스 */
    width: calc(100% - 280px);
    height: 100%;
    max-height: 100%;
    margin-left: 280px;
    margin-right: 280px;
    padding: 20px 30px;
    display: flex;
    align-content: center;
    flex-direction: column;
    justify-content: center;color: #343441;
    position: relative;
    border-bottom: 1px solid #b4c4c2;
  }
  .main.v_top { /* main 클래스 상단 정렬 */
    justify-content: flex-start;
  }
  .main.v_middle { /* main 클래스 중단 정렬 */
    justify-content: center;
  }
  .main.v_bottom { /* main 클래스 하단 정렬 */
    justify-content: flex-end;
  }
  .main > .in { /* main 클래스 내부 */
    width: 100%;
    max-width: 1200px;
    justify-content: center;
    overflow: hidden;
  }
  .main > .in > .title { /* main 클래스 내부 제목 박스 */
    font-size: 4rem;
    font-weight: bold;
    margin-bottom: 16px;
    display: flex;
    justify-content: space-between;
  }
  .main > .in > .title .title_txt { /* main 클래스 내부 제목 글자 */
    /* width: 100%;
    display: block; */
  }
  .main > .in > .title .title_txt span { /* main 클래스 내부 제목 글자 강조 */
    color: #2da38e;
  }
  .main > .in > .title .title_btn { /* main 클래스 내부 제목 버튼 박스 */
    font-size: 1rem;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .main > .in > .description { /* main 클래스 내부 내용 */
    color: #777777;
  }
  .main > .in > .description.left { /* main 클래스 내부 내용 왼쪽 정렬 */
    text-align: left;
  }
  .main > .in > .description.center { /* main 클래스 내부 내용 가운데 정렬 */
    text-align: center;
  }
  .main > .in > .description.right { /* main 클래스 내부 내용 오른쪽 정렬 */
    text-align: right;
  }
  /* main 끝 */

  /* 게시판 */
  ul.board { /* 게시판 박스 */
    list-style: none;
  }
  ul.board > li.row { /* 게시판 행 박스 */
    display: flex;
    justify-content: space-between;
    margin-bottom: 1.5rem;
    max-height: 143px;
    overflow: hidden;
    cursor: pointer;
  }
  ul.board > li.row > .column { /* 게시판 열 박스 */
    display: flex;
    flex-direction: column;
  }
  ul.board > li.row > .column.img { /* 게시판 행 이미지 열 */
    width: 153px;
    padding: 3px 5px;
    margin-right: 15px;
    justify-content: center;
    border-radius: 15px;
  }
  ul.board > li.row > .column.img > img { /* 게시판 행 이미지 */
    max-height: 140px;
    max-width: 100%;
  }
  ul.board > li.row > .column.content { /* 게시판 행 제목, 부제목, 내용 열 */
    width: 100%;
  }
  ul.board > li.row > .column.content > .title { /* 게시판 행 제목 */
    font-size: 2rem;
    color: #343441;
    font-weight: bold;
    overflow: hidden;
  }
  ul.board > li.row > .column.content > .subtitle { /* 게시판 행 부제목 */
    font-size: 1.1rem;
    font-weight: bold;
    color: #6e6e6e;
    margin-bottom: 0.5rem;
    overflow: hidden;
  }
  ul.board > li.row > .column.content > .sample { /* 게시판 행 간단내용 */
    font-size: 0.9rem;
    color: #777777;
    overflow: hidden;
    max-height: 3.8rem;
  }
  ul.board > li.row > .column.register { /* 게시판 행 등록정보 열 */
    text-align: right;
    flex-grow: 1;
    color: #2da38e;
    width: 100px;
  }
  ul.board > li.row > .column.register > .date { /* 게시판 행 등록정보 날짜 */
    font-size: 1rem;
    font-weight: bold;
  }
  ul.boaard > li.row > .column.register > .time { /** 게시판 행 등록정보 시간 */
    font-size: 0.9rem;
  }
  /* 게시판 끝 */

  /* 공통사항 */
  button { /* 기본 버튼 */
    font-size: 1rem;
    text-transform: uppercase;
    color: #2da38e;
    border: 1px solid #2da38e;
    border-radius: 5px;
    padding: 10px;
    transition: 0.4s;
    background-color: #ffffff;
  }
  button:hover, button.on {
    background-color: #2da38e;
    color: #ffffff;
  }
  /* 공통사항 끝 */

  </style>
</head>
<body>

  <!-- 왼쪽메뉴 -->
  <nav>
    <!-- 프로필사진 -->
    <a id="profile_img" class="profile"><img src="./include/images/profile.png" /></a>
    <!-- 프로필사진 끝 -->

    <ul id="left_menu" class="menu">
      <li data-index="0"><a href="javascript:void(0)" class="on">about</a></li>
      <li data-index="1"><a href="javascript:void(0)" class="">music</a></li>
      <li data-index="2"><a href="javascript:void(0)" class="">video</a></li>
      <li data-index="3"><a href="javascript:void(0)" class="">study</a></li>
      <li data-index="4"><a href="javascript:void(0)" class="">work</a></li>
    </ul>

    <p id="copyright">
      Copyright (c) Rseom. All Right Reserved.
    </p>
  </nav>
  <!-- 왼쪽메뉴 끝 -->

  <!-- 메인 -->
  <!-- // class
  필수: main
  선택: v_top, v_middle, v_bottom (콘텐츠 위치)
      // -->
  <div class="main v_middle">
    <div class="in">
      <div class="title">
        <p class="title_txt">Hello <span>World</span></p>
      </div>
      <div class="description">
        내용을 입력하는 공간입니다.
      </div>
    </div>
  </div>

  <div class="main v_top">
    <div class="in">
      <div class="title">
        <p class="title_txt">Music <span>By. Jerzy</span></p>
        <div class="title_btn">
          <button>read more</button>
        </div>
      </div>
      <div class="description">
        <ul class="board basic">
          <li class="row">
            <div class="column content">
              <div class="title">제목을 입력해주세요.</div>
              <div class="subtitle">부제목을 입력해주세요.</div>
              <div class="sample">내용을 입력해주세요.</div>
            </div>
            <div class="column register">
              <div class="date">2018.11.11</div>
              <div class="time">PM 02:05</div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="main v_top">
    <div class="in">
      <div class="title">
        <p class="title_txt">Video <span>By. Rseom</span></p>
        <div class="title_btn">
          <button>read more</button>
        </div>
      </div>
      <div class="description">
        <ul class="board video">
          <li class="row">
            <div class="column img">
              <img src="./include/images/profile.png" />
            </div>
            <div class="column content">
              <div class="title">제목을 입력해주세요.</div>
              <div class="subtitle">부제목을 입력해주세요.</div>
              <div class="sample">내용을 입력해주세요.</div>
            </div>
            <div class="column register">
              <div class="date">2018.11.11</div>
              <div class="time">PM 02:05</div>
            </div>
          </li>
          <li class="row">
            <div class="column img">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSlG9S_9lOePx4bUerqTrUgZIufKDI5Afm8gvKJwzLshBigzg6EdA&s" />
            </div>
            <div class="column content">
              <div class="title">제목을 입력해주세요.</div>
              <div class="subtitle">부제목을 입력해주세요.</div>
              <div class="sample">내용을 입력해주세요.</div>
            </div>
            <div class="column register">
              <div class="date">2018.11.11</div>
              <div class="time">PM 02:05</div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="main v_top">
    <div class="in">
      <div class="title">
        <p class="title_txt">Study <span>By. 김슿슿</span></p>
      </div>
      <div class="description">
        내용을 입력하는 공간입니다.
      </div>
    </div>
  </div>

  <div class="main v_top">
    <div class="in">
      <div class="title">
        <p class="title_txt">Work <span>By. 김대리</span></p>
      </div>
      <div class="description">
        내용을 입력하는 공간입니다.
      </div>
    </div>
  </div>
  <!-- 메인 끝 -->

  <!-- 스크립트 -->
  <script>
    $(document).ready(function() {
      // 메뉴버튼 클릭
      $('#left_menu > li').on('click', function() {
        var offset = $('body > .main').eq($(this).data('index')).offset();
        $('html').stop().animate({
          'scrollTop': offset.top
        }, 700, 'easeInOutCirc');
      });
      // 메뉴버튼 클릭 끝
    });

    // 스크롤 이동
    $(window).scroll(function() {
      var mainIndex = 0;
      var scrollValue = $(document).scrollTop();
      $('#left_menu > li > a').removeClass('on');
      $('body > .main').each(function(i) {
        var offset = $(this).offset();
        if(offset.top<=scrollValue && (offset.top + $(this).outerHeight()>scrollValue)) {
          $('#left_menu > li > a').eq(mainIndex).addClass('on');
        }
        mainIndex++;
      });
    });
    // 스크롤 이동 끝
  </script>
  <!-- 스크립트 끝 -->
</body>
</html>
