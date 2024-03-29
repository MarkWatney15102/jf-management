<?php

namespace lib\Message\Types;

use lib\Message\AbstractMessage;

class Warning extends AbstractMessage
{
    public function getHtml(): string
    {
        return <<<HTML
            <div class="alert notification is-warning" role="alert">
                <b>{$this->getTitle()}</b>
                <br>
                {$this->getMessage()}
            </div>
        HTML;
    }
}