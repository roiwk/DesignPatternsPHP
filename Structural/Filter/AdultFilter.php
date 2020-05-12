<?php

namespace Structural\Filter;

class AdultFilter implements FilterInterface
{
    public function filter(array $persons): array
    {
        $adultPersons = [];
        foreach ($persons as $person) {
            if($person->getAdultStatus() === Person::ADULT_STR) {
                array_push($adultPersons, $person);
            }
        }
        return $adultPersons;
    }
}