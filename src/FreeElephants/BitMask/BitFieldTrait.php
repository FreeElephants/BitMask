<?php

namespace FreeElephants\BitMask;

/**
 *
 * @author samizdam
 *
 */
trait BitFieldTrait
{

    private $bitFieldValue = 0;

    /**
     *
     *
     * @param int $value
     * @return void
     */
    public function setBitFieldValue($value)
    {
        $this->bitFieldValue = abs( (int) $value);
    }

    /**
     *
     *
     * @return int
     */
    public function getBitFieldValue()
    {
        return $this->bitFieldValue;
    }

}