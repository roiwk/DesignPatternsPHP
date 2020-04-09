<?php

namespace Structural\Composite;


class Button implements RenderableInterface
{
    /**
     * @var string
     */
    private $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function render(): string
    {
        return '<button>' . $this->text . '</button>';
    }

}