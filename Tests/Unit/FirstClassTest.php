<?php
namespace T3v\T3vPage\Tests\Unit;

use T3v\T3vPage\Tests\Unit\Fixtures\LoadableClass;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

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
