<?php

namespace Structural\Filter;

class MinorFilter implements FilterInterface
{
    public function filter(array $persons): array
    {
        $minorPersons = [];
        foreach ($persons as $person) {
            if($person->getAdultStatus() === Person::MINOR_STR) {
                array_push($minorPersons, $person);
            }
        }
        return $minorPersons;
    }
}