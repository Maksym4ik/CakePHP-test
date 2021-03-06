<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $user
 */
?>
<div class="p-4 row container my-0 mx-auto">
    <aside class="col-12 col-sm-12">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'btn btn-outline-info side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset class="form-user">
                <legend><?= __('Add User') ?></legend>
                <?php
                echo $this->Form->control('firstName');
                echo $this->Form->control('lastName');
                echo $this->Form->label('username (email)');
                echo $this->Form->input('username');
                echo $this->Form->control('password');
                echo $this->Form->label('active');
                echo $this->Form->checkbox('active');
                echo $this->Form->label('admin');
                echo $this->Form->checkbox('admin');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
