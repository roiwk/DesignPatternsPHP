<?php

namespace Structural\Filter\Tests;

use Structural\Filter\Person;
use Structural\Filter\MaleFilter;
use Structural\Filter\FeMaleFilter;
use Structural\Filter\SingleFilter;
use Structural\Filter\MarriedFilter;
use Structural\Filter\AdultFilter;
use Structural\Filter\MinorFilter;
use Structural\Filter\AndFilter;
use Structural\Filter\OrFilter;
use PHPUnit\Framework\TestCase;

class CompositeTest extends TestCase
{
    protected $persons;

    protected function setUp(): void
    {
        $this->persons = [
            new Person('a', Person::MALE_STR, Person::MARRIED_STR, Person::ADULT_STR),
            new Person('b', Person::FEMALE_STR, Person::SINGLE_STR, Person::MINOR_STR),
            new Person('c', Person::FEMALE_STR, Person::SINGLE_STR, Person::ADULT_STR),
            new Person('d', Person::FEMALE_STR, Person::MARRIED_STR, Person::ADULT_STR),
            new Person('e', Person::MALE_STR, Person::SINGLE_STR, Person::ADULT_STR),
            new Person('f', Person::MALE_STR, Person::SINGLE_STR, Person::MINOR_STR),
        ];
    }

    public function testFilterAdultSingleFemale()
    {
        $adultFilter = new AdultFilter();
        $singleFilter = new SingleFilter();
        $femaleFilter = new FemaleFilter();
        $AndFilter = new AndFilter($adultFilter, $singleFilter, $femaleFilter);
        $result = $AndFilter->filter($this->persons);

        $this->assertEquals(new Person('c', Person::FEMALE_STR, Person::SINGLE_STR, Person::ADULT_STR), array_pop($result));
        $this->assertTrue(empty($result));
    }

    public function testFilterMinorSingleMale()
    {
        $minorFilter = new MinorFilter();
        $singleFilter = new SingleFilter();
        $maleFilter = new MaleFilter();
        $AndFilter = new AndFilter($minorFilter, $singleFilter, $maleFilter);
        $result = $AndFilter->filter($this->persons);

        $this->assertEquals(new Person('f', Person::MALE_STR, Person::SINGLE_STR, Person::MINOR_STR), array_pop($result));
        $this->assertTrue(empty($result));
    }

    public function testMinorOrFemale()
    {
        $minorFilter = new MinorFilter();
        $femaleFilter = new FemaleFilter();
        $OrFilter = new OrFilter($minorFilter, $femaleFilter);
        $result = $OrFilter->filter($this->persons);
        array_multisort($result);

        $assert = [
            new Person('b', Person::FEMALE_STR, Person::SINGLE_STR, Person::MINOR_STR),
            new Person('c', Person::FEMALE_STR, Person::SINGLE_STR, Person::ADULT_STR),
            new Person('d', Person::FEMALE_STR, Person::MARRIED_STR, Person::ADULT_STR),
            new Person('f', Person::MALE_STR, Person::SINGLE_STR, Person::MINOR_STR),
        ];
        array_multisort($assert);

        $this->assertEquals($assert, $result);
    }

}