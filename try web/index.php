<?php
  session_start();
  //session_destroy();
  //載入db.php，就可以連資料庫
  require_once 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
  <!--套用助教給的bootstrap樣板-->
  <head>
    <meta charset="utf-8">
    <title>電影觀賞心得分享平台</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="https://bootswatch.com/cyborg/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="../bower_components/html5shiv/dist/html5shiv.js"></script>
    <script src="../bower_components/respond/dest/respond.min.js"></script>
    <![endif]-->
    <script>
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-23019901-1']);
    _gaq.push(['_setDomainName', "bootswatch.com"]);
    _gaq.push(['_setAllowLinker', true]);
    _gaq.push(['_trackPageview']);
    (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
    </script>
  </head>
  <body>


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
      <!--左上角的圖示(試過width用%，發現版面會跑掉)-->
      <a class="navbar-brand" href="home_data.html" target = "myframe"><img src="img\head_pic.png" style="width:80px"></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <!--上層功能列表-->
      <ul class="nav navbar-nav">
        <li class=""><a href="home_data.html" target="myframe">首頁 <span class="sr-only">(current)</span></a></li>
        <?php
        echo "<li class=''><a href='text.php?name=".""."' target='myframe'>電影總覽<span class='sr-only'></span></a></li>";
        ?>
        <li><a href="member.php" target="myframe">關於我們</a></li>
      </ul>
      <?php
      if($_SESSION['login_user_id']>0){
      echo"<ul class='nav navbar-nav navbar-right'>";
        echo"<li><a href='logout.php' target='myframe'>登出</a></li>";
      echo"</ul>";
      echo"<ul class='nav navbar-nav navbar-right'>";
        echo"<li><a href='update_password.php' target='myframe'>修改會員資料</a></li>";
      echo"</ul>";
      echo"<ul class='nav navbar-nav navbar-right' >";
        echo"<li><h5>{$_SESSION['login_account']}，您好！</li>";
      echo"</ul>";
      }else{
      echo "<ul class='nav navbar-nav navbar-right'>";
        echo"<li><a href='login.php' target='myframe'>登入</a></li>";
      echo"</ul>";
      echo"<ul class='nav navbar-nav navbar-right'>";
        echo"<li><a href='register.php' target='myframe'>註冊</a></li>";
      echo"</ul>";
      } 
      ?>
      <!---<ul class="nav navbar-nav navbar-right">
        <li><a href="login.php">登入</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="register.php">註冊</a></li>
      </ul>-->
      
    </div>
  </div>
</nav>
    <article>
        <iframe src="home_data.html" name="myframe" width="1300" height="800" scrolling="auto" style="border:0px solid black"></iframe>
    </article>

    <!--連結有上層功能列表的檔案-->
    
</body>
    <center><div id="footer">版權所有，抄襲必究</div></center>
  </body>
</html>