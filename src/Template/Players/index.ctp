<body id="top">

  <header id="header">
    <h2>2回裏</h2>
  </header>

  <main id="main">

  <?php foreach ($players as $player) : $id = $player->id; ?>

    <a href="detail/<?= h($player->id); ?>">
      <section class="player cf" id="p<?= h($player->id); ?>">
        <div class="portrait" style="background-image:url(<?= $this->Url->build('/') ?>img/player/<?php echo $id; ?>/1.png)">
          <p class="backnumber"><?= h($player->uniform); ?></p>
        </div>
        <div class="info">
          <h2 class="name"><?= h($player->name); ?></h2>
          <div class="role"><p><?= h($player->role); ?></p></div>
          <p class="comment"></p>
        </div>
        <div class="cheer like">
          <?= $this->Html->image('cheer.svg', ['width'=>20,'alt' => 'CakePHP']); ?><br>
          <span><?= h($player->ouen); ?></span>

        </div>
      </section>
    </a>
  <?php endforeach; ?>


  </main>

</body>

