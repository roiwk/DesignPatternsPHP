<?php

namespace Structural\Composite;


class Input implements RenderableInterface
{
    public function render(): string
    {
        return '<input type="text" />';
    }

}