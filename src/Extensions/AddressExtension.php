<?php

namespace Xefi\Faker\DeDe\Extensions;

use Xefi\Faker\Extensions\Extension;

class AddressExtension extends Extension
{
    protected $regions = [
        ['BW' => 'Baden-Württemberg'], ['BY' => 'Bayern'], ['BE' => 'Berlin'], ['BB' => 'Brandenburg'],
        ['HB' => 'Bremen'], ['HH' => 'Hamburg'], ['HE' => 'Hessen'], ['MV' => 'Mecklenburg-Vorpommern'],
        ['NI' => 'Niedersachsen'], ['NW' => 'Nordrhein-Westfalen'], ['RP' => 'Rheinland-Pfalz'], ['SL' => 'Saarland'],
        ['SN' => 'Sachsen'], ['ST' => 'Sachsen-Anhalt'], ['SH' => 'Schleswig-Holstein'], ['TH' => 'Thüringen'],
    ];

    protected $streetSuffixes = [
        'Straße', 'Weg', 'Platz', 'Allee', 'Gasse', 'Ring', 'Ufer', 'Damm', 'Steig', 'Pfad'
    ];

    protected $streetNames = [
        'Haupt', 'Schiller', 'Goethe', 'Mozart', 'Bach', 'Beethoven', 'Kant', 'Lessing',
        'Luther', 'Rilke', 'Friedrich', 'Richard', 'Heinrich', 'Bismarck', 'Wilhelm', 'Humboldt',
        'Hegel', 'Schopenhauer', 'Adler', 'Weber', 'Thomas', 'Einstein', 'Kepler', 'Leibniz',
        'Heidegger', 'Herder', 'Schumann', 'Strauss', 'Kleist', 'Brentano'
    ];

    protected $cityNames = [
        'Berlin', 'Hamburg', 'München', 'Köln', 'Frankfurt am Main', 'Stuttgart', 'Düsseldorf', 'Dortmund', 'Essen', 'Leipzig',
        'Bremen', 'Dresden', 'Hannover', 'Nürnberg', 'Duisburg', 'Bochum', 'Wuppertal', 'Bielefeld', 'Bonn', 'Mannheim',
        'Karlsruhe', 'Münster', 'Wiesbaden', 'Augsburg', 'Gelsenkirchen', 'Mönchengladbach', 'Braunschweig', 'Chemnitz', 'Kiel', 'Aachen'
    ];

    public function region(): array
    {
        return $this->pickArrayRandomElement($this->regions);
    }

    public function city(): string
    {
        return $this->pickArrayRandomElement($this->cityNames);
    }

    public function houseNumber(): string
    {
        return $this->randomizer->getInt(1, 200);
    }

    public function streetName(): string
    {
        return sprintf('%s %s', $this->pickArrayRandomElement($this->streetNames), $this->pickArrayRandomElement($this->streetSuffixes));
    }

    public function streetAddress(): string
    {
        return sprintf('%s %d', $this->streetName(), $this->houseNumber());
    }

    public function zipCode(): int
    {
        return $this->randomizer->getInt(10000, 99999);
    }

    public function fullAddress(): string
    {
        $street = $this->streetAddress();
        $zipCode = $this->zipCode();
        $city = $this->city();
        $region = $this->region();

        return sprintf('%s, %05d %s, %s', $street, $zipCode, $city, reset($region));
    }
}
