<?php

namespace Behavioral\Template;

use Behavioral\Template\BeachJourney;
use Behavioral\Template\CityJourney;
use PHPUnit\Framework\TestCase;

class TemplateTest extends TestCase
{
    public function testCanGetOnVacationOnTheBeach()
    {
        $beachJourney = new BeachJourney();
        $beachJourney->takeATrip();

        $this->assertSame([
            'Buy a flight ticket',
            'Taking the plane',
            'Swimming and sun-bathing',
            'Taking the plane'
            ],
            $beachJourney->getThingsToDo()
        );
    }

    public function testCanGetOnAJourneyToACity()
    {
        $cityJourney = new CityJourney();
        $cityJourney->takeATrip();

        $this->assertSame([
                'Buy a flight ticket',
                'Taking the plane',
                'Eat, drink, take photos and sleep',
                'Buy a gift',
                'Taking the plane'
            ],
            $cityJourney->getThingsToDo()
        );
    }
}