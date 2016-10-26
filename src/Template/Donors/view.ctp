<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Donor'), ['action' => 'edit', $donor->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Donor'), ['action' => 'delete', $donor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $donor->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Donors'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Donor'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="donors view large-9 medium-8 columns content">
    <h3><?= h($donor->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($donor->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gender') ?></th>
            <td><?= h($donor->gender) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($donor->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Landmark') ?></th>
            <td><?= h($donor->landmark) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Blood Group') ?></th>
            <td><?= h($donor->blood_group) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Preferred Remider') ?></th>
            <td><?= h($donor->preferred_remider) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($donor->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Age') ?></th>
            <td><?= $this->Number->format($donor->age) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Weight') ?></th>
            <td><?= $this->Number->format($donor->weight) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mobile') ?></th>
            <td><?= $this->Number->format($donor->mobile) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Previous Blood Donation Date') ?></th>
            <td><?= h($donor->previous_blood_donation_date) ?></td>
        </tr>
    </table>
</div>
