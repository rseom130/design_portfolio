<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> -->
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1"/>
  <title></title>
  <link rel="stylesheet" href="./include/css/style.css">
  <link rel="stylesheet" href="./include/css/board.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
</head>
<body>

  <!-- 왼쪽메뉴 -->
  <nav>
    <!-- 프로필사진 -->
    <a id="profile_img" class="profile"><img src="./include/images/profile.png" /></a>
    <!-- 프로필사진 끝 -->

    <ul id="left_menu" class="menu">
      <li><a href="/" class="on">about</a></li>
      <li><a href="/music.php" class="">music</a></li>
      <li><a href="/video.php" class="">video</a></li>
      <li><a href="/study.php" class="">study</a></li>
      <li><a href="/work.php" class="">work</a></li>
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
  <!-- 메인 끝 -->

  <!-- 스크립트 -->
  <script>
  </script>
  <!-- 스크립트 끝 -->
</body>
</html>
