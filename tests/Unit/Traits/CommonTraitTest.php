<?php

/**
 * CommonTraitTest
 * PHP version 8.1
 *
 * @category Test/Unit
 * @package  Tests\Unit\Traits
 * @author   Naitik Patel <patelnaitik@live.in>
 */

namespace Tests\Unit\Traits;

use App\Traits\Common;
use Carbon\Carbon;
use Tests\TestCase;

/**
 * Class CommonTraitTest
 *
 * @category Tests
 * @package  Tests\Unit\Traits
 * @author   Naitik Patel <patelnaitik@live.in>
 */
class CommonTraitTest extends TestCase
{
    use Common;

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
     * Test errorMsg method
     *
     * @author Naitik Patel <patelnaitik@live.in>
     * @return void
     */
    public function testErrorMsg(): void
    {
        $result = $this->errorMsg('test');
        $this->assertSame($result->content(), '{"success":false,"error":"test"}');
    }

    /**
     * Test successMsg method
     *
     * @author Naitik Patel <patelnaitik@live.in>
     * @return void
     */
    public function testSuccessMsg(): void
    {
        $result = $this->successMsg('test');
        $this->assertSame($result->content(), '{"success":true,"data":"test"}');
    }

    /**
     * Test getActionName method
     *
     * @author Naitik Patel <patelnaitik@live.in>
     * @return void
     */
    public function testGetActionName(): void
    {
        $actionName = 'testAction';
        $uriStub = sprintf('testController@%s', $actionName);
        $result = $this->getActionName($uriStub);
        $this->assertNotEmpty($result);
        $this->assertSame($result, $actionName);
    }

    /**
     * Test generateWeekDateList method
     *
     * @author Naitik Patel <patelnaitik@live.in>
     * @return void
     */
    public function testGenerateWeekDateList(): void
    {
        $knownDate = '2020-01-01 00:00:00';
        Carbon::setTestNow($knownDate);
        $numberOfWeekStub = 12;
        $result = $this->generateWeekDateList($numberOfWeekStub);
        $this->assertNotEmpty($result);
        $this->assertSame(count($result), $numberOfWeekStub);
    }
}
