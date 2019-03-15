<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Download $download
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Download'), ['action' => 'edit', $download->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Download'), ['action' => 'delete', $download->id], ['confirm' => __('Are you sure you want to delete # {0}?', $download->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Downloads'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Download'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="downloads view large-9 medium-8 columns content">
    <h3><?= h($download->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($download->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pdf Link') ?></th>
            <td><?= h($download->pdf_link) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($download->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($download->status) ?></td>
        </tr>
    </table>
</div>
