<?php

namespace Xefi\Faker\DeDe\Extensions;

use Xefi\Faker\Extensions\Extension;

class AddressExtension extends Extension
{
    protected $states = [
        ['BW' => 'Baden-Württemberg'], ['BY' => 'Bayern'], ['BE' => 'Berlin'], ['BB' => 'Brandenburg'],
        ['HB' => 'Bremen'], ['HH' => 'Hamburg'], ['HE' => 'Hessen'], ['MV' => 'Mecklenburg-Vorpommern'],
        ['NI' => 'Niedersachsen'], ['NW' => 'Nordrhein-Westfalen'], ['RP' => 'Rheinland-Pfalz'], ['SL' => 'Saarland'],
        ['SN' => 'Sachsen'], ['ST' => 'Sachsen-Anhalt'], ['SH' => 'Schleswig-Holstein'], ['TH' => 'Thüringen'],
    ];

    protected $regions = [
        'North', 'East', 'South', 'West',
    ];

    public function region(): string
    {
        return $this->pickArrayRandomElement($this->regions);
    }

    public function state(): array
    {
        return $this->pickArrayRandomElement($this->states);
    }
}
