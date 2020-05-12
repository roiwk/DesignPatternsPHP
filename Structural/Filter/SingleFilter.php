<?php

namespace Structural\Filter;

class SingleFilter implements FilterInterface
{
    public function filter(array $persons): array
    {
        $singlePersons = [];
        foreach ($persons as $person) {
            if($person->getMaritalStatus() === Person::SINGLE_STR) {
                array_push($singlePersons, $person);
            }
        }
        return $singlePersons;
    }
}