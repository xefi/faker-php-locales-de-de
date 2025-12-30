<?php

namespace Xefi\Faker\DeDe\Extensions;

use Xefi\Faker\Calculators\Luhn;
use Xefi\Faker\Extensions\Extension;

class CompanyExtension extends Extension
{
    public function getLocale(): string|null
    {
        return 'de_DE';
    }

    private array $companies = [
        "Kronberg Industries", "Schneider & Sohn GmbH", "Bergmann Technologies",
        "Falkenstein Systems", "Hohenberg Gruppe", "Lindholm Logistik",
        "Weisswald Solutions", "Schwarz & Braun AG", "MeisterWerk Engineering",
        "Eisbach Automationen", "VogelTech GmbH", "Steinbruch Energie",
        "Kühnemann Fabrik", "Brandenburg Dynamics", "Hartmann Stahlwerke",
        "Goldmann Vertriebsnetz", "Löwenkraft Ventures", "Neuschwan Innovations",
        "Waldorf Maschinenbau", "Fischer & Söhne KG", "Dornburg Elektrotechnik",
        "Ziegelmann Bau AG", "Adlerflug Aviation", "Blumenfeld Pharma",
        "Grünwald Energie", "Thalberg Digital", "Breitenbach Logistik",
        "Rheinwerke Systems", "Silberstrom GmbH", "Schlossberg Solutions"
    ];

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

    public function company(): string
    {
        return $this->pickArrayRandomElement($this->companies);
    }
}
