<?php

namespace Structural\Composite\Tests;

use Structural\Composite\Form;
use Structural\Composite\Button;
use Structural\Composite\Input;
use PHPUnit\Framework\TestCase;

class CompositeTest extends TestCase
{
    public function testRender()
    {
        $form = new Form();
        $form->addElement(new Input());
        $form->addElement(new Button('test'));
        $this->assertSame('<form><input type="text" /><button>test</button></form>', $form->render());
    }

}