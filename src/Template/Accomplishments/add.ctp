<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Accomplishment $accomplishment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Accomplishments'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="accomplishments form large-9 medium-8 columns content">
    <?= $this->Form->create($accomplishment) ?>
    <fieldset>
        <legend><?= __('Add Accomplishment') ?></legend><?= $this->Flash->render() ?>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('value');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
