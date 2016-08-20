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
<body id="top">
  <header id="header">
    <h2>2回裏</h2>
  </header>

  <main id="main">

  <section class="currentGame">
    <p class="">二回 ウラ</p>
  </section>
<ul>
  <?php foreach ($players as $player) : ?>
    <li><?= h($player->name); ?></li>
    <!-- $player->nameのnameの部分をid,name,role,uniform,ouenなどにかえてください --> 
 <?php endforeach; ?>
</ul> 
 <a href="detail.html">

    <section class="player cf">
      <div class="portrait">
        <p class="backnumber">19</p>
      </div>
      <div class="info">
        <h2 class="name">田中太郎</h2>
        <div class="role"><p>ピッチャー</p></div>
      </div>
      <div class="cheer like">90</div>
    </section>

    <section class="player cf">
      <div class="portrait">
        <p class="backnumber">19</p>
      </div>
      <div class="info">
        <h2 class="name">田中太郎</h2>
        <div class="role"><p>ピッチャー</p></div>
      </div>
      <img src="img/thumb-up-sign.svg" width="25" alt="" class="like">
    </section>

    <section class="active player cf">
      <div class="portrait">
        <p class="backnumber">19</p>
      </div>
      <div class="info">
        <h2 class="name">田中太郎</h2>
        <div class="role"><p>ピッチャー</p></div>
        <p>今バッターボックスにいます！</p>
      </div>
      <img src="img/thumb-up-sign.svg" width="25" alt="" class="like">
    </section>

    <section class="player cf">
      <div class="portrait">
        <p class="backnumber">19</p>
      </div>
      <div class="info">
        <h2 class="name">田中太郎</h2>
        <div class="role"><p>ピッチャー</p></div>
      </div>
      <img src="img/thumb-up-sign.svg" width="25" alt="" class="like">
    </section>

    <section class="player cf">
      <div class="portrait">
        <p class="backnumber">19</p>
      </div>
      <div class="info">
        <h2 class="name">田中太郎</h2>
        <div class="role"><p>ピッチャー</p></div>
      </div>
      <img src="img/thumb-up-sign.svg" width="25" alt="" class="like">
    </section>

    <section class="player cf">
      <div class="portrait">
        <p class="backnumber">19</p>
      </div>
      <div class="info">
        <h2 class="name">田中太郎</h2>
        <div class="role"><p>ピッチャー</p></div>
      </div>
      <img src="img/thumb-up-sign.svg" width="25" alt="" class="like">
    </section>

    <section class="player cf">
      <div class="portrait">
        <p class="backnumber">19</p>
      </div>
      <div class="info">
        <h2 class="name">田中太郎</h2>
        <div class="role"><p>ピッチャー</p></div>
      </div>
      <img src="img/thumb-up-sign.svg" width="25" alt="" class="like">
    </section>

    <section class="player cf">
      <div class="portrait">
        <p class="backnumber">19</p>
      </div>
      <div class="info">
        <h2 class="name">田中太郎</h2>
        <div class="role"><p>ピッチャー</p></div>
      </div>
      <img src="img/thumb-up-sign.svg" width="25" alt="" class="like">
    </section>

    <section class="player cf">
      <div class="portrait">
        <p class="backnumber">19</p>
      </div>
      <div class="info">
        <h2 class="name">田中太郎</h2>
        <div class="role"><p>ピッチャー</p></div>
      </div>
      <img src="img/thumb-up-sign.svg" width="25" alt="" class="like">
    </section>

    <section class="player cf">
      <div class="portrait">
        <p class="backnumber">19</p>
      </div>
      <div class="info">
        <h2 class="name">田中太郎</h2>
        <div class="role"><p>ピッチャー</p></div>
      </div>
      <img src="img/thumb-up-sign.svg" width="25" alt="" class="like">
    </section>

  </a>




  </main>

</body>
</html>
