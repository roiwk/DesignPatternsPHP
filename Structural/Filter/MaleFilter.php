<?php

namespace Structural\Filter;

class MaleFilter implements FilterInterface
{
    public function filter(array $persons): array
    {
        $malePersons = [];
        foreach ($persons as $person) {
            if($person->getGender() === Person::MALE_STR) {
                array_push($malePersons, $person);
            }
        }
        return $malePersons;
    }
}