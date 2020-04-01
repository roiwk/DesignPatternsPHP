<?php

namespace Creational\Prototype\Tests;

use Creational\Prototype\ChineseBookPrototype;
use Creational\Prototype\EnglistBookPrototype;
use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase
{
    public function testCanGetBook()
    {
        $chineseBook = new ChineseBookPrototype();
        $englishBook = new EnglistBookPrototype();

        for ($i = 0; $i < 5; $i++) {
            $book = clone $chineseBook;
            $book->setTitle('中文书 No ' . $i);
            $this->assertInstanceOf(ChineseBookPrototype::class, $book);
        }

        for ($i = 0; $i < 5; $i++) {
            $book = clone $englishBook;
            $book->setTitle('Englist Book No ' . $i);
            $this->assertInstanceOf(EnglistBookPrototype::class, $book);
        }
    }

}