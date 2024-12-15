<?php

namespace Xefi\Faker\DeDe\Tests\Unit;

use Random\Randomizer;
use ReflectionClass;
use Xefi\Faker\DeDe\Extensions\AddressExtension;

final class AddressExtensionTest extends TestCase
{
    protected array $states = [];
    protected array $regions = [];
    protected array $cityNames = [];
    protected array $streetNames = [];
    protected array $streetSuffixes = [];
    protected AddressExtension $addressExtension;

    protected function setUp(): void
    {
        parent::setUp();

        $this->addressExtension = new AddressExtension(new Randomizer());
        $reflection = new ReflectionClass($this->addressExtension);

        $this->regions = $reflection->getProperty('regions')->getValue($this->addressExtension);
        $this->states = $reflection->getProperty('states')->getValue($this->addressExtension);
        $this->cityNames = $reflection->getProperty('cityNames')->getValue($this->addressExtension);
        $this->streetNames = $reflection->getProperty('streetNames')->getValue($this->addressExtension);
        $this->streetSuffixes = $reflection->getProperty('streetSuffixes')->getValue($this->addressExtension);
    }

    public function testRegion(): void
    {
        $results = [];
        for ($i = 0; $i < count($this->regions); $i++) {
            $results[] = $this->faker->unique()->region();
        }

        $this->assertEqualsCanonicalizing(
            $this->regions,
            $results
        );
    }

    public function testState(): void
    {
        $results = [];
        for ($i = 0; $i < count($this->states); $i++) {
            $results[] = $this->faker->unique()->state();
        }

        $this->assertEquals(
            sort($this->states),
            sort($results)
        );
    }

    public function testCity(): void
    {
        $results = [];
        for ($i = 0; $i < count($this->cityNames); $i++) {
            $results[] = $this->faker->unique()->city();
        }

        $this->assertEqualsCanonicalizing(
            $this->cityNames,
            $results
        );
    }

    public function testHouseNumber(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $houseNumber = $this->faker->unique()->houseNumber();
            $this->assertGreaterThanOrEqual(1, $houseNumber);
            $this->assertLessThanOrEqual(200, $houseNumber);
        }
    }

    public function testStreetName(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $streetName = $this->faker->unique()->streetName();
            [$name, $suffix] = explode(' ', $streetName, 2);

            $this->assertContains($name, $this->streetNames);
            $this->assertContains($suffix, $this->streetSuffixes);
        }
    }

    public function testStreetAddress(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $streetAddress = $this->faker->unique()->streetAddress();
            [$streetName, $suffix, $houseNumber] = explode(' ', $streetAddress, 3);

            $this->assertContains($streetName, $this->streetNames);
            $this->assertContains($suffix, $this->streetSuffixes);
            $this->assertGreaterThanOrEqual(1, $houseNumber);
            $this->assertLessThanOrEqual(200, $houseNumber);
        }
    }

    public function testZipCode(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $zipCode = $this->faker->unique()->zipCode();
            $this->assertMatchesRegularExpression('/^\d{5}$/', $zipCode);
        }
    }

    public function testFullAddress(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $address = $this->faker->unique()->fullAddress();

            $this->assertMatchesRegularExpression('/^[\wß ]+ \d{1,3}, \d{5} [\wöü ]+, [\wü-]+$/', $address);
        }
    }
}
