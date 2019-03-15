<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Faqquestion $faqquestion
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $faqquestion->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $faqquestion->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Faqquestions'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="faqquestions form large-9 medium-8 columns content">
    <?= $this->Form->create($faqquestion) ?>
    <fieldset>
        <legend><?= __('Edit Faqquestion') ?></legend>
        <?php
            echo $this->Form->control('question');
            echo $this->Form->control('answer');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
