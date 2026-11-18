<?php

namespace Xefi\Faker\DeDe\Tests\Unit;

final class PhoneExtensionTest extends TestCase
{
    public function testPhoneNumber(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $this->assertMatchesRegularExpression('/^0((30|40|69|89)\d{8}|(211|221|711)\d{7}|15[1279]\d{8}|1(60|7[0125])\d{7}|17[6-9]\d{8})$/', $this->faker->phoneNumber());
        }
    }

    public function testLandlinePhoneNumber(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $this->assertMatchesRegularExpression('/^0((30|40|69|89)-\d{8}|(211|221|711)-\d{7})$/', $this->faker->dashedLandlinePhoneNumber());
        }
    }

    public function testCellPhoneNumber(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $this->assertMatchesRegularExpression('/^0(15[1279] \d{8}|1(60|7[0125]) \d{7}|17[6-9] \d{8})$/', $this->faker->spacedCellPhoneNumber());
        }
    }

    public function testIndicatoredPhoneNumber(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $this->assertMatchesRegularExpression('/^\+49((30|40|69|89)\d{8}|(211|221|711)\d{7}|15[1279]\d{8}|1(60|7[0125])\d{7}|17[6-9]\d{8})$/', $this->faker->indicatoredPhoneNumber());
        }
    }

    public function testIndicatorIsSeparatedFromTheNumber(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $this->assertStringStartsWith('+49 ', $this->faker->spacedIndicatoredPhoneNumber());
            $this->assertStringStartsWith('+49-', $this->faker->dashedIndicatoredPhoneNumber());
            $this->assertStringStartsWith('+49.', $this->faker->dottedIndicatoredPhoneNumber());
            $this->assertMatchesRegularExpression('/^\+49\d+$/', $this->faker->indicatoredPhoneNumber());
        }
    }
}
