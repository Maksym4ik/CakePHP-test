<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $users
 */
?>

<div class="container-fluid px-3 mt-3">
    <div class="d-flex justify-content-between align-items-center">
        <h3>User table</h3>
            <ul class="pagination pagination-sm">
                <?php
                if( $this->Paginator->numbers()) {
                    echo $this->Paginator->prev("<<");
                    echo $this->Paginator->next(">>");
                }
                ?>
            </ul>
        <a class="btn btn-outline-success" href="<?= $this->Url->build(['controller' => 'users', 'action' => 'add']) ?>">Add</a>
    </div>

    <?=$this->element('table-header')?>
    <div class="content py-0 px-3">
        <?php foreach ($users as $key => $user): ?>
            <div class="row d-flex mb-3 mb-sm-0" style="border-bottom: 1px solid #a3a3a3;">
                <div class="d-flex justify-content-center align-items-center col-md-1 col-sm-1 col-12">
                    <div><?= $user->id ?></div>
                </div>
                <div class="d-flex justify-content-center align-items-center col-md-3 col-sm-3 col-12 ">
                    <a href="<?= $this->Url->build(['controller' => 'users', 'action' => 'View', $user->id]) ?>"
                       type="button"><?= $user->firstName . ' ' . $user->lastName?></a>
                </div>
                <div class="d-flex justify-content-center align-items-center col-12 col-md-2 col-sm-2 ">
                    <div><?= $user->username ?></div>
                </div>
                <div class="d-flex justify-content-center align-items-center col-12 col-md-2 col-sm-2 ">
                    <div><?= $user->password ?></div>
                </div>
                <div class="d-flex justify-content-center align-items-center col-5 col-md-1 col-sm-1 ">
                    <div class="<?= $user->active ? 'Active' : 'Offline' ?>"></div>
                </div>
                <div class="d-flex justify-content-center align-items-center col-7 col-md-3 col-sm-3 ">

                        <a href="<?= $this->Url->build(['controller' => 'users', 'action' => 'Edit', $user->id]) ?>"
                           type="button" class="btn btn-sm btn-light">edit</a>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $user->id],
                            ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'btn btn-sm btn-outline-warning side-nav-item']
                        ) ?>

                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
