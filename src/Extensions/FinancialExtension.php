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
                '%s%s',
                str_repeat('{d}', 8),  // Bank code (BLZ)
                str_repeat('{d}', 10)  // Account number
            );
        }

        return parent::iban($countryCode, $format);
    }
}
