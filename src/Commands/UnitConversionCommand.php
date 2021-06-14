<?php

namespace Christyoshy\UnitConversion\Commands;

use Illuminate\Console\Command;

class UnitConversionCommand extends Command
{
    public $signature = 'unit-conversion';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
