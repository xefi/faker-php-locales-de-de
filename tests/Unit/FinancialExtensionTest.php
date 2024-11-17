<?php

namespace Xefi\Faker\DeDe\Tests\Unit;

use Xefi\Faker\Calculators\Iban;

final class FinancialExtensionTest extends TestCase
{
    public function testIban()
    {
        $iban = $this->faker->iban();

        $this->assertEquals(24, strlen($iban));
        $this->assertStringStartsWith('DE', $iban);
        $this->assertTrue(Iban::isValid($iban));
    }
}
