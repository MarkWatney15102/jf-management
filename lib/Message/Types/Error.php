<?php

namespace lib\Message\Types;

use lib\Message\AbstractMessage;

class Error extends AbstractMessage
{
    public function getHtml(): string
    {
        return <<<HTML
            <div class="alert notification is-danger" role="alert">
                <b>{$this->getTitle()}</b>
                <br>
                {$this->getMessage()}
            </div>
        HTML;
    }
}