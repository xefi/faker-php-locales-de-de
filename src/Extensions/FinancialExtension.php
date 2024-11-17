<?php

namespace Xefi\Faker\DeDe\Extensions;

use Xefi\Faker\Extensions\FinancialExtension as BaseFinancialExtension;

class FinancialExtension extends BaseFinancialExtension
{
    public function getLocale(): string|null
    {
        return 'de_DE';
    }

    public function iban(?string $countryCode = null, ?string $format = null): string
    {
        if ($countryCode === null) {
            $countryCode = 'DE';
        }

        if ($format === null) {
            $format = sprintf(
                '%s%s%s',
                str_repeat('{d}', 2),
                str_repeat('{d}', 8),
                str_repeat('{d}', 10)
            );
        }

        return parent::iban($countryCode, $format);
    }
}
