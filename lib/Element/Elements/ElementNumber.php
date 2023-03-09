<?php

declare(strict_types=1);

namespace lib\Element\Elements;

use lib\Element\AbstractElement;

class ElementNumber extends AbstractElement
{
    public function getHtml(): string
    {
        $class = $this->getClass() . ' input' ?? "";
        $id = $this->getId() ?? "";
        $value = $this->getValue();
        $attributes = $this->getAttributes();

        return '<input type="number" class="' . $class . '" name="' . $id . '" id="' . $id . '" value="' . $value . '" ' . $attributes . '>';
    }
}
