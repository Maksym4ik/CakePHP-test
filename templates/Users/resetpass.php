<div class="container my-0 mx-auto">
    <h3>Reset password</h3>
    <div class="form-user">
        <?= $this->Form->create() ?>
        <fieldset>
            <?= $this->Form->label('new password') ?>
            <?= $this->Form->input('password') ?>
            <?= $this->Form->submit() ?>
            <a href="<?= $this->Url->build(['controller' => 'users', 'action' => 'login']) ?>"type="button" class="submit">back to login</a>
        </fieldset>
    </div>
</div>
