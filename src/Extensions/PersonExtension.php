<?php

namespace Xefi\Faker\DeDe\Extensions;

use Xefi\Faker\Extensions\PersonExtension as BasePersonExtension;

class PersonExtension extends BasePersonExtension
{
    public function getLocale(): string|null
    {
        return 'de_DE';
    }

    protected $firstNameMale = [
        'Max', 'Paul', 'Alexander', 'Felix', 'Lukas', 'Leon', 'Jonas', 'Noah', 'Moritz', 'Tim',
        'David', 'Niklas', 'Tobias', 'Jan', 'Sven', 'Benjamin', 'Philipp', 'Florian', 'Christian', 'Markus',
        'Stefan', 'Michael', 'Matthias', 'Andreas', 'Jörg', 'Daniel', 'Patrick', 'Ralph', 'Fabian', 'Kai',
        'Thomas', 'Hendrik', 'Sebastian', 'Benedikt', 'Martin', 'Klaus', 'Lars', 'Johannes', 'Georg', 'Henrik',
    ];

    protected $firstNameFemale = [
        'Maria', 'Anna', 'Laura', 'Sabine', 'Katharina', 'Claudia', 'Monika', 'Sophie', 'Lena', 'Julia',
        'Mia', 'Emma', 'Eva', 'Lisa', 'Charlotte', 'Hannah', 'Carina', 'Nina', 'Kristin', 'Nicole',
        'Verena', 'Beatrice', 'Petra', 'Jana', 'Franziska', 'Isabella', 'Helena', 'Simone', 'Elisabeth', 'Angelika',
        'Carolina', 'Miriam', 'Tina', 'Sarah', 'Birgit', 'Antonia', 'Melanie', 'Vanessa', 'Katrin', 'Sabrina',
    ];

    protected $lastName = [
        'Müller', 'Schmidt', 'Schneider', 'Fischer', 'Weber', 'Meyer', 'Wagner', 'Becker', 'Hoffmann', 'Schulz',
        'Richter', 'Koch', 'Bauer', 'Zimmermann', 'Schulze', 'Klein', 'Wolf', 'Schröder', 'Neumann', 'Schmitz',
        'Lange', 'Kraft', 'Zimmer', 'Maier', 'Hartmann', 'Werner', 'Jäger', 'Roth', 'Berg', 'Schuster',
        'Hahn', 'Vogel', 'Böhm', 'Seidel', 'Friedrich', 'Schreiber', 'Mayer', 'Schäfer', 'Krause', 'Peters',
    ];

    protected $titleMale = ['Herr', 'Dr.', 'Prof.', 'Rev.'];

    protected $titleFemale = ['Frau', 'Dr.', 'Prof.', 'Rev.', 'Fräulein'];
}
