<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Testimonial $testimonial
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Testimonial'), ['action' => 'edit', $testimonial->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Testimonial'), ['action' => 'delete', $testimonial->id], ['confirm' => __('Are you sure you want to delete # {0}?', $testimonial->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Testimonials'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Testimonial'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="testimonials view large-9 medium-8 columns content">
    <h3><?= h($testimonial->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Test Name') ?></th>
            <td><?= h($testimonial->test_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Person Type') ?></th>
            <td><?= h($testimonial->person_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($testimonial->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Seo Title') ?></th>
            <td><?= h($testimonial->seo_title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Seo Keywords') ?></th>
            <td><?= h($testimonial->seo_keywords) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Seo Description') ?></th>
            <td><?= h($testimonial->seo_description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Url') ?></th>
            <td><?= h($testimonial->url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($testimonial->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($testimonial->status) ?></td>
        </tr>
    </table>
</div>
