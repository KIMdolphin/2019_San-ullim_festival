<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>제주과학고등학교 공성전</title>
    <link href="css/main.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  </head>
  <body>
    <video id="video" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
      <source src="background/fire9.mp4">
    </video>
    <center>
      <br>
      <ck>제주과학고등학교 공성전</ck><br>
      <ul id="navi">
      <li><a href="#" id="loginLabel">click to login</a>
        <div class="loginbox">
          <form action="logincheck.php" method="post">
            <p>
              <label for="logid">Team Key&nbsp;</label>
              <input type="text" name="teamkey" id="logid" />
            </p>
            <p>
              <input class="loginBtn" type="image" src="img/loginBtn.png" />
            </p>
          </form>
        </div>
      </li>
    </ul>
    <div id="content">
      <in>Lorem ipsum dolor sit amet, consectetur adipisicing elit, <br> sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, <br> quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <br> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</in>
    </div>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script type="text/javascript">
       (function($){
        $('.loginbox').slideUp();
        $("#loginLabel").click(function(e) {
         if($('.loginbox').css('display')== 'none'){
             $('.loginbox').slideDown();
         }
         else {
              $('.loginbox').slideUp();
         }
        });
       })(jQuery);
      </script>
    </body>
</html>
