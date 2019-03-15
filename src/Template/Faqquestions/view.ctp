<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Faqquestion $faqquestion
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Faqquestion'), ['action' => 'edit', $faqquestion->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Faqquestion'), ['action' => 'delete', $faqquestion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $faqquestion->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Faqquestions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Faqquestion'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="faqquestions view large-9 medium-8 columns content">
    <h3><?= h($faqquestion->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($faqquestion->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($faqquestion->status) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Question') ?></h4>
        <?= $this->Text->autoParagraph(h($faqquestion->question)); ?>
    </div>
    <div class="row">
        <h4><?= __('Answer') ?></h4>
        <?= $this->Text->autoParagraph(h($faqquestion->answer)); ?>
    </div>
</div>
