<?php

namespace FreeElephants\BitMask;

/**
 *
 * @author samizdam
 *
 */
class BitMaskExampleTest extends \PHPUnit_Framework_TestCase
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