<?php $id = $player->id; ?>

<body id="detail">

  <header id="header">
    <div class="left">
    <a href="index.html">戻る</a>
    </div>
    <h2><?= h($player->name) ?></h2>
  </header>

  <main id="main">

    <section class="mainInfo">
     <div class="portrait" style="background-image:url(<?= $this->Url->build('/',true) ?>webroot/img/player/<?php echo $id; ?>/2.jpg)"></div>
     <h2 class="name"><?= h($player->name) ?></h2>
     <p class="basic">
        出身：和歌山<br>
        高校：横浜高校<br>
        似てる有名人： 今野浩喜
      </p>
      <a class="sendBtn" href="message/<?= h($player->id) ?>">
        応援する
      </a>
    </section>

    <section class="tab">
      <ul class="tabBtns cf">
        <li id="scoreBtn">SCORE</li>
        <li id ="storyBtn" class="active">STORY</li>
        <li id="goodsBtn">GOODS</li>
      </ul>

      <div class="tabContent">
        <section id="scoreContent">
          <?= $this->Html->image('chart.jpg', ['width'=>'100%','alt' => 'CakePHP']); ?>

          ・年俸ランキング
          年俸：1億　→　プロ野球年俸ランキングで2016年61位
          http://www.nikkansports.com/baseball/news/1578404.html

          ・直近3年の成績
          http://baseball.yahoo.co.jp/npb/player/1000002/
        </section>

        <section id="storyContent" class="active">
          <h2>初安打はホームラン</h2>
          小学2年生から野球を始め、中学卒業後は横浜高校へ進学。
          1年生の春から4番に抜擢され、「ハマのゴジラ」として活躍した。
          その結果ドラフト会議で、DeNAベイスターズから1位使命を受け、入団。高卒新人にもかかわらず、早くも1軍に抜擢された。2010年の出来事である。
          一軍としての初安打はホームラン。華々しいデビューに、スターの宿命がさらに覆いかぶさってきた。“普通ではない”活躍が求められる日々。筒香はこれから、なかなか結果が出な日々に直面することになる。

          <h2>抜けられないスランプ</h2>
          2012年では打率が規定打席到達者では日本最下位を記録してしまった上、2013年では開幕三連戦で9打数無安打を喫し、登録抹消されてしまう。その後一軍復帰したが、不調は続き再度二軍に降格すると、その後はシーズン終了まで昇格することはなかった。
          筒香への世間の目は、より厳しいものとなっていった。

          <h2>日本を背負う選手への成長</h2>
          しかし、2014年から大器として頭角を現し始める。開幕から高い打率をマークし、最終的には両リーグトップの得点圏打率をマークしたのだ。
          その圧倒的な勝負強さを買われて、2015年にはベイスターズのキャプテンに就任。また、侍ジャパンの日本代表へ選抜されるなどし、大きな結果を残した。
          今年度は日本プロ野球記録初の本塁打記録も達成するなど、現在は日本のプロ野球界を塗り替える程の活躍をしている。
        </section>
        <section id="goodsContent">

          <figure>
            <?= $this->Html->image('goods.jpg', ['width'=>'100%','alt' => 'CakePHP']); ?>
            <figcaption>NEW ERA×25筒香選手コラボキャップ(AGGRESSIVO)</figcaption>
          </figure>

          「NEW ERA×選手」の夢のコラボキャップの筒香嘉智選手第二弾が登場!!

筒香選手のデザインは、前回のデザインのお気に入りポイントはそのまま残しつつ、落ち着きを感じるネイビーのボディに加え、アンダーバイザーに刺繍された「AGRESIVO」が、頼もしい打席での筒香選手の姿そのものです。
また、未来の「筒香嘉智」を目指すキッズたちにむけて、オトナサイズ・キッズサイズの2パターンをラインアップ!!

スタジアムでの観戦に、タウンユースにと、さまざまなシーンで使いたくなる逸品です!


        </section>
      </div>
    </section>

    <section class="mainInfo">
      <a class="sendBtn" href="message/<?= h($player->id) ?>">
        応援する
      </a>
    </section>

  </main>

</body>

