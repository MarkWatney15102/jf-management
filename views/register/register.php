<div class="columns">
    <div class="column is-4 is-offset-4">
        <div class="box">
            <h3 class="title is-3">Benutzer erstellen</h3>
            <div class="box-body">
                <?= $this->form->open() ?>
                <div class="field">
                    <?= $this->form->getElement('username')->label() ?>
                    <?= $this->form->getElement('username')->getHtml() ?>
                </div>
                <div class="field">
                    <?= $this->form->getElement('email')->label() ?>
                    <?= $this->form->getElement('email')->getHtml() ?>
                </div>
                <div class="field">
                    <?= $this->form->getElement('password')->label() ?>
                    <?= $this->form->getElement('password')->getHtml() ?>
                </div>
                <div class="field">
                    <?= $this->form->getElement('password2')->label() ?>
                    <?= $this->form->getElement('password2')->getHtml() ?>
                </div>
                <br>
                <?= $this->form->getElement('login')->getHtml() ?>
                <a href="/login" class="button is-pulled-right">Login</a>
                <?= $this->form->close() ?>
            </div>
        </div>
    </div>
</div>