<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Download $download
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $download->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $download->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Downloads'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="downloads form large-9 medium-8 columns content">
    <?= $this->Form->create($download) ?>
    <fieldset>
        <legend><?= __('Edit Download') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('pdf_link');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
