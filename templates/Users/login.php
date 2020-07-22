<div class="container my-0 mx-auto">
    <h2>LOGIN</h2>
        <div class="form-user">
            <?= $this->Form->create() ?>
            <fieldset>
            <?= $this->Form->control('username') ?>
            <?= $this->Form->control('password') ?>
            <?= $this->Form->submit() ?>
                </fieldset>
            <?= $this->Form->end() ?>
            <a href="<?= $this->Url->build(['controller' => 'users', 'action' => 'forgotpass']) ?>"
               type="button" class="submit">forget password</a>
        </div>
</div>
