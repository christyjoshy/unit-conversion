<?php

namespace Christyoshy\UnitConversion;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Christyoshy\UnitConversion\UnitConversion
 */
class UnitConversionFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'unit-conversion';
    }
}
