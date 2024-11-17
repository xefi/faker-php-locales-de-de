<?php

namespace Xefi\Faker\DeDe\Tests\Unit;

use Xefi\Faker\Calculators\Luhn;
use Xefi\Faker\Container\Container;

final class CompanyExtensionTest extends TestCase
{
    public function testUstIdNr()
    {
        $results = [];
        for ($i = 0; $i < 100; $i++) {
            $results[] = $this->faker->ustIdNr();
        }

        foreach ($results as $result) {
            $this->assertMatchesRegularExpression('/^DE\d{9}$/', $result);
            $this->assertEquals(11, strlen($result)); // 'DE' + 9 digits
        }
    }

    public function testHandelsregisternummer()
    {
        $results = [];
        for ($i = 0; $i < 100; $i++) {
            $results[] = $this->faker->handelsregisternummer();
        }

        foreach ($results as $result) {
            $this->assertMatchesRegularExpression('/^HRB \d{5}$/', $result);

            [$prefix, $suffix] = explode(' ', $result);
            $this->assertEquals('HRB', $prefix);
            $this->assertEquals(5, strlen($suffix));
        }
    }
}
