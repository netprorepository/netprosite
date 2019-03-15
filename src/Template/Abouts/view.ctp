<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\About $about
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit About'), ['action' => 'edit', $about->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete About'), ['action' => 'delete', $about->id], ['confirm' => __('Are you sure you want to delete # {0}?', $about->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Abouts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New About'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="abouts view large-9 medium-8 columns content">
    <h3><?= h($about->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($about->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Imageurl') ?></th>
            <td><?= h($about->imageurl) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($about->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dateadded') ?></th>
            <td><?= h($about->dateadded) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($about->description)); ?>
    </div>
</div>
