<?php

namespace Structural\Composite;


class Form implements RenderableInterface
{
    /**
     * @var array
     */
    private $elementsArr;

    public function render(): string
    {
        $formCode = '<form>';

        foreach ($this->elementsArr as $element) {
            $formCode .= $element->render();
        }

        $formCode .= '</form>';

        return $formCode;
    }

    public function addElement(RenderableInterface $element)
    {
        $this->elementsArr[] = $element;
    }
}