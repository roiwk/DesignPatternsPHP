<?php

namespace Structural\Filter;

class MarriedFilter implements FilterInterface
{
    public function filter(array $persons): array
    {
        $marriedPersons = [];
        foreach ($persons as $person) {
            if($person->getMaritalStatus() === Person::MARRIED_STR) {
                array_push($marriedPersons, $person);
            }
        }
        return $marriedPersons;
    }
}