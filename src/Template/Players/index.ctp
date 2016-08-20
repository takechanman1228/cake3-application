<body id="top">

  <header id="header">
    <h2>2回裏</h2>
  </header>

  <main id="main">

  <?php foreach ($players as $player) : ?>

    <a href="detail/<?= h($player->id); ?>">
      <section class="player cf" id="p<?= h($player->id); ?>">
        <div class="portrait">
          <p class="backnumber"><?= h($player->uniform); ?></p>
        </div>
        <div class="info">
          <h2 class="name"><?= h($player->name); ?></h2>
          <div class="role"><p><?= h($player->role); ?></p></div>
          <p class="comment"></p>
        </div>
        <div class="cheer like"><?= h($player->ouen); ?></div>
      </section>
    </a>
  <?php endforeach; ?>


  </main>

</body>

