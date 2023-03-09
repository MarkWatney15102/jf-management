<div class="columns">
    <div class="column is-4 is-offset-4">
        <div class="box">
            <h3 class="title is-3">Login</h3>
            <div class="box-body">
                <?= $this->form->open() ?>
                <div class="field">
                    <?= $this->form->getElement('username')->label() ?>
                    <?= $this->form->getElement('username')->getHtml() ?>
                </div>
                <div class="field">
                    <?= $this->form->getElement('password')->label() ?>
                    <?= $this->form->getElement('password')->getHtml() ?>
                </div>
                <br>
                <?= $this->form->getElement('login')->getHtml() ?>
                <?= $this->form->close() ?>
            </div>
        </div>
    </div>
</div>