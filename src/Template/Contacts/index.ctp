<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contact[]|\Cake\Collection\CollectionInterface $contacts
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Contact'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="contacts index large-9 medium-8 columns content">
    <h3><?= __('Contacts') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead><?= $this->Flash->render() ?>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('seo_title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('seo_description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('seo_keywords') ?></th>
                <th scope="col"><?= $this->Paginator->sort('url') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contacts as $contact): ?>
            <tr>
                <td><?= $this->Number->format($contact->id) ?></td>
                <td><?= h($contact->name) ?></td>
                <td><?= h($contact->seo_title) ?></td>
                <td><?= h($contact->seo_description) ?></td>
                <td><?= h($contact->seo_keywords) ?></td>
                <td><?= h($contact->url) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $contact->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contact->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contact->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contact->id)]) ?>
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
