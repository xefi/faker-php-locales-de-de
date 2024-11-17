<?php

namespace Xefi\Faker\DeDe;

use Xefi\Faker\DeDe\Extensions\AddressExtension;
use Xefi\Faker\DeDe\Extensions\ColorsExtension;
use Xefi\Faker\DeDe\Extensions\CompanyExtension;
use Xefi\Faker\DeDe\Extensions\FinancialExtension;
use Xefi\Faker\DeDe\Extensions\PersonExtension;
use Xefi\Faker\DeDe\Extensions\TextExtension;
use Xefi\Faker\Providers\Provider;

class FakerDeDeServiceProvider extends Provider
{
    public function boot(): void
    {
        $this->extensions([
            AddressExtension::class,
            CompanyExtension::class,
            FinancialExtension::class,
            PersonExtension::class,
            ColorsExtension::class,
            TextExtension::class,
        ]);
    }
}
