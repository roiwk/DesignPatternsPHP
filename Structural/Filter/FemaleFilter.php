<?php

namespace Structural\Filter;

class FeMaleFilter implements FilterInterface
{
    public function filter(array $persons): array
    {
        $femalePersons = [];
        foreach ($persons as $person) {
            if($person->getGender() === Person::FEMALE_STR) {
                array_push($femalePersons, $person);
            }
        }
        return $femalePersons;
    }
}