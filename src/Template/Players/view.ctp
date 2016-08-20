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
<body id="detail">

  <header id="header">
    <div class="left">
    <a href="index.html">戻る</a>
    </div>
    <h2>選手名</h2>
  </header>

  <main id="main">
    <!--あとでけしてください-->
   <?= h($player->name) ?>
   <?= $this->Number->format($player->id) ?>
   <?= $this->Number->format($player->ouen) ?>
   <!--ここまであとでけしてください -->
   <section class="mainInfo">
     <div class="portrait"></div>
     <h2 class="name">選手名</h2>
     <p class="basic">
        出身：和歌山<br>
        高校：横浜高校<br>
        似てる有名人： 今野浩喜
      </p>
      <a class="sendBtn" href="send.html">
        応援する
      </a>
    </section>

    <section class="tab">
      <ul class="tabBtns cf">
        <li id="doramaBtn">SCORE</li>
        <li id ="nowBtn" class="active">STORY</li>
        <li id="scoreBtn">GOODS</li>
      </ul>

      <div class="tabContent">
        <p>
          テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
        </p>
      </div>
    </section>

    <section class="mainInfo">
      <a class="sendBtn" href="send.html">
        応援する
      </a>
    </section>

  </main>

</body>
</html>
