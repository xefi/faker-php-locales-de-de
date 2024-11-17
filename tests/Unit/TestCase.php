<?php

namespace Xefi\Faker\DeDe\Tests\Unit;

use Xefi\Faker\Container\Container;

class TestCase extends \PHPUnit\Framework\TestCase
{
    protected Container $faker;

    protected function setUp(): void
    {
        Container::packageManifestPath('/tmp/packages.php');

        (new \Xefi\Faker\DeDe\FakerDeDeServiceProvider())->boot();

        $this->faker = (new Container(false))->locale('de_DE');
    }
}
