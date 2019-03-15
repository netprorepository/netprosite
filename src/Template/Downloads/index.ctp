<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Download[]|\Cake\Collection\CollectionInterface $downloads
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Download'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="downloads index large-9 medium-8 columns content">
    <h3><?= __('Downloads') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pdf_link') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($downloads as $download): ?>
            <tr>
                <td><?= $this->Number->format($download->id) ?></td>
                <td><?= h($download->name) ?></td>
                <td><?= h($download->pdf_link) ?></td>
                <td><?= $this->Number->format($download->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $download->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $download->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $download->id], ['confirm' => __('Are you sure you want to delete # {0}?', $download->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
