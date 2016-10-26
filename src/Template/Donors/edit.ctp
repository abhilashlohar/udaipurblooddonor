<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $donor->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $donor->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Donors'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="donors form large-9 medium-8 columns content">
    <?= $this->Form->create($donor) ?>
    <fieldset>
        <legend><?= __('Edit Donor') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('gender');
            echo $this->Form->input('age');
            echo $this->Form->input('weight');
            echo $this->Form->input('email');
            echo $this->Form->input('mobile');
            echo $this->Form->input('landmark');
            echo $this->Form->input('blood_group');
            echo $this->Form->input('previous_blood_donation_date');
            echo $this->Form->input('preferred_remider');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
