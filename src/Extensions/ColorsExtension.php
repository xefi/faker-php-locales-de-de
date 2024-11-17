<?php

namespace Xefi\Faker\DeDe\Extensions;

use Xefi\Faker\Extensions\ColorsExtension as BaseColorsExtension;

class ColorsExtension extends BaseColorsExtension
{
    public function getLocale(): string|null
    {
        return 'de_DE';
    }

    protected array $safeColorNames = [
        'Schwarz', 'Braun', 'Grün', 'Marine', 'Olive',
        'Lila', 'Türkis', 'Limette', 'Blau', 'Silber',
        'Grau', 'Gelb', 'Fuchsia', 'Aqua', 'Weiß',
    ];

    protected array $colorNames = [
        'Aqua', 'Aquamarin', 'Azur',
        'Beige', 'Braun', 'Koralle', 'Grün', 'Blau',
        'Fuchsia', 'Cyan', 'DunkelBlau', 'DunkelCyan', 'DunkelGrau',
        'DunkelGrün', 'DunkelOrange', 'DunkelRot', 'DunkelViolett', 'TiefPink', 'TiefHimmelBlau',
        'DimmGrau', 'DodgerBlau', 'WaldGrün', 'Gold', 'Grau',
        'GrünGelb', 'Honigtau', 'HeißPink', 'IndischesRot', 'Indigo', 'Elfenbein', 'Khaki', 'Lavendel',
        'LawnGrün', 'ZitronenChiffon', 'HellesBlau', 'HellesKoralle', 'HellesCyan',
        'HellesGrau', 'HellesGrün', 'HellesPink', 'HellesLachs', 'HellesSeeGrün', 'HellesHimmelBlau', 'HellesGelb',
        'Limette', 'LimettenGrün', 'Leinen', 'Magenta', 'Maroon',
        'MittleresAquamarin', 'MittleresBlau', 'MittlereOrchidee', 'MittleresViolett', 'MittleresSeeGrün',
        'MittleresSchieferBlau', 'MittleresFrühlingGrün', 'MittleresTürkis', 'MittleresViolettRot', 'MitternachtsBlau',
        'MintCreme', 'RosigeRose', 'Mokassin', 'NavajoWeiß', 'Marine',
        'Olive', 'OlivenBraun', 'Orange', 'OrangeRot',
        'Orchidee', 'BlassesGrün', 'BlassesTürkis', 'BlassesViolettRot', 'PapayaWhip',
        'PfirsichPuff', 'Peru', 'Pink', 'Plum', 'PulverBlau',
        'Lila', 'Rot', 'RosyBraun', 'KönigsBlau', 'SattelBraun',
        'Lachs', 'SandyBraun', 'SeeGrün', 'Muschelschale', 'Siena',
        'Silber', 'HimmelBlau', 'SchieferBlau', 'SchieferGrau', 'Schnee',
        'FrühlingGrün', 'StahlBlau', 'Türkis',
        'Distel', 'Tomate', 'Violett', 'Weizen',
        'Weiß', 'WeißRauch', 'Gelb',
    ];
}
