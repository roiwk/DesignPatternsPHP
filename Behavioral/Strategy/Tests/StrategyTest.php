<?php

namespace Behavioral\Strategy\Tests;

use Behavioral\Strategy\Context;
use Behavioral\Strategy\DateComparator;
use Behavioral\Strategy\IdComparator;
use PHPUnit\Framework\TestCase;

class StrategyTest extends TestCase
{

    public function provideIntegers()
    {
        return [
            [
                [['id' => 2], ['id' => 1], ['id' => 3]],
                ['id' => 1],
            ],
            [
                [['id' => 3], ['id' => 2], ['id' => 1]],
                ['id' => 1],
            ],
        ];
    }

    public function provideDates()
    {
        return [
            [
                [['date' => '2018-03-03'], ['date' => '2020-03-02'], ['date' => '2017-03-01']],
                ['date' => '2017-03-01'],
            ],
            [
                [['date' => '2018-02-03'], ['date' => '2017-02-01'], ['date' => '2020-02-02']],
                ['date' => '2017-02-01'],
            ],
        ];
    }

    /**
     * @dataProvider provideIntegers
     *
     * @param array $collection provideIntegers[0][0], provideIntegers[1][0]
     * @param array $expected   provideIntegers[0][1], provideIntegers[1][1]
     */
    public function testIdComparator($collection, $expected)
    {
        $obj = new Context(new IdComparator());
        $elements = $obj->executeStrategy($collection);

        $firstElement = array_shift($elements);
        $this->assertSame($expected, $firstElement);
    }

    /**
     * @dataProvider provideDates
     *
     * @param array $collection
     * @param array $expected
     */
    public function testDateComparator($collection, $expected)
    {
        $obj = new Context(new DateComparator());
        $elements = $obj->executeStrategy($collection);

        $firstElement = array_shift($elements);
        $this->assertSame($expected, $firstElement);
    }
}