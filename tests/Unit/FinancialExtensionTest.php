<?php

namespace Xefi\Faker\DeDe\Tests\Unit;

use Xefi\Faker\Calculators\Iban;

final class FinancialExtensionTest extends TestCase
{
    public function testIban()
    {
        $iban = $this->faker->iban();

        $this->assertMatchesRegularExpression('/^DE\d{20}$/', $iban);
        $this->assertStringStartsWith('DE', $iban);
        $this->assertTrue(Iban::isValid($iban));
    }
}
