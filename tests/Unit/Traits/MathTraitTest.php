<?php

/**
 * MathTraitTest
 * PHP version 8.1
 *
 * @category Test/Unit
 * @package  Tests\Unit\Traits
 * @author   Naitik Patel <patelnaitik@live.in>
 */

namespace Tests\Unit\Traits;

use App\Traits\Math;
use Tests\TestCase;

/**
 * Class MathTraitTest
 *
 * @category Tests
 * @package  Tests\Unit\Traits
 * @author   Naitik Patel <patelnaitik@live.in>
 */
class MathTraitTest extends TestCase
{
    use Math;

    /**
     * The setUp function that arranges the tests
     *
     * @author Naitik Patel <patelnaitik@live.in>
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * Test calculateInterestByTenure method
     *
     * @author Naitik Patel <patelnaitik@live.in>
     * @return void
     */
    public function testCalculateInterestByTenure(): void
    {
        $expected = 8.75;
        $result = $this->calculateInterestByTenure(
            1000,
            7,
            8
        );
        $this->assertSame($result, $expected);
    }
}
