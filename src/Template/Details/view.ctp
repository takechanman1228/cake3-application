<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Detail'), ['action' => 'edit', $detail->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Detail'), ['action' => 'delete', $detail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $detail->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Details'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Detail'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Players'), ['controller' => 'Players', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Player'), ['controller' => 'Players', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="details view large-9 medium-8 columns content">
    <h3><?= h($detail->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Player') ?></th>
            <td><?= $detail->has('player') ? $this->Html->link($detail->player->name, ['controller' => 'Players', 'action' => 'view', $detail->player->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($detail->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($detail->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($detail->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Kiso Jouhou') ?></h4>
        <?= $this->Text->autoParagraph(h($detail->kiso_jouhou)); ?>
    </div>
    <div class="row">
        <h4><?= __('Score') ?></h4>
        <?= $this->Text->autoParagraph(h($detail->score)); ?>
    </div>
    <div class="row">
        <h4><?= __('Now') ?></h4>
        <?= $this->Text->autoParagraph(h($detail->now)); ?>
    </div>
</div>
