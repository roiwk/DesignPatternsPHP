<?php

namespace Structural\Filter;

class Person
{
    private $name;
    private $gender;
    private $maritalStatus; //婚姻状态
    private $adultStatus;

    const MALE_STR = 'male';
    const FEMALE_STR = 'female';

    const SINGLE_STR = 'single';
    const MARRIED_STR = 'married';

    const ADULT_STR = 'adult';
    const MINOR_STR = 'minor';

    public function __construct(string $name, string $gender, string $maritalStatus, string $adultStatus)
    {
        $this->name = $name;
        $this->gender = $gender;
        $this->maritalStatus = $maritalStatus;
        $this->adultStatus = $adultStatus;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getGender(): string
    {
        return $this->gender;
    }

    public function getMaritalStatus(): string
    {
        return $this->maritalStatus;
    }

    public function getAdultStatus(): string
    {
        return $this->adultStatus;
    }
}