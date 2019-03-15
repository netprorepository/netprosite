<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Socialmedia $socialmedia
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Socialmedia'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="socialmedia form large-9 medium-8 columns content">
    <?= $this->Form->create($socialmedia) ?>
    <fieldset>
        <legend><?= __('Add Socialmedia') ?></legend>
        <?php
            echo $this->Form->control('facebook');
            echo $this->Form->control('twitter');
            echo $this->Form->control('linkedin');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
