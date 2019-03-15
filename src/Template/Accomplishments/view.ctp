<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Accomplishment $accomplishment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Accomplishment'), ['action' => 'edit', $accomplishment->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Accomplishment'), ['action' => 'delete', $accomplishment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $accomplishment->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Accomplishments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Accomplishment'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="accomplishments view large-9 medium-8 columns content">
    <h3><?= h($accomplishment->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($accomplishment->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($accomplishment->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Value') ?></th>
            <td><?= $this->Number->format($accomplishment->value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($accomplishment->status) ?></td>
        </tr>
    </table>
</div>
