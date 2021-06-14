<?php

namespace Christyoshy\UnitConversion\Tests;

use Christyoshy\UnitConversion\UnitConversion;

class WeightTest extends TestCase
{
    /** @test */
    public function it_can_convert_kilograms_to_lbs()
    {
        $Lbs = UnitConversion::fromKilograms(100)->toLbs();
        $this->assertEquals(220.4623,$Lbs);
    }
}
