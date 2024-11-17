<?php

namespace Xefi\Faker\DeDe\Extensions;

use Xefi\Faker\Calculators\Luhn;
use Xefi\Faker\Extensions\Extension;

class CompanyExtension extends Extension
{
    public function ustIdNr(): string
    {
        $prefix = 'DE';
        $suffix = $this->randomizer->getBytesFromString(implode(range(0, 9)), 9);

        return $prefix . $suffix;
    }

    public function handelsregisternummer(): string
    {
        $prefix = 'HRB';
        $suffix = $this->randomizer->getBytesFromString(implode(range(0, 9)), 5);

        return $prefix . ' ' . $suffix;
    }
}
