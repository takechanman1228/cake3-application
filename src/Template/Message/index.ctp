<body id="send">

  <header id="header">
    <div class="left">
      <a href="/detail/3">戻</a>
    </div>
    <h2>メッセージ送信</h2>
  </header>

  <main id="main">

    <section class="sendInfo">

      <div class="sendInfoBox cf">
        <div class="portrait"></div>
        <div class="info">
          <h2><span class="name"><?= h($player->name) ?></span>を<br>応援する！</h2>
          <p>
            君の応援をビジョンで<br>
            届けちゃおう
          </p>
        </div>


      </div><!--sendInfoBox-->




      <div class="messageForm">
        <form class="" action="index.html" method="post">
          <textarea name="name" rows="8" cols="20"></textarea>
          <input class="sendBtn" type="submit" name="name" value="送信">
        </form>
      </div>

    </section><!--sendInfo-->


  </main>

</body>

