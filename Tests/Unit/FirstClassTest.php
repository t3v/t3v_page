<?php
namespace T3v\T3vPage\Tests\Unit;

use Nimut\TestingFramework\TestCase\UnitTestCase;
use T3v\T3vPage\Tests\Unit\Fixtures\LoadableClass;

/**
 * The first class test class.
 *
 * @package T3v\T3vPage\Tests\Unit
 */
class FirstClassTest extends UnitTestCase
{
    /**
     * Tests if the method returns true.
     *
     * @test
     */
    public function methodReturnsTrue(): void
    {
        $firstClassObject = new LoadableClass();

        self::assertTrue($firstClassObject->returnsTrue());
    }
}
