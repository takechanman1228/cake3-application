<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/base.css">
  <link rel="stylesheet" href="css/common.css">
</head>
<body id="send">

  <header id="header">
    <div class="left">
    <a href="detail.html">戻る</a>
    </div>
    <h2>メッセージ送信</h2>
  </header>

  <main id="main">

    <section class="sendInfo">

      <div class="sendInfoBox cf">
        <div class="portrait"></div>
        <div class="info">
          <h2><span class="name">選手</span>を<br>応援する！</h2>
          <p> 
            君の応援をビジョンで<br>
            届けちゃおう
          </p>
        </div>


      </div><!--sendInfoBox-->




      <!--<div class="messageForm">
        <form class="" action="index.html" method="post">
          <textarea name="name" rows="8" cols="20"></textarea>
          <input class="sendBtn" type="submit" name="name" value="送信">
        </form>
      </div>-->

      <form method="post" accept-charset="utf-8" action="/studev-takeda/message/1">
        <div style="display:none;"><input type="hidden" name="_method" value="POST"/></div>
        <div class="input textarea">
        <textarea name="comment" id="comment" rows="5"></textarea></div>
        <button type="submit" class="sendBtn" name="name">提出</button>
      </form>
    </section><!--sendInfo-->
  </main>

</body>
</html>
