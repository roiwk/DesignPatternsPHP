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

    private function getMockPersons(): array
    {
        return [
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
        $persons = $this->getMockPersons();
        $adultFilter = new AdultFilter();
        $singleFilter = new SingleFilter();
        $femaleFilter = new FemaleFilter();
        $AndFilter = new AndFilter($adultFilter, $singleFilter, $femaleFilter);

        $this->assertSame('c', $AndFilter->filter($persons)[0]->getName());
    }

    public function testFilterMinorSingleMale()
    {
        $persons = $this->getMockPersons();
        $minorFilter = new MinorFilter();
        $singleFilter = new SingleFilter();
        $maleFilter = new MaleFilter();
        $AndFilter = new AndFilter($minorFilter, $singleFilter, $maleFilter);

        $this->assertSame('f', $AndFilter->filter($persons)[0]->getName());
    }

}