<div class="container my-0 mx-auto">
    <h3>Forget password</h3>
    <div class="form-user">
        <?= $this->Form->create() ?>
        <fieldset>
            <?= $this->Form->control('username') ?>
            <?= $this->Form->submit() ?>
            <a href="<?= $this->Url->build(['controller' => 'users', 'action' => 'login']) ?>"type="button" class="submit">back to login</a>
        </fieldset>
    </div>
</div>
