<?php

namespace FreeElephants\BitMask;

/**
 *
 * @author samizdam
 *
 */
class BitFieldTest extends AbstractTestCase
{

    public function testEquals()
    {
        $a = new BitField(2);
        $b = new BitField(2);
        $c = new BitField(3);
        $this->assertTrue($a->equals($b));
        $this->assertFalse($b->equals($c));
    }
}
