<?php
declare(strict_types=1);

namespace FreeElephants\BitMask;

/**
 *
 * @author samizdam
 *
 */
class BitMaskExampleTest extends AbstractTestCase
{

    public function testHasFlagFalse()
    {
        $example = new Example();
        $this->assertFalse($example->hasFlag(0b0001));
    }

    public function testHasFlagTrue()
    {
        $example = new Example();
        $this->assertTrue($example->hasFlag(0b0010));
    }

}
