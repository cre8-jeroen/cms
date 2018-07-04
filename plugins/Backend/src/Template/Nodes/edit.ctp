<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $node
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $node->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $node->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Nodes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="nodes form large-9 medium-8 columns content">
    <?= $this->Form->create($node) ?>
    <fieldset>
        <legend><?= __('Edit Node') ?></legend>
        <fieldset>
            <legend>NL</legend>
            <?= $this->Form->control('_translations.nl.title'); ?>
            <?= $this->Form->control('_translations.nl.description'); ?>
        </fieldset>
        <fieldset>
            <legend>EN</legend>
            <?= $this->Form->control('_translations.en.title'); ?>
            <?= $this->Form->control('_translations.en.description'); ?>
        </fieldset>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
