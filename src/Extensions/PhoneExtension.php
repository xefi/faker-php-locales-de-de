<?php

namespace Xefi\Faker\DeDe\Extensions;

use Xefi\Faker\Extensions\PhoneExtension as BasePhoneExtension;

class PhoneExtension extends BasePhoneExtension
{
    public string $defaultPrefix = '0';

    public string $indicator = '+49';

    /**
     * Get the locale handled by this extension.
     *
     * @return string|null
     */
    public function getLocale(): ?string
    {
        return 'de_DE';
    }

    protected array $landlineFormats = [
        '30{separator}{d}{d}{d}{d}{d}{d}{d}{d}',
        '40{separator}{d}{d}{d}{d}{d}{d}{d}{d}',
        '69{separator}{d}{d}{d}{d}{d}{d}{d}{d}',
        '89{separator}{d}{d}{d}{d}{d}{d}{d}{d}',
        '211{separator}{d}{d}{d}{d}{d}{d}{d}',
        '221{separator}{d}{d}{d}{d}{d}{d}{d}',
        '711{separator}{d}{d}{d}{d}{d}{d}{d}',
    ];

    protected array $cellFormats = [
        '151{separator}{d}{d}{d}{d}{d}{d}{d}{d}',
        '152{separator}{d}{d}{d}{d}{d}{d}{d}{d}',
        '157{separator}{d}{d}{d}{d}{d}{d}{d}{d}',
        '159{separator}{d}{d}{d}{d}{d}{d}{d}{d}',
        '160{separator}{d}{d}{d}{d}{d}{d}{d}',
        '170{separator}{d}{d}{d}{d}{d}{d}{d}',
        '171{separator}{d}{d}{d}{d}{d}{d}{d}',
        '172{separator}{d}{d}{d}{d}{d}{d}{d}',
        '175{separator}{d}{d}{d}{d}{d}{d}{d}',
        '176{separator}{d}{d}{d}{d}{d}{d}{d}{d}',
        '177{separator}{d}{d}{d}{d}{d}{d}{d}{d}',
        '178{separator}{d}{d}{d}{d}{d}{d}{d}{d}',
        '179{separator}{d}{d}{d}{d}{d}{d}{d}{d}',
    ];
}
