<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $user
 */
?>
<div class="p-4 row container my-0 mx-auto">
    <aside class="column col-12 col-sm-12">
        <div class="d-flex">
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'mr-1 btn btn-sm btn-outline-warning side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'mr-1 btn btn-sm btn-outline-danger side-nav-item']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'mr-1 btn btn-sm btn-outline-info side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'btn btn-sm btn-outline-secondary side-nav-item']) ?>
        </div>
    </aside>
    <div class=" col-1 col-sm-1"></div>
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3>ID-<?= h($user->id) ?></h3>
            <div class="d-flex" style="border-bottom: 2px solid #ff8940">
                <h5 class="mr-3">First name</h5>
                <span style="font-size:1.1em "><?=$user->firstName?></span>
            </div>
            <div class="d-flex" style="border-bottom: 2px solid #ff8940">
                <h5 class="mr-3">Last name</h5>
                <span style="font-size:1.1em "><?=$user->lastName?></span>
            </div>
            <div class="d-flex" style="border-bottom: 2px solid #ff8940">
                <h5 class="mr-3">Email</h5>
                <span style="font-size:1.1em "><?=$user->username?></span>
            </div>
            <div class="d-flex" style="border-bottom: 2px solid #ff8940">
                <h5 class="mr-3">Password</h5>
                <span style="font-size:1.1em "><?=$user->password?></span>
            </div>
            <div class="d-flex" style="border-bottom: 2px solid #ff8940">
                <h5 class="mr-3">Status</h5>
                <span style="font-size:1.1em "><?=$user->active ? 'active' : 'offline'?></span>
            </div>
        </div>
    </div>
</div>
